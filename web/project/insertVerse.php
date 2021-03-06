<?php
    session_start();
    if (!isset($_POST['addVerse'])) {
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
    }
    catch (Exception $ex) {
        $_SESSION['exists'] = true;
    }

    header("Location: addVerse.php");
    die(); 
?>