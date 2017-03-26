<?php

include "connect.php" ;

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];
$gender = $_POST['gender'];

echo $username . " " . $email;

//insertion into db

$result=mysqli_query("INSERT into login_data(NAME,ID,PASSWORD,CONFIRM,GENDER) values('$username','$email','$password','$confirmpassword','$gender')",$conn);

echo "data is added";
?>
