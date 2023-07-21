<?php
    require 'function.php';
    if(isset($_SESSION["id"])){
        $id = $_SESSION["id"];
        $user = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM patients WHERE pwd = $id"));
    }else{
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html>

<head>
  <title>Homepage</title>
  <link rel="stylesheet" type="text/css" href="homepageeg.css">
</head>
<body>
  <header>
  <div class="logo"><img src='images/logo.png'></div>
    <div class="navbar">
      <nav>
        <ul>
          
          <li><a href="#">Account</a></li>
          <li><a href="#"><?php echo $user['patient_name']; ?></a></li>
          <li><a href="logout.php"><img src="images/logout.png" alt="logout banner"></a></li> <!-- Visible when logged in -->
          
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