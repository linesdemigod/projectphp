<?php

 if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "banksdizzy888@gmail.com";
    $headers = "From: ". $mailFrom;
    $txt = "You have received an e-mail from ". $name.".\n\n".$message;

      // require_once 'functions.inc.php';

    // if (emptyInputContact($name, $subject, $mailFrom, $message) !== false) {
    //   header("location: ../contact.php?error=emptyinput");
    //   exit();
    // }

    // if (invalidContactEmail($mailFrom) !== false) {
    //   header("location: ../contact.php?error=invalidemail");
    //   exit();
    // }

    //create main functions
    mail($mailTo, $subject, $txt, $headers);
    header("Location: ../contact.php?mailsent");

 }
