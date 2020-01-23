<?php 
   // start session
   session_start();
   // save session variables into local variables
   $c = $_SESSION["favcolor"];
   $a = $_SESSION["favanimal"];
?>
<h1>Your faborite color is <?=$c?>, and your favorite animal is a <?=$a?>.</h1>
<?php ?>