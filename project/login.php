<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h2>Patient Login</h2>

    <form autocomplete = "off" action="" method= "post">
        <input type="hidden" id = "action" value = "login">
    
        <label for="">Patient SSN</label>
        <input type = "number" id = "ssn" name = "ssn" value =""><br>

        <label for="">Patient Username</label>
      <input type = "text" id ="patient_name" name = "patient_name" value = ""><br>
        <button type = "button" onclick = "submitData();">Login</button>
    </form>

    <a href= "patient_registration.php">Go to Registration</a>

    <?php
        require 'script.php';
    ?>

</body>
</html>