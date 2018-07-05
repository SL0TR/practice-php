<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Practice PHP</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
</head>
<body>
  <?php 
    $a = 5;
    $b = 6;
    // list($a, $b) = array($b, $a);
    // print $a;
    // echo '<br>';
    // print $b;
    list($a, $b) = array($b, $a);
    print $a;
    echo '<br>';
    print $b;
  ?>
</body>
</html>