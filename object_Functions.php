<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>
<?php 

    // a class is a custom data type
    class Student {
        // create an attribute
        var $name;
        var $major;
        var $gpa;

        //whenver you create the book, the constructor function is called
        // this function works like any other function 
        function __construct($name, $major, $gpa){
            // refers to the current object
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }

        function hasHonors() {
            if($this->gpa >= 3.5){
                return "true";
            }
            return "false";
        }
    }

    $student1 = new Student("Jim", "Business", 2.8);
    $student2 = new Student("Pam", "Art", 3.6);

    echo $student1->hasHonors();
    echo $student2->hasHonors();


?>
</body>

</html>