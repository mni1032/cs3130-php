<?php 
    session_start();
    include "items.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>Cart</title>
</head>

<body>
    <?php
        foreach($_SESSION["cart"] as $item) {
            $src = $items[$item];
            echo "<tr><td><p>$item</p><img src='$src'/></td></tr>";
            echo "<input type='submit' name='remove' value='$name'</td></tr>";
        }
    ?>
</body>
</html>