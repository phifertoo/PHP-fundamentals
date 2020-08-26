<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>
<?php 

    // a class is a custom data type
    class Book {
        // create an attribute
        var $title;
        var $author;
        var $pages;
    }
    // create an object which is an instance of a class
    $book1 = new Book;
    $book1->title = "Harry Potter";
    $book1->author = "JK Rowling";
    $book1->pages = 400;

    // To return the property in the object, you do not use a $
    echo $book1->title;
    echo $book1->author;
    echo $book1->pages;

    $book2 = new Book;
    $book2->title = "Lord of the Rings";
    $book2->author = "Tolkien";
    $book2->pages = 700;

    echo $book2->title;
    echo $book2->author;
    echo $book2->pages;


?>
</body>

</html>