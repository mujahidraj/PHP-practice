<?php
    
    require 'db-conn.php';

    if(!isset($_SESSION['admin']))
    {
        header('Location: index.php');
    }

    $result_client = mysqli_query($conn, "SELECT * FROM signed_up_users WHERE user_type = 'Client'");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent List</title>
</head>
<body>
    <h1>Client List</h1>

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
        <?php while($row_client = mysqli_fetch_assoc($result_client)) { ?>
        <tr>
            <td><?php echo $row_client['id']; ?></td>
            <td><?php echo $row_client['name']; ?></td>
            <td><?php echo $row_client['username']; ?></td>
            <td><?php echo $row_client['phone']; ?></td>
            <td><?php echo $row_client['email']; ?></td>
            <td><?php echo $row_client['date_of_birth']; ?></td>
            <td><?php echo $row_client['gender']; ?></td>
            <td><?php echo $row_client['password']; ?></td>
        </tr>
        <?php } ?>
    </table>

    <a href="admin-dashboard.php">Back</a> |
    <a href="signout.php">Signout</a>
</body>
</html>