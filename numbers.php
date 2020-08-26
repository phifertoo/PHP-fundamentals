<!-- use " " inside of echo() -->

<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>
<?php 

$num = 10;
echo $num++;

$num2 = 10;
echo $num2 +=5;

echo abs(-100);
echo pow(2,4); //2 ^ 4;
echo sqrt(144);
echo max(2, 20);
echo min(2, 20);
echo round(3.2);
echo ceil(3.3); //always round up to next integer;
echo floor(3.9); //always round up to next integer;

?>
</body>

</html>