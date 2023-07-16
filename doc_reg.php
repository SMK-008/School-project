<?php
  require 'function_d.php';

  if(isset($_SESSION["id"])){
    header("Location: doc_screen.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor's Registration</title>
    <link rel="stylesheet" type="text/css" href="forms.css">
</head>
<body>

  
   <form action="" method="post">
   <h2>Doctors Registration</h2>

      <input type="hidden" id = "action" value = "register">
      <label for="">Doctor's SSN</label>
      <input type = "number" id = "SSN" name = "SSN" value =""><br>

      <label for="">Doctor's Username</label>
      <input type = "text" id ="D_name" name = "D_name" value = ""><br>
      <label for="">Password</label>
      <input type = "password" id ="D_pwd" name = "D_pwd" value = ""><br>
      <input type="checkbox" onclick="myFunction()">Show Password

       <script>
       function myFunction() {
       var x = document.getElementById("D_pwd");
       if (x.type === "password") {
       x.type = "text";
       } else {
       x.type = "password";
       }
      }
      </script>
      <label for="">Specialty</label>
      <select name ="Specialty" id = "Specialty" value ="">
          <option value="Dentist">Dentist</option>
          <option value="Surgeon">Surgeon</option>
          <option value="Physician">Physician</option>
          
        </select>
        <label for="">Years Of Experience</label>
      <input type = "number" id ="YearsOfExperience" name = "YearsOfExperience" value = ""><br>

      
      

      
      <br>
      <button type = "button" onclick="submitData();">Register</button>
      <a href= "login_d.php">Go to Login </a>
  </form> 
  <br>
  

  <?php 
    require 'script_d.php';
  ?>
</body>
</html>