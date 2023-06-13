<?php
require_once("connect.php");
$sql="SELECT * FROM patients";
$results=$conn->query($sql);
$row=$results->fetch_assoc();
print_r($row);





?>