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
    <a href="browse.php">Continue shopping</a>
    <a href="checkout.php">Check out</a>
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
        print_r($_SESSION["cart"]);
    ?>
    <form action="" method="POST">
        <table>
            <?php
                foreach($_SESSION["cart"] as $item) {
                    $src = $items[$item];
                    echo "<tr><td><p>$item</p><img src='$src'/>";
                    echo "<input type='submit' name='$item' value='Remove'</td></tr>";
                }
            ?>
        </table>
    </form>
</body>
</html>