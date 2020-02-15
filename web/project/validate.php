<?php
    $username  = $_POST['username'];
    $password = $_POST['password'];

    require("dbConnect.php");
    $db = get_db();

    try {
        $query = 'SELECT COUNT(*) AS match FROM member WHERE username = :username AND password = :password;';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $match = $row['match'];
        }
    }
    catch (Exception $ex)
    {
        echo "Error with DB. Details: $ex";
        die();
    }

    header("Location: index.php/?success=$match");
    die(); 
?>