<?php
// Start or resume the session
session_start();

// Retrieve form data
$ssn = $_POST['ssn'];
$patient_name = $_POST['patient_name'];
$address = $_POST['patient_address'];
$age = $_POST['age'];

// Validate the form data (perform any necessary validation checks)

// Connect to the MySQL database
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "school_project";

$conn = new mysqli($servername, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// // Sanitize the input data (optional)
// $ssn = mysqli_real_escape_string($conn, $ssn);
// $patient_name = mysqli_real_escape_string($conn, $patient_name);
// $address = mysqli_real_escape_string($conn, $address);
// $age = mysqli_real_escape_string($conn, $age);

// Insert the user information into the database
$sql = "INSERT INTO patients (ssn, patient_name, patient_address, age) VALUES ('$ssn', '$patient_name', '$address', '$age')";

if ($conn->query($sql) === TRUE) {
    echo "User registered successfully!";
    
    // Store data in session variables
    $_SESSION['username'] = $patient_name;
    // Add more session variables as needed
    
    // Redirect to a success page or perform other actions
    header("Location: success.php");
    exit();
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close the database connection
$conn->close();
?>
