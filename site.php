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

  <?php
    $obj = 'CodE Lore';

    echo "<h1>Hello!</h1>";
    echo strtoupper($obj);
    echo "<br>";
    echo str_replace('CodE', 'Food', $obj);
    echo "<br>";
    echo strlen($obj);
    echo "<br>";
    echo $obj[0];
    echo "<br>";
    echo substr($obj, 5);
  ?>

</body>
</html>