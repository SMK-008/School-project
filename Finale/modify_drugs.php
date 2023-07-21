<?php
   require 'function_a.php';
   if(isset($_SESSION["id"])){
       $id = $_SESSION["id"];
       $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM adm_table WHERE ad_pwd = $id"));
   }else{
       header("Location: login_a.php");
   }
?>
<?php

require ("connect.php");

if (isset($_POST['update'])) {
    $ssn = $_POST['ssn'];
    $name = $_POST['patientname'];
    $address = $_POST['patient_address'];
    $age = $_POST['age'];
    
    $sql = "UPDATE patients SET patientname='$name', patient_address='$address',age='$age' WHERE ssn='$ssn'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Delete record
if (isset($_GET['delete'])) {
    $ssn = $_GET['delete'];
    
    $sql = "DELETE FROM patients WHERE ssn=$ssn";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Query to retrieve data from the database
$sql = "SELECT * FROM patients";
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit and Delete Data</title>
    <link rel="stylesheet" type="text/css" href="homepageeg.css">
    <script>
      function toggleTable() {
        var table = document.getElementById("myform");
        if (table.style.display === "none") {
          table.style.display = "block";
        } else {
          table.style.display = "none";
        }
      }
    </script>

<script>
      function toggleTable2() {
        var table = document.getElementById("myTable2");
        if (table.style.display === "none") {
          table.style.display = "block";
        } else {
          table.style.display = "none";
        }
      }
    </script>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>

<header>
<div class="logo"><img src='images/logo.png'></div>
    <div class="navbar">
      <nav>
        <ul>
          
        <li><a href="#">Account</a></li>
        <li><a href="#"><?php echo $user['ad_name']; ?></a></li>
        <li><a href="logout_a.php"><img src="images/logout.png" alt="logout banner"></a></li> <!-- Visible when logged in -->
          
          
          
        </ul>
      </nav>
      
    </div>
    </header>
<body>
    <h2>Data from Database</h2>
    <section>
    <button onclick="toggleTable()">Update Inventory</button>
<form id ="myform"action="" method="post">

<input type="hidden" id = "action" value = "register">


<label for="">Drug Name</label>
<input type = "text" id ="drugName" name = "drugName" value = ""><br>
<label for="">Drug Amount</label>
<input type = "text" id ="drugAmount" name = "drugAmount" value = ""><br>
<label for="">Price</label>
<input type = "number" id ="price" name = "price" value = ""><br>
  
<br>
<button type = "button" onclick="submitData();">Update</button>
</form>
<br>

<button onclick="toggleTable2()">Edit Drugs List</button>
<div id = "myTable2" class ="bs-example"  style = "display : none">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="page-header clearfix">
    <h2 id = "myTable" class="pull-left">Drugs in Database</h2>
    </div>
    <?php
    include_once 'connect.php';
    $result = mysqli_query($conn,"SELECT * FROM drugs");
    ?>
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
    <table class='table table-bordered table-striped'>
    <tr>
    <td>Drug Name</td>
    <td>Drug Amount</td>
    <td>price</td>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <tr>
    <td><?php echo $row['drugName']; ?></td>
    <td><?php echo $row["drugAmount"]; ?></td>
    <td><?php echo $row["price"]; ?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
    <button  onclick="window.location.href='adm_screen.php';">Go back</button>
    <?php
    }
    else{
    echo "No result found";
    }
    ?>
    </div>
    </div>        
    </div>
    </div> 

<?php 
    require 'script_dr.php';
?>


    </section>
    <footer>

    </footer>
</body>
</html>
