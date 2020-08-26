<!-- use " " inside of echo() -->

<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>
<?php 

class Movie {
    // public means this attribute is visible to anywhere
    // var is the same as public
    public $title;
    // any code  ouside of the class will not be able to access $rating
    private $rating;

    function __construct($title,$rating) {
        $this->title = $title;
        $this->setRating($rating);
    }

    function getRating() {
        return $this->rating;
    }

    function setRating($rating) {
        if($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" ) {
            $this->rating = $rating;
        } else {
            $this->rating = "NR";
        }
    }
}

    $avengers = new Movie("Avengers", "PG-13");
    $avengers->setRating('Dog');
    echo $avengers->getRating();


?>
</body>

</html>