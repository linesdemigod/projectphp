<?php


$dbServername = "localhost";
$dbUsername = "root"; //use username when connected online db
$dbPassword = "demigod";
$dbName = "phpproject";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

//it fires this once the connection fails
if (!$conn) {
  die("Connection failed:" . mysqli_connect_error());
}
