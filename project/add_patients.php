<?php
require_once("connect.php");

$ssn = $_POST['ssn'] ;
$patientname=$_POST['patients_name'];
$patient_address=$_POST['Patients_address'];
$age=$_POST['age'];


$sql= "INSERT INTO Patients  (ssn,patientname,patient_address,age)
VALUES('$ssn','$patientname','$patient_address','$age')";






if ($conn -> query($sql) === TRUE) {
    echo '<br> Record inserted successfully';
}else{
    echo '<br>Error: '.$conn->error;
}

$conn->close();

?>