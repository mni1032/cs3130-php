<?php
    session_start();
    $username  = $_POST['username'];
    $password = $_POST['password'];

    require("dbConnect.php");
    $db = get_db();

    try {
        $query = 'SELECT first_name, last_name FROM member WHERE username = :username AND password = :password;';
        $statement = $db->prepare($query);
        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);
        $statement->execute();

        while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
            $first = $row['first_name'];
            $last = $row['last_name'];
            $_SESSION['first_name'] = $first;
            $_SESSION['last_name'] = $last;
            $_SESSION['username'] = $username;
        }
    }
    catch (Exception $ex)
    {
        echo "Error with DB. Details: $ex";
        die();
    }

    header("Location: index.php");
    die(); 
?>