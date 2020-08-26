<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>

<form action="calculator.php" method="get">
    <input type = "number" name="num1">
    <br>
    <input type = "number" name="num2">
    <input type = "submit">
    </form>


<?php 

// retrieves the input from the user
    echo $_GET["num1"] + $_GET["num2"]


?>
</body>

</html>