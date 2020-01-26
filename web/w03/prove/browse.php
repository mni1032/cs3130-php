<?php 
    session_start();
    if (!isset($_SESSION["cart"])) {
        $_SESSION["cart"] = array();
    }
    include "items.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>School Supplies</title>
</head>

<body>
    <?php include "storeHeader.php"?>
    <a href="cart.php">Cart</a>
    <form action="" method="POST">
        <div class="itemTable">
            <?php
                foreach($items as $name => $src) {
                    echo "<div class='item'><p>$name</p><img src='$src'/><br/>";
                    echo "<input type='submit' name='$name' value='Add to cart'/></div>";
               }
            ?>
        </div>
    </form>
    <?php
        foreach($items as $item => $src)
        if(isset($_POST[$item])) {
            if (!in_array($item, $_SESSION["cart"])) {
                $_SESSION["cart"][] = $item;
            }
            unset($_POST[$item]);
        }
    ?>
</body>
</html>