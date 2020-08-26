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

        //whenver you create the book, the constructor function is called
        // this function works like any other function 
        function __construct($aTitle, $aAuthor, $aPages){
            // refers to the current object
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
    }

    $book1 = new Book("Harry Potter", "JK Rowling", 400);
    $book2 = new Book("Lord of the Rings", "Tolkien", 700);

    echo $book1->title;
    echo $book2->title;


?>
</body>

</html>