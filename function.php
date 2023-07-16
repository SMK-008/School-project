<?php
session_start();
$conn = mysqli_connect("localhost", "root", "1", "school_project");
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
    $pwd = $_POST["pwd"];
    
    if(empty($patient_name) || empty($address) || empty($age) || empty($ssn) || empty($pwd)){
        echo "Please fill out the form below!!";
        exit;
    }

    $user = mysqli_query($conn, "SELECT * FROM patients WHERE pwd = '$pwd'");
    if (mysqli_num_rows($user) > 0){
        echo "This password is already in use";
        exit;
    }

    $query = "INSERT INTO patients (ssn, patient_name, patient_address, age,pwd) VALUES ('$ssn', '$patient_name', '$address', '$age','$pwd')";
    mysqli_query($conn, $query);
    echo "Registered Successfully";
}

//login

function login(){
    global $conn;

    $pwd = $_POST["pwd"];
    $patient_name = $_POST["patient_name"];

    $user = mysqli_query($conn, "SELECT * FROM patients WHERE pwd = '$pwd'");

    if(mysqli_num_rows($user) > 0 ){
        $row = mysqli_fetch_assoc($user);
        if($pwd == $row["pwd"]){
            echo "Login successful";
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row["pwd"];
        }else{
            echo "Invalid Details";
        }
    }else{
        echo "User not registered";
        exit;
    }
}
?>