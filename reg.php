<?php
// define variables and set to empty values
$errusername = $erremail = $errpassword = $errconfirmpassword = $errgender = "";

$username = $email = $password = $confirmpassword = $gender = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["username"])) {
    $errusername = "Name is required";
  } else {
    $username = test_input($_POST["username"]);
  }

  if (empty($_POST["email"])) {
    $erremail = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }

  if (empty($_POST["password"])) {
    $errpassword = "Password is required";
  } else {
    $password = test_input($_POST["password"]);
  }

  if (empty($_POST["confirmpassword"])) {
    $errconfirmpassword = "Confirm password is required";
  } else {
    $confirmpassword = test_input($_POST["confirmpassword"]);
  }

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }
}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>
