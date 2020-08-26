<!-- use " " inside of echo() -->

<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>
<?php 

    class Chef {
        function makeChicken() {
            echo "The chef makes chicken <br>";
        }

        function makeSalad(){
            echo "The chef makes salad <br>";
        }
        function makeSpecialDish() {
            echo "The chef makes bbq ribs <br>";
        }
    }

    // the Italianchef has all the methods and properties of the Chef
    class ItalianChef extends Chef {
        // additional properties and methods that the Italian Chef has
        function makePasta() {
            echo "The chef makes pasta <br>";
        }
        // override the makeSpecialDish method inherited from Chef
        function makeSpecialDish() {
            echo "The chef makes chicken parm <br>";
        }
    }

    $chef = new Chef();
    $chef->makeChicken();
    $chef->makeSpecialDish();


    $italianChef = new ItalianChef;
    $italianChef->makechicken();
    $italianChef->makePasta();
    $italianChef->makeSpecialDish();


?>
</body>

</html>