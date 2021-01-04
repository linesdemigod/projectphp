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
    

        //function for the login form 

        function emptyInputLogin ($username, $pwd) {
            $result;

            if(empty($username) || empty($pwd)) {
                $result = true;
            } else {
                $result = false;
            }

            return $result;
        }


        function loginUser($conn, $username, $pwd) {
            
            $uidExists = uidExists($conn, $username, $username);

            if ($uidExists === false) {
                header("location: ../login.php?error=wronglogin");
                exit();
            };

            //compared the user login password with the hashed password at the db

            $pwdHashed = $uidExists["usersPwd"];
            $checkPwd = password_verify($pwd, $pwdHashed);

            if($checkPwd === false) {
                header("location: ../login.php?error=wronglogin"); 
                exit();
            } else if ($checkPwd === true) {
                
                session_start();
                $_SESSION["userid"] = $uidExists["usersId"];
                $_SESSION["useruid"] = $uidExists["usersUid"];

                header("location: ../profile.php");
                exit();
            }
        } 


        //Function for the Admin Panel Log In

        function adminUidExists ($conn, $username) {

          $sql = "SELECT * FROM admin WHERE adminUid = ? ;";
        
          $stmt = mysqli_stmt_init($conn);
        
          if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("location: ../signup.php?errors=stmtfailed");
            exit();
          }
            mysqli_stmt_bind_param($stmt, "s", $username);
        
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

        function emptyAdminInputLogin ($username, $pwd) {
          $result;

          if(empty($username) || empty($pwd)) {
              $result = true;
          } else {
              $result = false;
          }

          return $result;
      }


      function loginAdmin($conn, $username, $pwd) {
          
        $uidExists = adminUidExists($conn, $username);

          if ($uidExists === false) {
              header("location: ../admin.php?error=wronglogin");
              exit();
          };

          //compared the user login password with the hashed password at the db

          $pwdHashed = $uidExists["adminPwd"];
          $checkPwd = password_verify($pwd, $pwdHashed);
          
        if($checkPwd === false) {
              header("location: ../admin.php?error=wronglogin"); 
              exit();
          } else if ($checkPwd === true) {
              
              session_start();
              $_SESSION["adminid"] = $uidExists["adminId"];
              $_SESSION["adminuid"] = $uidExists["adminUid"];

              header("location: ../adminpanel.php");
              exit();
          }
      } 
        
