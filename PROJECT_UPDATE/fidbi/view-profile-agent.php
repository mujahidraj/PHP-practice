<?php

    session_start();


    if(!isset($_SESSION['agent']))
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
            </table>

        </fieldset>
        <fieldset>
            <legend>Agency info</legend>

            <table>
                <tr>
                    <td><label for="company-name">Company Name:</label></td>
                    <td>xyz</td>
                </tr>
                <tr>
                    <td><label for="company-address">Address:</label></td>
                    <td>Dhaka</td>
                </tr>
                <tr>
                    <td><label for="license-number">License no.:</label></td>
                    <td><?php echo rand(); ?></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend>Record</legend>

            <table>
                <tr>
                    <td><label for="total-listing">Total listed property:</label></td>
                    <td><?php echo rand(8, 10); ?></td>
                </tr>
                <tr>
                    <td><label for="property-sold">Property sold:</label></td>
                    <td><?php echo rand(1, 5); ?></td>
                </tr>
            </table>
        </fieldset>
        
        <button type="submit" name="edit-profile-agent"><a href="edit-profile-agent.php">Edit Profile</a></button>

        <br><br>
        <a href="agent-dashboard.php">Back</a> |
        <a href="signout.php">Signout</a>
</body>
</html>