<!-- including is just like include from node.js --><!-- use " " inside of echo() -->
<!-- similar to import -->

<html>

<head>
    <meta charset='utf-8'>
    <title></title>
</head>

<body>
<?php 

    // these variables are passed into the article-header.php file
    $title = "My First Post";
    $author = "Mike";
    $wordCount = 400;
    include "article-header.php";

    // when you import another php file, you can use all the variables from that php file
    include "function.php";
    // now I can  use the sayHi function from function.php
    sayHi("John", 80);
?>

</body>

</html>