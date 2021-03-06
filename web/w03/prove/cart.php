<?php 
    session_start();
    include "items.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Cart</title>
</head>

<body>
    <?php include "storeHeader.php"?>
    <h2>Your cart</h2>
    <?php
        $cart_items = $_SESSION["cart"];
        foreach($cart_items as $item) {
            if(isset($_POST[$item])) {
                $delete_key = array_search($item, $cart_items);
                unset($cart_items[$delete_key]);
                $_SESSION["cart"] = $cart_items;
                unset($_POST[$item]);
            }
        }
    ?>
    <form action="" method="POST">
        <div class="checkoutTable">
            <?php
                foreach($_SESSION["cart"] as $item) {
                    $src = $items[$item];
                    echo "<div class='item'><p>$item</p><img src='$src'/><br/>";
                    echo "<input class='button' type='submit' name='$item' value='Remove'></div>";
                }
            ?>
        </div>
    </form>
    <a href="browse.php">Continue shopping</a>
    <a href="checkout.php">Check out</a>
</body>
</html>