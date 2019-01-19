<?php
session_start();
$servername = "localhost";
$username = "iw3htp";
$password = "password";
//initialize variables
$uname_reg = "";
$pswd_reg = "";
$pswd2_reg = "";
$acc_type_reg = "student";
$uname_log = "";
$pswd_log = "";
$acc_type_log = "student";
$messages = []; // messages to show to the user


// create and connect to mysql server
if ( !( $database = mysqli_connect($servername, $username, $password)))
  die ("Could not connect to server");

// connecting to ecademy database
if ( !(mysqli_select_db( $database, "skinprofiledb")))
  die ("Error connecting to the skinprofile database");



if (isset($_POST['registration'])) {
  $uname = mysqli_real_escape_string($database, $_POST['uname_reg']);
  $pswd = mysqli_real_escape_string($database, $_POST['pswd_reg']);
  $pswd2 = mysqli_real_escape_string($database, $_POST['pswd2_reg']);

  // check database to ensure the same username does not exist in the system.
  $uname_check_q = "SELECT * FROM users WHERE uname='$uname'";
  $result = mysqli_query($database, $uname_check_q);
  $uname_exists = mysqli_fetch_assoc($result);

  //validate form
  if ($pswd != $pswd2) {
    array_push($messages, "Passwords must match.");
  }
  if ($uname_exists) {
    array_push($messages, "Username already exists.");
  }



  $skintype = $_POST['skintype'];
  $skindiseases = $_POST['skindisease'];
  /* array of skin diseases
  $numskindiseases = count($skindiseases);
  for ($i=0; $i < $numskindiseases; $i++) {

  }
  */
  $skinconcerns = $_POST['skinconcerns']; //array of skin concerns


  if (count($messages) == 0) {
    $pswd = md5($pswd); // encrypt password
    $query = "INSERT INTO users (uname, password) VALUES ('$uname', '$pswd')";
    mysqli_query($database, $query);
    array_push($messages, "You are now registered for an account. Your username is $uname");
  }

}


?>
