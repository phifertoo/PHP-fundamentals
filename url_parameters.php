<!-- ...filePath/fileName.php?name=john&age=10 -->
<!-- first parameter: name=john -->
<!-- second parameter: age=10 -->

<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>

<!-- route to the user_input.php file -->
<form action = "url_parameters.php" method="get">
Name: <input type = "text" name="submitted_name">
<input type="submit">
</form>
<br>
Your Name is: 

<!-- the submitted name will be passed into PHP as a parameter in the URL  -->
<?php

// retrieves the input from the user
echo $_GET["submitted_name"]
?>


</body>

</html>