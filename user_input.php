<!-- use " " inside of echo() -->

<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>

<!-- route to the user_input.php file -->
<form action = "user_input.php" method="get">
Name: <input type = "text" name="submitted_name">
<input type="submit">
</form>
<br>
Your Name is: 

<!--  -->
<?php

// retrieves the input from the user
echo $_GET["submitted_name"]
?>


</body>

</html>