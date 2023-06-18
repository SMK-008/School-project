<?php
    require 'function.php';
    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM patients WHERE ssn = $id"));
    }else{
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient HomePage</title>

    <link rel="stylesheet" href="patient_screen.css">
</head>
<body>
    <h1>
        <?php echo $user['patient_name']; ?>
    </h1>

    <a href = "logout.php" class= "logout-link">Logout</a>

</body>
</html>