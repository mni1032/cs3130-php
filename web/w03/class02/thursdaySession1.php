<?php
   session_start();
?>
<!DOCTYPE html>
<html>
   <body>
      <?php
         // remove previous session variable
         // Set session variables
         $_SESSION["favcolor"] = "blue";
         $_SESSION["favanimal"] = "dragon";
         // echo that variables have been set
         echo "Session variables have been set.<br/>";?>
      <a href="thursdaySession2.php">Check the variables on another page</a>

      <?php // set session variables using a form ?>
   </body>
</html>