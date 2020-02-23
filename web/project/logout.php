<?php
    session_start();
    unset($_SESSION['first_name']);
    unset($_SESSION['last_name']);
    unset($_SESSION['username']);
    header("Location: index.php");
    die(); 
?>