<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>School of the Prophets</title>
</head>

<body>
    <?php
        include "header.php";
        include "menuBar.php";
    ?>
    <div class="formHolder">
        <form action="validate.php" method="POST">
            <label for="username">Username</label>
            <input type="text" id="username" name="username"/><br/>
            <label for="password">Password</label>
            <input type="password" id="password" name="password"/>
            <input type="submit" name="login" value="Log in"/>
        </form>    
    </div>    
</body>
</html>