<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Page Title</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
  <?php include "header.html" ?>

  <?php 
    $title = "My first post";
    $author = "Mohaimin";
    $wordCount = 400;
    include "article-header.php";
    echo "<br>";
    echo "<br>";
  ?>
  <?php 
    include "useful-tools.php";
    sayHi("Mohaimin");
  ?>

  <?php include "footer.html" ?>
</body>
</html>