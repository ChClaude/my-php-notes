<?php
if (isset($_GET['name'])) { // we check if the $_GET variable exists other the echo $_GET['name']; would give an error
    //print_r($_GET);
    $name = htmlentities($_GET['name']);
//    $email = htmlentities($_GET['email']);
//    echo "name: $name <br />email: $email";
}

/*if (isset($_POST['name'])) { // we check if the $_GET variable exists other the echo $_GET['name']; would give an error
    print_r($_POST);
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    echo "name: $name <br />email: $email";
}

echo $_SERVER['QUERY_STRING']; // this only works with the GET method in form*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>My Website</title>
</head>
<body>
<form action="get_post.php" method="GET">
    <div class="">
        <label for="name">Name</label><br/>
        <input type="text" name="name" id="name"/>
    </div>
    <div>
        <label for="email">Email</label><br/>
        <input type="text" name="email" id="email"/><br/> <br/>
    </div>
    <input type="submit" value="Submit"/>
</form>

<ul>
    <!--setting the name to Brad using the URL string -->
    <li><a href="get_post.php?name=Brad">Brad</a></li>
    <li><a href="get_post.php?name=Steve">Steve</a></li>
</ul>

<h1><?php echo "{$name}'s Profile"; ?></h1>
</body>
</html>