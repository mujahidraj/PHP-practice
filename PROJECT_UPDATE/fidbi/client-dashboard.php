<?php

    session_start();

    if(!isset($_SESSION['client']))
    {
        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Dashboard</title>
</head>
<body>
    <h1>Client Dashboard</h1>

    <p>User: <?php echo $_SESSION['name']; ?></p>

    <a href="view-profile-client.php">View Profile</a><br>
    <a href="signout.php">Sign out</a>
</body>
</html>