<?php

    session_start();

    if(!isset($_SESSION['agent']))
    {
        header('Location: index.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Dashboard</title>
</head>
<body>
    <h1>Agent Dashboard</h1>

    <p>User: <?php echo $_SESSION['name'] . '(unvarified)';?></p>

    <a href="view-profile-agent.php">View Profile</a><br>
    <a href="signout.php">Sign out</a>
</body>
</html>