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
    <title>Confirm order</title>
</head>

<body>
    <?php include "storeHeader.php"?>
    <?php
        $street = $_POST["street"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];
        $address = "$street<br/>$city, $state $zip"; 
        echo "Your order will be shipped to:<br/>$address";
    ?>
    <table class="itemTable">
        <?php
            foreach($_SESSION["cart"] as $item) {
                $src = $items[$item];
                echo "<tr><td><p>$item</p><img src='$src'/></td></tr>";
            }
        ?>
    </table>
</body>
</html>