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

      <h3>Let's do it with a form.</h3>
      <form action="" method="POST">
         <input type="text" name="picture"/>
         <input type="submit" name="Submit" value="Submit!"/>
      </form>
      <?php 
         if(isset($_POST['Submit'])) {
            $_SESSION['pictureUrl'] = $_POST['picture'];
         }
      ?>

   </body>
</html>