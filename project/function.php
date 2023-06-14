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

    $ssn = $_POST["ssn"];
    $patient_name = $_POST["patient_name"];
    $address = $_POST["patient_address"];
    $age = $_POST["age"];
    
    if(empty($patient_name) || empty($address) || empty($age) || empty($ssn)){
        echo "Please fill out the form below!!";
        exit;
    }
}
?>
