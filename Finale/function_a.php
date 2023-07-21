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
    
    $ad_name = $_POST["ad_name"];
    $ad_pwd = $_POST["ad_pwd"];
  


    
    if(empty($ad_name) || empty($ad_pwd)){
        echo "Please fill out the form below!!";
        exit;
    }

    $user = mysqli_query($conn, "SELECT * FROM adm_table WHERE ad_pwd = '$ad_pwd'");
    if (mysqli_num_rows($user) > 0){
        echo "This password is already in use";
        exit;
    }

    $query = "INSERT INTO adm_table ( ad_name,ad_pwd) VALUES ( '$ad_name', '$ad_pwd')";
    mysqli_query($conn, $query);
    echo "Registered Successfully";
}

//login

function login(){
    global $conn;

    $ad_pwd = $_POST["ad_pwd"];
    $ad_name = $_POST["ad_name"];

    $user = mysqli_query($conn, "SELECT * FROM adm_table WHERE ad_pwd = '$ad_pwd'");

    if(mysqli_num_rows($user) > 0 ){
        $row = mysqli_fetch_assoc($user);
        if($ad_pwd == $row["ad_pwd"]){
            echo "Login successful";
            $_SESSION['login'] = true;
            $_SESSION['id'] = $row["ad_pwd"];
        }else{
            echo "Invalid Details";
        }
    }else{
        echo "User not registered";
        exit;
    }
}
?>