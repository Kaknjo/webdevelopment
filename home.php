<?php 
include('connection.php');

if(!isset($_SESSION['username'])): ?>
    Please <a href="login.php">Login</a> or <a href="index.php"> Register </a> 
<?php 
header('location: index.php');
endif ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <p> Welcome <?php echo $_SESSION['username']; ?> </body>
</html>