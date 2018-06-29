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

  <form action="site.php" method="post">
    apples: <input type="checkbox" name="fruits[]" value="apples">
    <br>
    oranges: <input type="checkbox" name="fruits[]" value="oranges">
    <br>
    pears: <input type="checkbox" name="fruits[]" value="pears">
    <br>
    <input type="submit">
  </form>
  <br>
  <?php
    $fruits = $_POST["fruits"];
    echo $fruits[1];
  ?>
  
</body>
</html>