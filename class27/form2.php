<?php
    session_start();
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>File Handling</title>
  </head>
  <body>
      <h1><a href="phpCode.txt" target="_blank"> CLICK HERE FOR PHP CODE</a></h1>
      <?php
        $_SESSION["name"] = $_GET["userId"];
        $_SESSION["pass"] = $_GET["userPassword"];
        echo "Welcome ".$_SESSION["name"]."!";
        echo "<a href =\"form3.php\">Click here for form3";
      ?>




  </body>
</html>
