<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <script src="javascript.js"></script>
    <title>CS 313</title>
</head>

<body>
  <?php include "header.php";?>
  <div id="landingMenu" class="flex">
    <a class="picLink" href="w02/prove/aboutMe.php" onmouseover="changeTextColor(this)">
      <img src="images/family.png" alt="My family">
      <h2>About me</h2>
    </a>
    <a class="picLink" href="w02/prove/assignments.html" onmouseover="changeTextColor(this)">
      <img src="images/working.jpg" alt="Man working at computer">
      <h2>Assignments</h2>
    </a>
    <a class="picLink" href="project/index.html" onmouseover="changeTextColor(this)">
      <img src="images/books.jpg" alt="Stack of books">
      <h2>School of the Prophets</h2>
    </a>
  </div>
</body>
</html>