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
    <title>HTML Template</title>
</head>

<body>
    <form action="" method="POST">
        <table>
            <?php
                foreach($items as $name => $src) {
                    echo "<tr><td><p>$name</p><img src='$src'/></td></tr>";
                }
            ?>
        </table>
    </form>
</body>
</html>