<?php
    session_start();
    $username = $_SESSION['username'];
    $book = $_POST['book'];
    $chapter = intval($_POST['chapter']);
    $verse = intval($_POST['verse']);
    $citation = $_POST['citation'];
    $comment = $_POST['comment'];

    require("dbConnect.php");
    $db = get_db();

    try {
        $query = 'SELECT id FROM verse WHERE book = :book AND chapter = :chapter AND verse = :verse;';
        $statement = $db->prepare($query);
        $statement->bindValue(':book', $book);
        $statement->bindValue(':chapter', $chapter);
        $statement->bindValue(':verse', $verse);
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $verseId = $row['id'];
        }

        $query = 'SELECT id FROM member WHERE username = :username;';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->execute();
        
        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $authorId = $row['id'];
        }
        
        $query = 'INSERT INTO citation (citation) VALUES (:citation);';
        $statement = $db->prepare($query);
        $statement->bindValue(':citation', $citation);
        $statement->execute();

        $citationId = $db->lastInsert("citation_id_seq");

        $date = date("Y/m/d");
        $query = 'INSERT INTO comment (author_id, create_date, verse_id, citation_id, text) VALUES (:author_id, :create_date, :verse_id, :citation_id, :text);';
        $statement = $db->prepare($query);
        $statement->bindValue(':author_id', $authorId);
        $statement->bindValue(':create_date', $date);
        $statement->bindValue(':verse_id', $verseId);
        $statement->bindValue(':citation_id', $citationId);
        $statement->bindValue(':text', $comment);
        $statement->execute();

        $lastComment= $db->lastInsertId("comment_id_seq");
    }
    catch (Exception $ex)
    {
        echo "Error with DB. Details: $ex";
        die();
    }

    // header("Location: addComment.php?lastVerse=$lastComment");
    // die(); 
?>