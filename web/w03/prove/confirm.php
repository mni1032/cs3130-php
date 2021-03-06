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
    <title>Confirm order</title>
</head>

<body>
    <?php include "storeHeader.php"?>
    <h2>Order confirmation</h2>
    <?php

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        $street = test_input($_POST["street"]);
        $city = test_input($_POST["city"]);
        $state = test_input($_POST["state"]);
        $zip = test_input($_POST["zip"]);
        $address = "$street<br/>$city, $state $zip"; 
        echo "Your order will be shipped to:<br/>$address";
    ?>
    <div class="checkoutTable">
        <?php
            foreach($_SESSION["cart"] as $item) {
                $src = $items[$item];
                echo "<div class='item'><p>$item</p><img src='$src'/></div>";
            }
        ?>
    </div>
</body>
</html>