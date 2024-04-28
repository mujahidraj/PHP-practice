<?php
    
    require '../model/config.php';

    if (!isset($_SESSION['client'])) {

        header('Location: signin.php');

    }

    if (isset($_REQUEST['cancel'])) {
        header('Location: view-profile-client.php');
    }


    if (isset($_REQUEST['edit-profile-client'])) {

        $name = $_REQUEST['Name'];
        $username = $_SESSION['username'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $dob = $_REQUEST['DOB'];
        $gender = $_REQUEST['gender'];
        $password = $_REQUEST['password']; 

        $_SESSION['name'] = $name;
        $_SESSION['username'] = $username;
        $_SESSION['phone'] = $phone;
        $_SESSION['email'] = $email;
        $_SESSION['DOB'] = $dob;
        $_SESSION['gender'] = $gender;
        $_SESSION['password'] = $password; 

 
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
    <title>Edit Profile [<?php echo strtoupper($_SESSION['user-type']); ?>]</title>
    <link rel="stylesheet" href="../design/edit-profile-client.css">
</head>
<body>

    <form method="post">
        <fieldset>
            <legend class="legend-text">Edit profile</legend>
            
            <table>
                <tr>
                    <td><label class="label" for="name">Name:</label></td>
                    <td><input class="label" type="text" name="name" value="<?php echo $_SESSION['Name']; ?>"></td>
                </tr>
                <tr>
                    <td><label class="label" for="username">Username:</label></td>
                    <td><input type="text" name="username" value="<?php echo $_SESSION['username']; ?>"></td>
                </tr>
                <tr>
                    <td><label class="label" for="phone">Phone Number:</label></td>
                    <td><input type="tel" name="phone" value="<?php echo $_SESSION['phone']; ?>"></td>
                </tr>
                <tr>
                    <td><label class="label" for="email">Email:</label></td>
                    <td><input type="email" name="email" value="<?php echo $_SESSION['email']; ?>"></td>
                </tr>
                <tr>
                    <td><label class="label" for="dob">Date of birth:</label></td>
                    <td><input type="date" name="dob" value="<?php echo $_SESSION['DOB']; ?>"></td>
                </tr>
               
                <tr>
                    <td><label class="label" for="gender">Gender</label></td>
                    <td><input type="text" name="gender" value="<?php echo $_SESSION['gender']; ?>" disabled></td>
                </tr>
                <tr>
                    <td><label class="label" for="password">Password:</label></td>
                    <td><input type="password" name="password" <input type="password" name="password" value="<?php echo $_SESSION['password']; ?>"></td>
                </tr>
            </table>

            <button type="submit" name="edit-profile-client" class="btn-submit">Save changes</button>
            <a href="view-profile-client.php"><button class="btn" name="cancel">Cancel</button></a>
        </fieldset>
    </form>
     
</body>
</html>
