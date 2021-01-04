<?php 

if(isset($_SESSION["useruid"])) {
    $uid = $_SESSION["uid"];
   

    //connection to db
    require_once 'dbh.inc.php';

    //Logic
    require_once 'functions.inc.php';

    $sql = "SELECT * FROM users WHERE usersUid = $uid;";
  
    
}