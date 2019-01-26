<?php 
 include("connection.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="styles.css" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="main.js"></script>
</head>
<body>
<div class="container">
    <form class="rforma" action="index.php" method="POST">
        <div class="header bg-primary text-white">
            <h3>Register</h3>
        </div>
        <div>
            <?php
                include('errors.php');
             ?>
        </div>
        <div class="form-group">
            <label for="username">User Name</label>
            <input class="form-control" type="text" name="username" placeholder="Enter name">
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input class="form-control" type="text" name="email" placeholder="Enter email">
        </div>

        <div class="form-group">
            <label for="password1">Password</label>
            <input class="form-control" type="password" name="password1" placeholder="Enter password">
        </div>

        <div class="form-group">
            <label for="password2">Confirm Password</label>
            <input class="form-control" type="password" name="password2" placeholder="Confirm password">
        </div>
        
        <div class="form-group">
            <button class="btn btn-primary btn-lg " type="submit" name="submit">Register</button>
        </div>

        <a href="login.php">Logirajte se</a>
                            
    </form>
    </div> 
    




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</body>
</html>