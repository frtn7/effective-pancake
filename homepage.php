<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home Page</title>
    <link rel="stylesheet" href="node_modules\bootstrap\dist\css\bootstrap.css">
</head>

<body>
    <p><?php
    include 'login.php';
    session_start();
    echo 'Welcome, '.$_SESSION['username'].'!';
    ?></p>
    <a href="logout.php">Logout</a>
    <script src="node_modules\bootstrap\dist\js\bootstrap.js"></script>
    <script src="node_modules\jquery\dist\jquery.js"></script>
    <script src="node_modules\popper.js\dist\popper.js"></script>
</body>

</html>