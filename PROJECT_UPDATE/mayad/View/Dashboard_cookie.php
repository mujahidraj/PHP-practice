<?php

if(!isset($_COOKIE['flag'])){

        header('location: signin_cookie.php');
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
    <a href="./Appointment_form.php">Appointment form</a><br><br>
    <a href="./H_R.php">Property History and Ownership Records</a><br><br>
    <a href="./legal_agre.php">Legal Agreement</a><br><br>
    <a href="../Controller/Logout_cookie.php">Logout</a>
</body>
</html>
!
