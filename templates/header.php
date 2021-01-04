<!-- start session in order for the website login run -->
<?php
  session_start();
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

    <link rel="stylesheet" href="css/materialize.css">
    <link rel="stylesheet" href="css/materialize.min.css" media="screen,projection">
    <link rel="stylesheet" href="css/main.css">
    <title>PHP PROJECT</title>
</head>
<body>
    <header>
    <nav class="nav-wrapper">
        <div class="container">
            <a href="#" class="brand-logo">Banks</a>
            <a href="" class="sidenav-trigger" data-target="mobile-menu">
                <i class="material-icons">menu</i>
            </a>
            <ul class="right hide-on-med-and-down">
                <li><a href="index.php">Home</a></li>
                <?php 
                    if (isset($_SESSION["useruid"])) {
                        echo " <li><a href='profile.php'>Profile</a></li>";
                        echo " <li><a href='includes/logout.inc.php'>Logout</a></li>";
                    } else {
                        echo "<li><a href='signup.php'>Sign up</a></li>";
                        echo "<li><a href='login.php'>Log in</a></li>";
                    }
                ?>
                <li><a href="contact.php">Contact</a></li>
                 
            </ul>
            <ul class="sidenav grey lighten-2" id="mobile-menu">
            <li><a href="index.php">Home</a></li>
                <li><a href="contact.php">Contact</a></li>
                <?php 
                    if (isset($_SESSION["useruid"])) {
                        echo " <li><a href='profile.php'>Profile</a></li>";
                        echo " <li><a href='includes/logout.inc.php'>Logout</a></li>";
                    } else {
                        echo "<li><a href='signup.php'>Sign up</a></li>";
                        echo "<li><a href='login.php'>Log in</a></li>";
                    }
                ?>
            </ul>
        </div>

    </nav>
        
    </header>