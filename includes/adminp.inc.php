<?php

if (isset($_POST['submit'])) {

  $firstname = $_POST['firstname'];
  $surname = $_POST['surname'];
  $dob = $_POST['dob'];
  $email = $_POST['email'];
  $username = $_POST['uid'];
  $pwd = $_POST['pwd'];
  $pwdconfirm = $_POST['pwdconfirm'];

  //connect to the database
  require_once 'dbh.inc.php';
  //function for error handling
  require_once 'adminfunction.inc.php';

  //logic to check if the input is empty
  if (emptyInputSignup($firstname, $surname, $dob, $email, $username, $pwd, $pwdconfirm) !== false) {
    header("location: ../adminp.php?error=emptyinput");
    exit();
  }

  //logic to check if entered right username
  if (invalidUid($username) !== false) {
    header("location: ../adminp.php?error=invaliduid");
    exit();
  }

  //logic to check if the input right email
  if (invalidEmail($email) !== false) {
    header("location: ../adminp.php?error=invalidemail");
    exit();
  }

  //logic to check if the provided password matches
  if (pwdMatch($pwd, $pwdconfirm) !== false) {
    header("location: ../adminp.php?error=passwordsdontmatch");
    exit();
  }

  //logic to check if the username is taken
  if (uidExists($conn, $username, $email) !== false) {
    header("location: ../adminp.php?error=usernametaken");
    exit();
  }

  if (passwordStrength($pwd, $pwdconfirm) < 8) {
    header("location: ../adminp.php?error=passwordisshort");
    exit();
  }

  createUser($conn, $firstname, $surname, $dob, $email, $username, $pwd);

} else {
  header("location: ../adminp.php");
}
