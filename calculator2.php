<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>

<form action="calculator2.php" method="post">
    <!-- HTML will only allow integers unless you declare a step property
    The step property determines the number of significant digits.  -->
    First Number:<input type = "number" step="0.01" name="num1"><br>
    Operator: <input type = "text" name="operator"><br>
    Second Number<input type = "number" step="0.01" name="num2"><br>

    <input type = "submit">
    </form>


<?php 

// retrieves the input from the user
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operator = $_POST["operator"];
    
    if($operator == "+"){
        echo $num1 + $num2;
    } elseif($operator == "-") {
        echo $num1 - $num2;
    } elseif($operator == "/") {
        echo $num1 / $num2;
    } elseif($operator == "*") {
        echo $num1 * $num2;
    } else {
        echo "Invalid Operator";
    }


?>
</body>

</html>