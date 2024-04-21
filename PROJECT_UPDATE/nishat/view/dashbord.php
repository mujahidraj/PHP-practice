<?php
 
// if(!isset($_COOKIE['flag'])){
//   header('location : sign_in.php');}
session_start();
   
    if(!isset($_SESSION['flag'])){
        header('location:sign_in.php');
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
    <h1>REAL ESTATE</h1><br><br>
    <a href="advance_payment.php">ADANCE PAYMENT</a><br><br>
    <a href="about.php">ABOUT US</a><br><br>
    <a href="faq.php">FAQ</a><br><br>
 
    <a href="logout.php">Log Out</a>
 
 
 
 
 
</body>
</html>