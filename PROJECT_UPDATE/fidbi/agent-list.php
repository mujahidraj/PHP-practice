<?php
    
    require 'db-conn.php';

    if(!isset($_SESSION['admin']))
    {
        header('Location: index.php');
    }

    $result_agent = mysqli_query($conn, "SELECT * FROM signed_up_users WHERE user_type = 'Agent'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent List</title>
</head>
<body>
    <h1>Agent List</h1>

    <table border="1">
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Username</td>
            <td>Phone</td>
            <td>Email</td>
            <td>Date of Birth</td>
            <td>Gender</td>
            <td>Password</td>
        </tr>
        <?php while($row_agent = mysqli_fetch_assoc($result_agent)) { ?>
        <tr>
            <td><?php echo $row_agent['id']; ?></td>
            <td><?php echo $row_agent['name']; ?></td>
            <td><?php echo $row_agent['username']; ?></td>
            <td><?php echo $row_agent['phone']; ?></td>
            <td><?php echo $row_agent['email']; ?></td>
            <td><?php echo $row_agent['date_of_birth']; ?></td>
            <td><?php echo $row_agent['gender']; ?></td>
            <td><?php echo $row_agent['password']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <a href="admin-dashboard.php">Back</a> |
    <a href="signout.php">Signout</a>
</body>
</html>