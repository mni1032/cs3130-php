<?php
    session_start();
    if (!isset($_POST['submit'])) {
        header("Location: addVerse.php");
        exit();
    }
    $book = $_POST['book'];
    $chapter = intval($_POST['chapter']);
    $verse = intval($_POST['verse']);
    $text = $_POST['text'];

    require("dbConnect.php");
    $db = get_db();

    try {
        $query = 'INSERT INTO verse (book, chapter, verse, text) VALUES (:book, :chapter, :verse, :text);';
        $statement = $db->prepare($query);
        $statement->bindValue(':book', $book);
        $statement->bindValue(':chapter', $chapter);
        $statement->bindValue(':verse', $verse);
        $statement->bindValue(':text', $text);
        $statement->execute();

        try {
            $verseId = $db->lastInsertId("verse_id_seq");
        }
        catch (Exception $ex) {
            echo "Didn't insert.";
            $_SESSION['exists'] = true;
        }
    }
    catch (Exception $ex) {
        echo "Error with DB. Details: $ex";
        die();
    }

    // header("Location: addVerse.php");
    // die(); 
?>