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
    
    $p_name = $_POST["p_name"];
    $p_pwd = $_POST["p_pwd"];
    $p_number = $_POST["p_number"];
  


    
    if(empty($p_name) || empty($p_pwd) || empty($p_number)){
        echo "Please fill out the form below!!";
        exit;
    }

    $user = mysqli_query($conn, "SELECT * FROM pharmacists WHERE p_pwd = '$p_pwd'");
    if (mysqli_num_rows($user) > 0){
        echo "This password is already in use";
        exit;
    }

    $query = "INSERT INTO pharmacists( p_name,p_number,p_pwd) VALUES ( '$p_name','$p_number', '$p_pwd')";
    mysqli_query($conn, $query);
    echo "Registered Successfully";
}

//login

function login(){
    global $conn;

    $p_pwd = $_POST["p_pwd"];
    $p_name = $_POST["p_name"];

    $user = mysqli_query($conn, "SELECT * FROM pharmacists WHERE p_pwd = '$p_pwd'");

    if(mysqli_num_rows($user) > 0 ){
        $row = mysqli_fetch_assoc($user);
        if($p_pwd == $row["p_pwd"]){
            echo "Login successful";
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row["p_pwd"];
        }else{
            echo "Invalid Details";
        }
    }else{
        echo "User not registered";
        exit;
    }
}
?>