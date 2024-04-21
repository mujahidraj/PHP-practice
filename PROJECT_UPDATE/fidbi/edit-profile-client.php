<?php
    
    require 'db-conn.php';

    if (!isset($_SESSION['client'])) {

        header('Location: signin.php');

    }


    if (isset($_REQUEST['edit-profile-client'])) {

        $name = $_REQUEST['name'];
        $username = $_SESSION['username'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $dob = $_REQUEST['dob'];
        $gender = $_REQUEST['gender'];
        $password = $_REQUEST['password']; 

        $_SESSION['name'] = $name;
        $_SESSION['username'] = $username;
        $_SESSION['phone'] = $phone;
        $_SESSION['email'] = $email;
        $_SESSION['dob'] = $dob;
        $_SESSION['gender'] = $gender;
        $_SESSION['password'] = $password; 

        // Update user's information in the database
        $sql = "UPDATE signed_up_users 
                SET name = '$name', phone = '$phone', email = '$email', date_of_birth = '$dob', gender = '$gender', password = '$password'  
                WHERE username='$username'";

        if (mysqli_query($conn, $sql)) {

            header('Location: view-profile-client.php');
        } 
        else {
            echo "Error updating record!";
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>
</head>
<body>
    <h1>Edit Profile [<?php echo strtoupper($_SESSION['user-type']); ?>]</h1>

    <form method="post">
        <fieldset>
            <legend>Edit profile</legend>
            
            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" name="name" value="<?php echo $_SESSION['name']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" name="username" value="<?php echo $_SESSION['username']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number:</label></td>
                    <td><input type="tel" name="phone" value="<?php echo $_SESSION['phone']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" name="email" value="<?php echo $_SESSION['email']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="dob">Date of birth:</label></td>
                    <td><input type="date" name="dob" value="<?php echo $_SESSION['dob']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="user-type">User type:</label></td>
                    <td><input type="text" name="user-type" value="<?php echo $_SESSION['user-type']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="gender">Gender</label></td>
                    <td><input type="text" name="gender" value="<?php echo $_SESSION['gender']; ?>"></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password" <input type="password" name="password" value="<?php echo $_SESSION['password']; ?>"></td>
                </tr>
            </table>

            <button type="submit" name="edit-profile-client">Save changes</button>
            <a href="view-profile-agent.php">Cancel</a>
        </fieldset>
    </form>
     
</body>
</html>
