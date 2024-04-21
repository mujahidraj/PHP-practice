<?php

    session_start();

    if(!isset($_SESSION['client']))
    {
        header('Location: signin.php');
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Profile</title>
</head>
<body>
    <h1>View Profile [<?php echo strtoupper($_SESSION['user-type']); ?>]</h1>

    <fieldset>
            <legend>Personal Info</legend>
            
            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><?php echo $_SESSION['name']; ?></td>
                </tr>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><?php echo $_SESSION['username']; ?></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number:</label></td>
                    <td><?php echo $_SESSION['phone']; ?></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><?php echo $_SESSION['email']; ?></td>
                </tr>
                <tr>
                    <td><label for="dob">Date of birth:</label></td>
                    <td><?php echo $_SESSION['dob']; ?></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender</label></td>
                    <td><?php echo $_SESSION['gender']; ?></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><?php echo $_SESSION['password']; ?></td>
                </tr>
                <tr>
                    <td><button type="submit"><a href="signout.php">Signout</a></button></td>
                    <td><button type="submit"><a href="edit-profile-client.php">Edit Profile</a></button></td>
                </tr>
            </table>

        </fieldset>

        <a href="client-dashboard.php">Back</a> |
        <a href="signout.php">Signout</a>
</body>
</html>