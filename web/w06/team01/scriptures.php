<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Scriptures</title>
</head>

<body>
  <h1>Scripture Resource</h1>
  <?php
  require "dbConnect.php";
  $db = get_db();

  $scriptures = $db->prepare("SELECT * FROM Scriptures");
  $scriptures->execute();

  while ($row = $scriptures->fetch(PDO::FETCH_ASSOC)) {
    $book = $row['book'];
    $chapter = $row['chapter'];
    $verse = $row['verse'];
    $content = $row['content'];

    echo "<p><b>$book $chapter:$verse</b> - \"$content\"</p>";
  }

  ?>

<form action="insert.php" method="POST">
         <div class="form-row">
            <div class="col">
               <input type="text" class="form-control" placeholder="Book" name="book">
            </div>
            <div class="col">
               <input type="text" class="form-control" placeholder="Chapter" name="chapter">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Verse" name="verse">
            </div>
            <div class="col">
              <button class="btn btn-primary" type="submit">Save Scripture</button>
            </div>
         </div>
      </form>

</body>

</html>