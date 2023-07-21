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
    $price = $_POST["price"];
    
    if(empty($drugAmount) || empty($drugName) || empty($price)){
        echo "Please fill out the form below!!";
        exit;
    }
 
    $query = "INSERT INTO drugs( drugName,drugAmount,price) VALUES ('$drugName','$drugAmount','$price')";
    mysqli_query($conn, $query);
    echo "Data entered successfully";

}

?>