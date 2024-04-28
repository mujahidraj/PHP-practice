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
    <title>View Profile [<?php echo strtoupper($_SESSION['Name']); ?>]</title>
    <link rel="stylesheet" href="../design/view-profile-agent.css">
</head>
<body>

        <fieldset>
            <legend class="legend-text">Agent Info</legend>
            
            <table>
                <tr>
                    <td>
                        <img src="../view/images/profile.png">
                    </td>
                </tr>
                <tr>
                    <td><label class="label" for="Name">Name:</label></td>
                    <td><?php echo $_SESSION['Name']; ?></td>
                </tr>
                <tr>
                    <td><label class="label" for="username">Username:</label></td>
                    <td><?php echo $_SESSION['username']; ?></td>
                </tr>
                <tr>
                    <td><label class="label" for="phone">Phone Number:</label></td>
                    <td><?php echo $_SESSION['phone']; ?></td>
                </tr>
                <tr>
                    <td><label class="label" for="email">Email:</label></td>
                    <td><?php echo $_SESSION['email']; ?></td>
                </tr>
                <tr>
                    <td><label class="label" for="DOB">Date of birth:</label></td>
                    <td><?php echo $_SESSION['DOB']; ?></td>
                </tr>
                <tr>
                    <td><label class="label" for="gender">Gender</label></td>
                    <td><?php echo $_SESSION['gender']; ?></td>
                </tr>
                <tr>
                    <td><label class="label" for="password">Password:</label></td>
                    <td><?php echo $_SESSION['password']; ?></td>
                </tr>                
            </table>

            <a href="edit-profile-agent.php"><button class="btn-submit" type="submit" name="edit-profile-agent">Edit Profile</button></a>

        </fieldset>
        <fieldset>
            <legend class="legend-text">Agency info</legend>

            <table>
                <tr>
                    <td><label class="label" for="company-name">Company Name:</label></td>
                    <td>xyz</td>
                </tr>
                <tr>
                    <td><label class="label" for="company-address">Address:</label></td>
                    <td>Dhaka</td>
                </tr>
                <tr>
                    <td><label class="label" for="license-number">License no.:</label></td>
                    <td><?php echo rand(); ?></td>
                </tr>
            </table>
        </fieldset>
        <fieldset>
            <legend class="legend-text">Property Record</legend>

            <table>
                <tr>
                    <td><label class="label" for="total-listing">Total listed property:</label></td>
                    <td><?php echo rand(8, 10); ?></td>
                </tr>
                <tr>
                    <td><label class="label" for="property-sold">Property sold:</label></td>
                    <td><?php echo rand(1, 5); ?></td>
                </tr>
            </table>
        </fieldset>

        <div class="btn-wrapper">
            <a href="agentdashboard.php"><button class="btn">Back</button></a> 
            <a href="../controller/signout.php"><button class="btn">Signout</button></a>
        </div>
        
</body>
</html>