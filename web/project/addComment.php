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
        echo "<a href='addVerse.php'>Add verse</a>";
        echo "<a href='addComment.php'>Add commentary</a></div>"; 
    ?>      
    <div class="formHolder">
        <form action="insertComment.php" method="POST">
        <label for="book">Book</label>
            <select id="book" name="book">
                <option value="" selected disabled>--select book--</option>
                <option value="1 Nephi">1 Nephi</option>
                <option value="2 Nephi">2 Nephi</option>
                <option value="Jacob">Jacob</option>
            </select>
            <br/>
            <label for="chapter">Chapter</label>
            <select id="chapter" name="chapter">
                <option value="" selected disabled>--select chapter--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <br/>
            <label for="verse">Verse</label>
            <select id="verse" name="verse">
                <option value="" selected disabled>--select verse--</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
            </select>
            <br/>
            <label for="citation">Source</label>
            <input type="text" id="citation" name="citation"/> 
            <br/>
            <label for="comment">Comment</label>
            <textarea id="comment" name="comment" rows="15" cols="80"></textarea>
            </br>
            <input type="submit" id="submit" name="addComment" value="Add comment"/>
        </form>
    </div>    
</body>
</html>