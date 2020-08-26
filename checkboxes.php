<!-- use " " inside of echo() -->

<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>

<!-- route to the user_input.php file -->
<form action = "checkboxes.php" method="post">
<!-- the value of the checked items will be stored in the fruits[] array -->
Apples:<input type="checkbox" name="fruits[]" value="apples"><br>
Oranges:<input type="checkbox" name="fruits[]" value="oranges"><br>
Pears:<input type="checkbox" name="fruits[]" value="pears"><br>

<input type="submit">
</form>
<br>

<!--  -->
<?php

// retrieves the input from the user
    $fruits = $_POST["fruits"];
    echo $fruits[1];
?>


</body>

</html>