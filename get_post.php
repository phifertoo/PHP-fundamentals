<!-- if you use the get method, the parameters/values will appear in the URL and get passed into PHP -->
<!-- if you use the post method, the parameters/values will not appear in the URL and get passed into PHP -->

<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>

<!-- route to the user_input.php file -->
<form action = "get_post.php" method="post">
Password: <input type = "password" name="password">
<input type="submit">
</form>
<br><br>

<!--  -->
<?php

// retrieves the input from the user using the post method
echo $_POST["password"]
?>


</body>

</html>