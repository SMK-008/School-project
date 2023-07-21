<?php
  require 'function.php';

  if(isset($_SESSION["id"])){
    header("Location: patient_screen.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients Registration</title>
    <link rel="stylesheet" type="text/css" href="forms.css">
</head>
<body>

  
   <form action="" method="post">
   <h2>Patient Registration</h2>

      <input type="hidden" id = "action" value = "register">
      
      <label for=""> Social Security Number</label>
      <input type = "number" id = "ssn" name = "ssn" value =""><br>

      <label for=""> Username</label>
      <input type = "text" id ="patient_name" name = "patient_name" value = ""><br>
      <label for="city">City</label>
      <select name ="patient_address" id = "patient_address" value ="">
          <option value="Nairobi">Nairobi</option>
          <option value="Nakuru">Nakuru</option>
          <option value="Mombasa">Mombasa</option>
          <option value="Eldoret">Eldoret</option>
          <option value="Garissa">Garissa</option>
          <option value="Kisumu">Kisumu</option>
      </select>

      <label for="">Age</label>
      <select id = "age" name = "age"value ="">
        <script>
          for (let i = 1; i <= 100; i++) {
            document.write('<option value="' + i + '">' + i + '</option>');
          }
        </script>
      </select>
      <br>
      <label for="">Password</label>
      <input type = "password" id = "pwd" name = "pwd" value =""><br>
      <input type="checkbox" onclick="myFunction()">Show Password

       <script>
       function myFunction() {
       var x = document.getElementById("pwd");
       if (x.type === "password") {
       x.type = "text";
       } else {
       x.type = "password";
       }
      }
      </script>
      <button type = "button" onclick="submitData();">Register</button><br>
      <p>Are you already registered?<a href= "login.php">Click here to login</a></p>
  </form> 
  <br>
  

  <?php 
    require 'script.php';
  ?>
</body>
</html>>