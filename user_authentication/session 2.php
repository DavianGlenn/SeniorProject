<?php   session_start();  ?>

<html>
  <head>
       <title> Home </title>
  </head>
  <body>

<?php
      if(!isset($_SESSION['use'])) // If session is not set then redirect to Login Page
       {
           header("Location:../index.html");  
       }

          echo $_SESSION['use'];

          echo "Login Success";

        echo '<script type="text/javascript"> window.open("../websiteTemplate/index.html","_self");</script>';
?>
</body>
</html>