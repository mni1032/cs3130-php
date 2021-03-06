<?php
    if (!isset($_POST['submit'])) {
        header("Location: index.php");
        exit();
    }
    session_start();
?>
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
        if (isset($_SESSION['first_name'])) {
            echo "<div id='menuBar'><a href='logout.php'>Log out</a>";
            echo "<a href='index.php'>Home</a>";
            echo "<a href='addVerse.php'>Add verse</a>";
            echo "<a href='addComment.php'>Add commentary</a></div>";
        }
        else {
            echo "<div id='menuBar'><a href='login.php'>Log in</a></div>";
        }

        if (isset($_POST['submit'])) {

            $book = $_POST['book'];
            $chapter = $_POST['chapter'];
            $verse = $_POST['verse'];
            echo "<h3>$book $chapter:$verse</h3>";
            require "dbConnect.php";
            $db = get_db();

            $verse_text = $db->prepare("SELECT id, text FROM verse WHERE book='$book' AND chapter=$chapter AND verse=$verse");
            $verse_text->execute();

            while ($vRow = $verse_text->fetch(PDO::FETCH_ASSOC)) {
                $verse_id = $vRow['id'];
                $text = $vRow['text'];

                echo "<p>$text</p>";
                echo "<h3>Commentary on $book $chapter:$verse</h3>";
                $comments = $db->prepare("SELECT author_id, citation_id, text FROM comment WHERE verse_id = $verse_id");
                $comments->execute();

                $numComments = 0;

                while ($cRow = $comments->fetch(PDO::FETCH_ASSOC)) {
                    $author_id = $cRow['author_id'];
                    $citation_id = $cRow['citation_id'];
                    $comment = $cRow['text'];

                    echo "<div class='comment'><p>$comment</p>";
                    $numComments++;

                    $source = $db->prepare("SELECT citation FROM citation WHERE id = $citation_id");
                    $source->execute();

                    while ($sRow = $source->fetch(PDO::FETCH_ASSOC)) {
                        $sourceName = $sRow['citation'];
                        echo "<p class='source'>$sourceName</p>";
                    }

                    $author = $db->prepare("SELECT username FROM member WHERE id = $author_id");
                    $author->execute();

                    while ($aRow = $author->fetch(PDO::FETCH_ASSOC)) {
                        $authorName = $aRow['username'];
                        echo "<p class='author'>Posted by $authorName</p></div>";
                    }
                }

                if ($numComments === 0) {
                    echo "<div class='comment'><p>There is no commentary for this verse.</p></div>";
                }
            }
        }
    ?>
</body>
</html>