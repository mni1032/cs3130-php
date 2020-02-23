<?php
    session_start();
    if (!isset($_SESSION['first_name'])) {
        header("Location: index.php");
        exit();
    }
?>
<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <?php
        include "header.php";
        echo "<div id='menuBar'><a href='logout.php'>Log out</a>";
        echo "<a href='index.php'>Home</a>";
        echo "<a href='addVerse.php'>Add verse</a>";
        echo "<a href='addComment.php'>Add commentary</a></div>"; 
    ?>      
    <div class="formHolder">
        <?php
            if (isset($_SESSION['exists'])) {
                echo "<p id='warning'>The verse you tried to insert is already in the database.</p>";
            } 
            unset($_SESSION['exists']);
        ?>
        <form action="insertVerse.php" method="POST">
            <label for="book">Book</label>
            <input type="text" id="book" name="book"/></br>
            <label for="chapter">Chapter</label>
            <input type="number" id="chapter" name="chapter"/></br>
            <label for="verse">Verse</label>
            <input type="number" id="verse" name="verse"/></br>
            <label for="text">Text</label>
            <textarea id="text" name="text" rows="15" cols="80"></textarea></br>
            <input type="submit" name="addVerse" value="Add verse"/>
        </form>
    </div>    
</body>
</html>