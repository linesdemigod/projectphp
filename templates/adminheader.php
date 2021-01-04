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
            <a href="#" class="brand-logo center">Admin</a>
            <ul class="right">
                <li><a href="index.php">Home</a></li>
                <?php 
                    if (isset($_SESSION["useruid"])) {
                        echo " <li><a href='includes/loginadmin.inc.php'>Logout</a></li>";
                    } else {
                        echo "<li><a href='admin.php'>Admin</a></li>";
                    }
                ?>
            </ul>
        </div>

    </nav>
        
    </header>