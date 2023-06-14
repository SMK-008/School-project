<?php
  require 'function.php';

  if(isset($_SESSION["id"])){
    header("Location: index.php");
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patients Registration</title>
</head>
<body>

  <h1>Patient Registration</h1>
   <form action="addpatients.php" method="post">

      <input type="hidden" id = "action" value = "register">
      <label for="">Patient SSN</label>
      <input type = "number" id = "ssn" name = "ssn" value =""><br>

      <label for="">Patient Username</label>
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

      <label for="">Age:</label>
      <select id = "age" name = "age"value ="">
        <script>
          for (let i = 1; i <= 100; i++) {
            document.write('<option value="' + i + '">' + i + '</option>');
          }
        </script>
      </select>
      <br>
      <button type = "button" onclick="submitData();">Register</button>
  </form> 
  <br>
  <a href= "login.php">Go to Login </a>

  <?php 
    require 'script.php';
  ?>
</body>
</html>>