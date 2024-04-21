<?php

session_start();
    
    if(!isset($_SESSION['flag'])){
        header('location: signin.php');
    } 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <form action="" align="center">
        <fieldset>

       
    <h1>Dashboard</h1>
    <a href="./Appointment_form.php">Appointment form</a><br><br>
    <a href="./H_R.php">Property History and Ownership Records</a><br><br>
    <a href="./legal_agre.php">Legal Agreement</a><br><br>
    <a href="../Controller/logout.php">Logout</a>

    </fieldset>
    </form>

</body>
</html>
!
