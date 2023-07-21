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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="forms.css">
</head>
<body>
    

    <form autocomplete = "off" action="" method= "post">
    <h2>Patient Login</h2>
        <input type="hidden" id = "action" value = "login">
    
        

        <label for=""> Username</label>
        <input type = "text" id ="patient_name" name = "patient_name" value = ""><br>
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
        </script><br>
        <button type = "button" onclick = "submitData();">Login</button><br>

        <p>Are you not registered?<a href= "patient_registration.php">Click here to register </a></p>
        <p>Did you choose the wrong option?<a href= "login_confirm.php">Click here to go back </a></p>
    </form>

    

    <?php
        require 'script.php';
    ?>

</body>
</html>