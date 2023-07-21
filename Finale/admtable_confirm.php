<?php
    
    require 'function_a.php';
    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM adm_table WHERE ad_pwd = $id"));
    }else{
        header("Location: login_a.php");
    }
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin table view confirmation page</title>
  <link rel="stylesheet" type="text/css" href="confirmation.css">
  <script>
    function navigate() {
      // Get all the checkboxes
      var checkboxes = document.querySelectorAll('input[type="checkbox"]');
      
      // Iterate over the checkboxes to find the selected one
      for (var i = 0; i < checkboxes.length; i++) {
        if (checkboxes[i].checked) {
          // Get the value of the selected checkbox
          var nextPage = checkboxes[i].value;
          
          // Redirect to the selected page
          window.location.href = nextPage;
          
          // Break the loop after redirecting
          break;
        }
      }
    }
  </script>
</head>
<body>
  <div class="confirm">
  
  <h1>Which table would you like to view?</h1>
  
  <input type="checkbox" value="edit1_p.php"> Patient<br>
  <input type="checkbox" value="edit1_d.php"> Doctor<br>
  <input type="checkbox" value="edit1_a.php"> Admin<br>
  <input type="checkbox" value="edit1_ph.php">Pharmacist<br>
  <input type="checkbox" value="edit1_pr.php">Prescriptions<br>
  <input type="checkbox" value="edit1_dr.php">Drugs<br>
  
  <button onclick="navigate()">View table </button>
  <button  onclick="window.location.href='adm_screen.php';">Go back</button>
  </div>

</body>
</html>
