<?php

// if(!isset($_COOKIE['flag'])){
//   header('location : login.php');}
session_start();
    
    if(!isset($_SESSION['flag'])){
        header('location: login.php');
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
    <h1>Dashboard</h1>
    <a href="about.php">About</a>
</body>
</html>
!
