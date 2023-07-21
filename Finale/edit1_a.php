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
    $ad_name = $_POST['ad_name'];
    $ad_pwd = $_POST['ad_pwd'];
    
    
    $sql = "UPDATE adm_table SET ad_name='$ad_name', ad_pwd='$ad_pwd' WHERE ad_pwd='$ad_pwd'";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Delete record
if (isset($_GET['delete'])) {
    $ad_pwd = $_GET['delete'];
    
    $sql = "DELETE FROM adm_table WHERE ad_pwd='$ad_pwd'";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

// Query to retrieve data from the database
$sql = "SELECT * FROM adm_table";
$result = $conn->query($sql);


?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit and Delete Data</title>
    <link rel="stylesheet" type="text/css" href="homepageeg.css">
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
<body>
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
    <h2>Admin's table</h2>
    <table>
        <colgroup>
        <col style="background-color:grey">
        <col style="background-color:grey">
        <col style="background-color:grey">
       
        </colgroup>
        <tr>
            <th>Name</th>
            <th>Password</th>
            
            <th>Action</th>
        </tr>
        <?php
        // Check if there are any records in the result
        if ($result->num_rows > 0) {
            // Output data of each row
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["ad_name"] . "</td>";
                echo "<td>" . $row["ad_pwd"] . "</td>";
               
                echo "<td><a href='edit.php?id=" . $row["ad_pwd"] . "'>Edit</a> | <a href='?delete=" . $row["ad_pwd"] . "' onclick='return confirm(\"Are you sure you want to delete this record?\")'>Delete</a></td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='4'>No records found.</td></tr>";
        }
        ?>
    </table>
    <button  onclick="window.location.href='admtable_confirm.php';">Go back</button>
</body>
</html>