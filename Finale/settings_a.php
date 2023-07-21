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
    <div class="logo">Your Logo</div>
    <div class="navbar">
      <nav>
        <ul>
          
          
          
        </ul>
      </nav>
      
    </div>
  </header>

  <section class="account">
    
    
  </section>

  <footer>
    <p>&copy; 2023 Your Company. All rights reserved.</p>
  </footer>
</body>
</html>