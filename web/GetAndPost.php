<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>belajar GEt dan Post</title>
</head>

<body>
    <form action="GetAndPost.php" method="get">
        <label for="name">username</label><br>
        <input type="text" name="username"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log In">
    </form>

</body>

</html>
<?php
echo $_GET["username"];
echo $_GET["password"];
?>