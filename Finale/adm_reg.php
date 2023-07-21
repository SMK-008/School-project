<?php
  require 'function_a.php';

  if(isset($_SESSION["id"])){
    header("Location: adm_screen.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signup</title>
    <link rel="stylesheet" type="text/css" href="forms.css">
</head>
<body>

  
   <form action="" method="post">
   <h2>Admin signup</h2>

      <input type="hidden" id = "action" value = "register">
      

      <label for=""> Username</label>
      <input type = "text" id ="ad_name" name = "ad_name" value = ""><br>
      <label for="">Password</label>
      <input type = "password" id ="ad_pwd" name = "ad_pwd" value = ""><br>
      <input type="checkbox" onclick="myFunction()">Show Password

       <script>
       function myFunction() {
       var x = document.getElementById("ad_pwd");
       if (x.type === "password") {
       x.type = "text";
       } else {
       x.type = "password";
       }
      }
      </script>
      
      <br>
      <button type = "button" onclick="submitData();">Register</button>
      <p>Are you already registered?<a href= "login_a.php">Click here </a></p>
      <p>Did you choose the wrong option?<a href= "signin_confirm.php">Click here to go back </a></p>
  </form> 
  <br>
  

  <?php 
    require 'script_a.php';
  ?>
</body>
</html>