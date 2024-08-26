<?php 
session_start();
if(!isset($_SESSION["email"])) {
    header("location:login.php");
}

?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<p>Hi, <?php $_SESSION["email"] ?></p>
<a href="logout.php">logout</a>
<nav>
    <ul>
        <li><a href="add-item.php">add item</a> </li>
        <li> <a href="view-item.php">view-item</a></li>
    </ul>
</nav>
    
</body>
</html>