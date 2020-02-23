<?php
    session_start();
    if (!isset($_SESSION['first_name'])) {
        header("Location: index.php");
        exit();
    }
    require("dbConnect.php");
    $db = get_db();
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
        <form action="insertComment.php" method="POST">
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