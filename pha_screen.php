<?php
    require 'function_ph.php';
    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pharmacists WHERE p_pwd = $id"));
    }else{
        header("Location: login_ph.php");
    }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Pharmacist Homepage</title>
  <link rel="stylesheet" type="text/css" href="homepageeg.css">
</head>
<body>
  <header>
    <div class="logo">Your Logo</div>
    <div class="navbar">
      <nav>
        <ul>
          <li><a href="eg.html">Home</a></li>
          <li><a href="#">About</a></li>
          <li><a href="#">Services</a></li>
          <li><a href="#"><?php echo $user['p_name']; ?></a></li>
          
         
          
          <li><a href="logout_ph.php">Logout</a></li> <!-- Visible when logged in -->
          
        </ul>
      </nav>
      
    </div>
  </header>

  <section class="hero">
    <div class="hero-content">
      <h1>Welcome to our website!</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur consequat, lectus ac fermentum finibus, ligula est facilisis quam, eu dignissim lorem mauris sed mauris.</p>
    </div>
  </section>

  <footer>
    <p>&copy; 2023 Your Company. All rights reserved.</p>
  </footer>
</body>
</html>