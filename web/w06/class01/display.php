<?php
	require("dbConnect.php");
	$db = get_db();
?>
	<body>
		<div class="container">
         <?php
            $personId = $_GET['personId'];
            
            $statement = $db->prepare('SELECT * FROM w6_user WHERE id = :personId;');
            $statement->bindValue(':personId', $personId);
            $statement->execute();
            while ($row = $statement->fetch(PDO::FETCH_ASSOC)) {
               $id = $row['id'];
               $first = $row['first_name'];
               $last = $row['last_name'];
               $food_id = $row['food_type'];

               $foodStatement = $db->prepare("SELECT food FROM w6_food WHERE id = $food_id;");
               $foodStatement->execute();
               while ($fRow = $foodStatement->fetch(PDO::FETCH_ASSOC)) {
                  $food = $fRow['food'];
               }
               echo "<h1>$first $last's favorite food is $food.</h1>";
            }
         ?>

		</div>
	</body>
</html>