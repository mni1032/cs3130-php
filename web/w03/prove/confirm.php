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
    <?php
        $street = $_POST["street"];
        $city = $_POST["city"];
        $state = $_POST["state"];
        $zip = $_POST["zip"];
        $address = "$street\n$city, $state $zip"; 
        echo "Your order will be shipped to:\n$address";
    ?>
    <table>
        <?php
            foreach($_SESSION["cart"] as $item) {
                $src = $items[$item];
                echo "<tr><td><p>$item</p><img src='$src'/>";
                echo "<input type='submit' name='$item' value='Remove'</td></tr>";
            }
        ?>
    </table>
</body>
</html>