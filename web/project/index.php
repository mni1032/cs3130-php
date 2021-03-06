<?php
    session_start();
    require("dbConnect.php");
    $db = get_db();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>School of the Prophets</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="javascript.js"></script>
</head>

<body>
    <?php
        include "header.php";
        if (isset($_SESSION['first_name'])) {
            echo "<div id='menuBar'><a href='logout.php'>Log out</a>";
            echo "<a href='addVerse.php'>Add verse</a>";
            echo "<a href='addComment.php'>Add commentary</a></div>";
        }
        else {
            echo "<div id='menuBar'><a href='login.php'>Log in</a></div>";
        }
    ?>
    <div class="formHolder">
        <form action="commentary.php" method="POST">
            <label for="book">Book</label>
            <select id="book" name="book" onchange="fillChapters()">
                <option value="" selected disabled>--select book--</option>
                <?php
                    $book_query = $db->prepare("SELECT DISTINCT book FROM verse;");
                    $book_query->execute();
        
                    while ($bRow = $book_query->fetch(PDO::FETCH_ASSOC)) {
                        $book = $bRow['book'];
        
                        echo "<option value='$book'>$book</option>";
                    }
                ?>
            </select>
            <br/>
            <label for="chapter">Chapter</label>
            <select id="chapter" name="chapter" disabled>
                <option value="" selected disabled>--select chapter--</option>
            </select>
            <br/>
            <label for="verse">Verse</label>
            <select id="verse" name="verse" disabled>
                <option value="" selected disabled>--select verse--</option>
            </select>
            <br/>
            <input id="submit" name="submit" type="submit" value="Get commentary" disabled/>
        </form>
    </div>
</body>
</html>