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
    <title>HTML Template</title>
</head>

<body>
    <form action="" method="POST">
        <table>
            <?php
                foreach($items as $name => $src) {
                    echo "<tr><td><p>$name</p><img src='$src'/>";
                    echo "<input type='submit' name='add' value='$name'</td></tr>";
                }
            ?>
        </table>
    </form>
    <?php
        if(isset($_POST["add"])) {
            if (!in_array($_POST["add"], $_SESSION["cart"])) {
                $_SESSION["cart"][] = $_POST["add"];
            }
            unset($_POST["add"]);
        }
        print_r($_SESSION["cart"]);
    ?>
</body>
</html>