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
    class Movie {
      public $title;
      private $rating;

      function __construct($title, $rating) {
        $this->title = $title;
        $this->setRating($rating);
      }

      function getRating() {
        return $this->rating;
      }

      function setRating($rating) {
        if ($rating == 'G' || $rating == 'PG' || $rating == 'PG-12' || $rating == 'R' || $rating == 'NR') {
          $this->rating = $rating;
        } else {
          $this->rating = "NR";
        }
      }

    }

    $avengers = new Movie("Avengers", "DOG");
    echo $avengers->getRating();

  ?>

  <?php include "footer.html" ?>
</body>
</html>