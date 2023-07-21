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
  <title>Admin Homepage</title>
  <link rel="stylesheet" type="text/css" href="homepageeg.css">
   

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

  <section class="">
    What would you like to do today?
    
    <li><a href="admtable_confirm.php">View database tables</a></li><br>
    <li><a href="modify_drugs.php">Modify the drugs inventory</a></li>
  



    
  </section>

  <footer>
    <p>&copy; 2023 Your Company. All rights reserved.</p>
  </footer>
</body>
</html>