<?php
    require "dbConnect.php";
    $db = get_db();

    $book = $_POST['book'];
    $chapters_arr = array();

    $query = 'SELECT DISTINCT chapter FROM verse WHERE book = :book;';
    $chapters = $db->prepare($query);
    $chapters->bindValue(':book', $book);
    $chapters->execute();

    while ($row = $chapters->fetch(PDO::FETCH_ASSOC)) {
        $chapter = $row['chapter'];
        $chapters_arr[] = array("chapter"->$chapter);
    }

    echo json_encode($chapters_arr);
?>