<?php

   
  session_start();
  require_once('connect.php');
     
      $email=$_POST['email'];
      $password=$_POST['password'];

      $sql = "SELECT ID FROM login-data WHERE ID = '$email' and PASSWORD = '$password'";
      $result = mysql_query($sql);
      $count=mysql_num_rows($result);

      if($count==1){
         header("location:home.html");
        }
      else {
        echo "<h2>Login Failed!!!</h2>";
        }

      //$row = mysql_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      //$count = mysql_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      //if($count == 1) {
        // session_register("myusername");
      //$_SESSION['login_user'] = $myusername;
         
      //   header("location: home.html");
      //}else {
        // $error = "Your Login Name or Password is invalid";
      //}
   
?>