<!-- use " " inside of echo() -->

<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>
<?php 

$phrase = "Giraffe Academy";
echo strtoupper($phrase);
echo strtolower($phrase);
// first character in the string
echo $phrase[0];
echo "Giraffe Academy"[0];

// strings are mutable in PHP
$phrase[0] = "B";
echo $phrase;

$phrase2 = "Giraffe Academy";
echo str_replace("Giraffe", "Panda", $phrase2);

$phrase3 = "Giraffe Academy";
echo substr($phrase, 8);
echo substr($phrase, 8, 3);

?>
</body>

</html>