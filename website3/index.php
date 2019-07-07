<?php
// Message Vars
$msg = '';
$msgClass = '';


// Check for Submit
if (filter_has_var(INPUT_POST, 'submit')) {
//    echo 'Submitted';

    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Check required Fields
    if (!empty($email) && !empty($name) && !empty($message)) {
        // passed
        // Check Email
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            // Failed
            $msg = 'Please use a valid email';
            $msgClass = 'alert-danger';
        } else {
            // Passed
            // Recipient Email
            $toEmail = 'support@lulendoscitech.com';
            $subject = 'Contact Request From ' . $name;
            $body = '<h2>Contact Request</h2>
                    <h4>Name<p>' . $name . '</p></h4>
                    <h4>Email<p>' . $email . '</p></h4>
                    <h4>Message<p>' . $message . '</p></h4>
            ';

            // Email Headers
            $headers = "MINE-Version: 1.0" . "\r\n";
            $headers .= "Content_Type:text/htm;charset=UTF-8\r\n";

            // Additional Headers
            $headers .= "From: $name<$email>\r\n";

            if (mail($toEmail, $subject, $body, $headers)) {
                // Email Sent
                $msg = 'Your email has been sent';
                $msgClass = 'alert-success';

            } else {
                // Failed
                $msg = 'Your email was NOT sent';
                $msgClass = 'alert-danger';
            }
        }
    } else {
        // failed
        $msg = 'Please fill in all fields';
        $msgClass = 'alert-danger';
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Contact Us</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <div class="nav-header"><a class="navbar-brand" href="#">My Website</a></div>
    </div>
</nav>

<div class="container" style="margin-top: 20px">

    <?php if ($msg != ''): ?>
        <div class="alert <?php echo $msgClass; ?>"><?php echo $msg; ?></div>
    <?php endif; ?>

    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" name="name" class="form-control" id="name"
                   value="<?php echo isset($_POST['name']) ? $name : ''; ?>">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" class="form-control" id="email"
                   value="<?php echo isset($_POST['email']) ? $email : ''; ?>">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea name="message" class="form-control"
                      id="message"><?php echo isset($_POST['message']) ? $message : ''; ?></textarea>
        </div>
        <br>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
    </form>
</div>

</body>
</html>