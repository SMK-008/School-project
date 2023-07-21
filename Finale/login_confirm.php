<!DOCTYPE html>
<html>
<head>
  <title>User login confirmation page</title>
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
  <h1>What type of user are you?</h1>
  
  <input type="checkbox" value="login.php"> Patient<br>
  <input type="checkbox" value="login_d.php"> Doctor<br>
  <input type="checkbox" value="login_a.php"> Admin<br>
  <input type="checkbox" value="login_ph.php">Pharmacist<br>
  
  <button onclick="navigate()">Go </button>
  <button onclick="window.location.href='home.php'">Go back</button>
  </div>
</body>
</html>
