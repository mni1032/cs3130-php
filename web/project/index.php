<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="">
    <title>School of the Prophets</title>
</head>

<body>
    <?php
        include "../header.php"
    ?>
    <form action="commentary.php" method="POST">
        <label for="book">Book</label>
        <select id="book" name="book">
            <option value="" selected disabled>--select book--</option>
            <option value="1 Nephi">1 Nephi</option>
            <option value="2 Nephi">2 Nephi</option>
            <option value="Jacob">Jacob</option>
        </select>
        <br/>
        <label for="chapter">Chapter</label>
        <select id="chapter" name="chapter">
            <option value="" selected disabled>--select chapter--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <br/>
        <label for="verse">Verse</label>
        <select id="verse" name="verse">
            <option value="" selected disabled>--select verse--</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <br/>
        <input id="submit" name="submit" type="submit" value="Get commentary"/>
    </form>
</body>
</html>