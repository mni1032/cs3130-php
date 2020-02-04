<?php 
    require "dbConnect.php";
    $db = get_db();

    $family_members = $db->prepare("SELECT * FROM family_members");
    $family_members->execute();

    while ($fRow = $family_members->fetch(PDO::FETCH_ASSOC)) {
        $first_name = $fRow["first_name"];
        $last_name = $fRow["last_name"];
        $rel_id = $fRow["rel_id"];

        echo "<p>$first_name $last_name is my $rel_id</p>";
    }
?>