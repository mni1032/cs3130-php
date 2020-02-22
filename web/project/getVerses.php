<?php
    require "dbConnect.php";
    $db = get_db();

    $book = $_POST['book'];
    $chapter = $_POST['chapter'];
    $verses_arr = array();

    $query = 'SELECT DISTINCT verse FROM verse WHERE book = :book AND chapter = :chapter;';
    $verses = $db->prepare($query);
    $verses->bindValue(':book', $book);
    $verses->bindValue(':chapter', $chapter);
    $verses->execute();

    while ($row = $verses->fetch(PDO::FETCH_ASSOC)) {
        $verse = $row['verse'];
        $verses_arr[] = $verse;
    }

    echo json_encode($verses_arr);
?>