<?php
    
    session_start();

    if(!isset($_SESSION['admin']))
    {
        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMIN DASHBOARD</title>
</head>
<body>
    <h1>ADMIN DASHBOARD</h1>

    <a href="agent-list.php">Agent List</a> |
    <a href="client-list.php">Client List</a> |
    <a href="notification.php">Notifications</a>

    <br><br>
    <a href="add-user.php">Add an user</a> |
    <a href="remove-user.php">Remove an user</a>

    <br><br>
    <a href="signout.php">Signout</a>
</body>
</html>