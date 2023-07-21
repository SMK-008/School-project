<?php
    require 'function_d.php';
    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM doctors WHERE D_pwd = $id"));
    }else{
        header("Location: login_d.php");
    }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Doctor's Homepage</title>
  <link rel="stylesheet" type="text/css" href="homepageeg.css">
</head>
<body>
  <header>
  <div class="logo"><img src='images/logo.png'></div>
    <div class="navbar">
      <nav>
        <ul>
          
          <li><a href="#">Account</a></li>
          <li><a href="#"><?php echo $user['D_name']; ?></a></li>
          
         
          
          <li><a href="logout_d.php"><img src='images/logout.png'></a></li> <!-- Visible when logged in -->
          
        </ul>
      </nav>
      
    </div>
  </header>
<section>
<form action="" method="post">
  <h2>Enter prescription details</h2>

<input type="hidden" id = "action" value = "register">


<label for=""> Patient Name</label>
<input type = "text" id ="patientName" name = "patientName" value = ""><br>
<label for="">Drug Name</label>
<input type = "text" id ="drugName" name = "drugName" value = ""><br>
<label for="">Drug Amount</label>
<input type = "number" id ="drugAmount" name = "drugAmount" value = ""><br>
<label for="">frequency</label>
<input type = "number" id ="frequency" name = "frequency" value = ""><br>
  
<br>
<button type = "button" onclick="submitData();">Prescribe</button>

</form> 
<?php 
    require 'script_pr.php';
  ?>

  </section>
  <footer>
    <p>&copy; 2023 Your Company. All rights reserved.</p>
  </footer>
</body>
</html>