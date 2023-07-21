<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "school_project");
//if
if (isset($_POST["action"])){
    if($_POST["action"] == "register"){
        register(); 
    }
    else if($_POST["action"] == "login"){
        login();
    }
}
//register
function register(){
    global $conn;
    
    $drugAmount = $_POST["drugAmount"];
    $drugName = $_POST["drugName"];
    $frequency = $_POST["frequency"];
    $patientName = $_POST["patientName"];


    
    if(empty($drugAmount) || empty($drugName) || empty($frequency)|| empty($patientName)){
        echo "Please fill out the form below!!";
        exit;
    }

    

    $query = "INSERT INTO prescriptions( drugAmount,drugName,frequency,patientName) VALUES ( '$drugAmount','$drugName', '$frequency','$patientName')";
    mysqli_query($conn, $query);
    echo "Data entered successfully";
}




?>