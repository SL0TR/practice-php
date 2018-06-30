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
    class Book {
      var $title;
      var $author;
      var $pages;

      function __construct($aTitle, $aAuthor, $aPages) {
        $this->title = $aTitle;
        $this->author = $aAuthor;
        $this->pages = $aPages;
      }

    }

    $book1 = new Book("Harry Potter", "JK Rowling", 400);
    echo $book1->author;
    echo "<br>";

    $book2 = new Book("Lord of the Rings", "Tolkien", 700);
    echo $book2->author;

  ?>

  <?php include "footer.html" ?>
</body>
</html>