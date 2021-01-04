<?php

if(isset($_POST["submit"])) {
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    //connection to db
    require_once 'dbh.inc.php';

    //Logic
    require_once 'functions.inc.php';

    if (emptyAdminInputLogin($username, $pwd) !== false) {
        header("location: ../admin.php?error=emptyinput");
        exit();
      }
    
      loginAdmin($conn, $username, $pwd);
    
    } else {
    
      header("location: ../admin.php");
      exit();
    }

