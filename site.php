<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- <link rel="stylesheet" type="text/css" media="screen" href="main.css" /> -->
</head>
<body>

  <form action="site.php" method="get">
    Color: <input type="text" name="color">
    <br>
    Plura: <input type="text" name="pluralNoun">
    <br>
    celeb: <input type="text" name="celeb">
    <input type="submit">
  </form>
  <br>
  Answer:
  <?php
    $color = $_GET["color"];
    $pluralNoun = $_GET["pluralNoun"];
    $celeb = $_GET["celeb"];

    echo "Roses are $color <br>";
    echo "$pluralNoun are blue <br>";
    echo "I love $celeb <br>";
  ?>
  
</body>
</html>