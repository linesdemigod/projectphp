<?php

function emptyInputSignup ($firstname, $surname, $dob, $email, $username, $pwd, $pwdconfirm) {
    $result;

    if(empty($firstname) || empty($surname) || empty($dob) || empty($email) || empty($username) || empty($pwd) || empty($pwdconfirm)) {
        $result = true;
    
    } else {
        $result = false;
    }

    return $result;
}

function invalidUid ($username) {

    $result;
if (!preg_match("/^[a-zA-Z0-9]*$/", $username)) {

    $result = true;

  } else {

    $result = false;
  }

    return $result;
}



function invalidEmail ($email) {

    $result;
  
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $result = true;
  
    } else {
  
      $result = false;
    }
  
      return $result;
  }


  function pwdMatch ($pwd, $pwdconfirm) {

    $result;
  
    if ($pwd !== $pwdconfirm) {
      $result = true;
  
    } else {
  
      $result = false;
    }
  
      return $result;
  }
  

  function uidExists ($conn, $username, $email) {

    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
  
    $stmt = mysqli_stmt_init($conn);
  
    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("location: ../signup.php?errors=stmtfailed");
      exit();
    }
      mysqli_stmt_bind_param($stmt, "ss", $username, $email);
  
      mysqli_stmt_execute($stmt);
  
      $resultData = mysqli_stmt_get_result($stmt);
  
      if ($row = mysqli_fetch_assoc($resultData)) {
  
        return $row;
  
      } else {
        $result = false;
  
        return $result;
      }
  
      mysqli_stmt_close($stmt);
    }

   
    function createUser ($conn, $firstname, $surname, $dob, $email, $username, $pwd) {

        $sql = "INSERT INTO users(usersFirstName, usersSurName, usersDOB, usersEmail, usersUid, usersPwd) VALUES (?, ?, ?, ?, ?, ?);";
    
        $stmt = mysqli_stmt_init($conn);
    
        if (!mysqli_stmt_prepare($stmt, $sql)) {
          header("location: ../signup.php?errors=stmtfailed");
          exit();
        }
    
        //hashing passwords
    
          $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);
    
          mysqli_stmt_bind_param($stmt, "ssssss", $firstname, $surname,$dob, $email,  $username, $hashedPwd);
    
          mysqli_stmt_execute($stmt);
    
          mysqli_stmt_close($stmt);
    
            header("location: ../signup.php?errors=none");
            exit();
    
        }
    
    
        function passwordStrength ($pwd, $pwdconfirm) {
          $result;
    
          if ($pwd && $pwdconfirm < 8) {
            $result = false;
    
          } else {
    
            $result = true;
          }
    
            return $result;
        }