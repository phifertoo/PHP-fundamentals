<!-- use " " inside of echo() -->

<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>
<?php 
    $index = 1;
    // check condition then execute code
    while($index <= 5){
        echo  "$index <br>";
        $index++;
    }
    // execute code then check condition
    $index2 = 1;
    do {
        echo  "$index2 <br>";
        $index2++;
    }
    while($index2 <= 5);

?>
</body>

</html>