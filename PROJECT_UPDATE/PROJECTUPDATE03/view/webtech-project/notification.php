<?php

    $userType = "Client";
    $username = "fidbi";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifications</title>
</head>
<body>
    <h1>Notifications</h1>
    <hr>

    <table border="1">
        <tr>
            <td>A new <?php echo $userType; ?> registered. Username: <?php echo $username; ?></td>
            <td><a href="#">Mark as read</a></td>
        </tr>
        <tr>
            <td>A new <?php echo $userType; ?> registered. Username: <?php echo $username; ?></td>
            <td><a href="#">Mark as read</a></td>
        </tr>
        <tr>
            <td>A new <?php echo $userType; ?> registered. Username: <?php echo $username; ?></td>
            <td><a href="#">Mark as read</a></td>
        </tr>
        <tr>
            <td>A new <?php echo $userType; ?> registered. Username: <?php echo $username; ?></td>
            <td><a href="#">Mark as read</a></td>
        </tr>
        <tr>
            <td>A new <?php echo $userType; ?> registered. Username: <?php echo $username; ?></td>
            <td><a href="#">Mark as read</a></td>
        </tr>
        
    </table>
    <a href="#">Mark all as read</a>
    <br><br>

    <a href="admin-dashboard.php">Back to dashboard</a> |
    <a href="signout.php">Signout</a>
</body>
</html>