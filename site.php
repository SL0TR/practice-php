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
    class Student {
      var $name;
      var $major;
      var $gpa;

      function __construct($name, $major, $gpa) {
        $this->name = $name;
        $this->major = $major;
        $this->gpa = $gpa;
      }

      function hasHonors() {
       if ($this->gpa >= 3.5) {
          return "true";
       } else {
          return "false";
       }
      }

    }

    $student1 = new Student("Jim", "CSE", 4.0);
    $student2 = new Student("Carry", "BBA", 3.0);

    echo $student2->hasHonors();

  ?>

  <?php include "footer.html" ?>
</body>
</html>