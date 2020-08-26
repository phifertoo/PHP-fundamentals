<!-- these are like objects in Javacript or Dictionaries in Python
keys have to be unique
 -->
<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>

<form action = "associative_arrays.php" method="post">
<input type = "text" name="student">
<input type="submit">
</form>

<?php 

    $grades = array("Jim"=>"A+", "Pam"=>"B-", "Oscar"=>"C+");
    echo $grades["Jim"];
    $grades["Jim"] = "F";
    echo $grades["Jim"];

    // returns the value of key that was input by the user
    echo $grades[$_POST["student"]];
?>
</body>

</html>