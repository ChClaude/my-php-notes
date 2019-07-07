<?php

session_start();

// you can also update the session variable
//$_SESSION['name'] = 'John Doe';

print_r($_SESSION);

// it is safer to wrap the session variables with isset to avoid error when that value is not set
$name = isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
$email = $_SESSION['email'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sessions</title>
</head>
<body>
<h1>Hello <?php echo $name; ?></h1>
</body>
</html>
