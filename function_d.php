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
    $SSN= $_POST["SSN"];
    $D_name = $_POST["D_name"];
    $Specialty = $_POST["Specialty"];
    $YearsOfExperience = $_POST["YearsOfExperience"];
    $D_pwd = $_POST["D_pwd"];
  


    
    if(empty($D_name) || empty($SSN) || empty($Specialty) || empty($YearsOfExperience)||empty($D_pwd)){
        echo "Please fill out the form below!!";
        exit;
    }

    $user = mysqli_query($conn, "SELECT * FROM doctors WHERE D_pwd = '$D_pwd'");
    if (mysqli_num_rows($user) > 0){
        echo "This password is already in use";
        exit;
    }

    $query = "INSERT INTO doctors (SSN, D_name, Specialty, YearsOfExperience,D_pwd) VALUES ('$SSN', '$D_name','$Specialty', '$YearsOfExperience', '$D_pwd')";
    mysqli_query($conn, $query);
    echo "Registered Successfully";
}

//login

function login(){
    global $conn;

    $D_pwd = $_POST["D_pwd"];
    $D_name = $_POST["D_name"];

    $user = mysqli_query($conn, "SELECT * FROM doctors WHERE D_pwd = '$D_pwd'");

    if(mysqli_num_rows($user) > 0 ){
        $row = mysqli_fetch_assoc($user);
        if($D_pwd == $row["D_pwd"]){
            echo "Login successful";
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row["D_pwd"];
        }else{
            echo "Invalid Details";
        }
    }else{
        echo "User not registered";
        exit;
    }
}
?>