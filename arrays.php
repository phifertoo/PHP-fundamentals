<!-- use " " inside of echo() -->

<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>


<?php

$friends = array("Kevin", "Karen", "Oscar", "Jim");
echo $friends[0];
// replace the first element in the array
$friends[0] = "John";
// add an element
$friends[4] = "Angela";

$count = count($friends);
echo $count;

?>


</body>

</html>