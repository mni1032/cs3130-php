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
    <link rel="stylesheet" href="">
    <title>School Supplies</title>
</head>

<body>
    <a href="cart.php">Cart</a>
    <form action="" method="POST">
        <table>
            <?php
                foreach($items as $name => $src) {
                    echo "<tr><td><p>$name</p><img src='$src'/>";
                    echo "<input type='submit' name='$name' value='Add to cart'/></td></tr>";
                }
            ?>
        </table>
    </form>
    <?php
        foreach($items as $item => $src)
        if(isset($_POST[$item])) {
            if (!in_array($item, $_SESSION["cart"])) {
                $_SESSION["cart"][] = $item;
            }
            unset($_POST[$item]);
        }
        print_r($_SESSION["cart"]);
    ?>
</body>
</html>