<head>
  <title>Pharmacist Homepage</title>
  <link rel="stylesheet" type="text/css" href="homepageeg.css">
 <script>
      function toggleTable() {
        var table = document.getElementById("myTable");
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
	
	  <script>
    function clearTable() {
      var table = document.getElementById("myTable");
      table.innerHTML = "";
    }
  </script>

</head>
<body>
  <header>
  <div class="logo"><img src='images/logo.png'></div>
    <div class="navbar">
      <nav>
        <ul>

          <li><a href="#">Account</a></li>
          <li><a href="#"><?php echo $user['p_name']; ?></a></li>
          <li><a href="logout_a.php"><img src="images/logout.png" alt="logout banner"></a></li> <!-- Visible when logged in -->

        </ul>
      </nav>

    </div>
  </header>
  <section>

  <button onclick="toggleTable()">View Prescriptions</button>
  
    <div id = "myTable" class ="bs-example" style = "display : none">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="page-header clearfix">
    <h2 id = "" class="pull-left">Pending Prescriptions to be administered</h2>
    </div>
    <?php
    include_once 'drugsconnect.php';
    $result = mysqli_query($conn,"SELECT * FROM prescriptions");
    ?>
    <?php
    if (mysqli_num_rows($result) > 0) {
    ?>
    <table class='table table-bordered table-striped'>
    <tr>
    <td>Patient Name</td>
    <td>Drug Name</td>
    <td>Drug Amount</td>
    <td>frequency</td>
    </tr>
    <?php
    $i=0;
    while($row = mysqli_fetch_array($result)) {
    ?>
    <tr>

    <td><?php echo $row['patientName']; ?></td>
    <td><?php echo $row["drugName"]; ?></td>
    <td><?php echo $row["drugAmount"]; ?></td>
    <td><?php echo $row["frequency"]; ?></td>
    </tr>
    <?php
    $i++;
    }
    ?>
    </table>
    <?php
    }
    else{
    echo "No result found";
    }
    ?>
    </div>
    </div>        
    </div>

    <button onclick="clearTable()">Administer All</button>
    </div>

    <br>

    <button onclick="toggleTable2()">Administered Prescriptions</button>
    <div id = "myTable2" class ="bs-example"  style = "display : none">
    <div class="container">
    <div class="row">
    <div class="col-md-12">
    <div class="page-header clearfix">
    <h2 id = "myTable" class="pull-left">Administered Drugs</h2>
    </div>
    <?php
    include_once 'connect.php';
    $result = mysqli_query($conn,"SELECT * FROM prescriptions");
    ?>
    <?php
	@@ -170,10 +175,7 @@ function clearTable() {
    </div>        
    </div>
    </div>
  </section>

  <footer>
    <p>&copy; 2023 Your Company. All rights reserved.</p>
  </footer>
</body>
</html>
