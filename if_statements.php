<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>
<?php 

    $isMale = true;
    $isTall = true;
    $isAlive = true;
    if($isMale && $isTall || $isAlive) {
        echo "You are male";
    } else if (!$isTall) {
        echo "You are small";
    } else {
        echo "You are not male";
    }



    function getMax($num1, $num2) {
        if($num1 >$num2) {
            return $num1;
        } else {
            return $num2;
        }
    }

    echo getMax(2,4);
?>
</body>

</html>