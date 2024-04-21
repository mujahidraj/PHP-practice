<?php

    require 'db-conn.php';

    if (isset($_REQUEST['reg-submit']))
    {   
        $name = $_REQUEST['name'];
        $username = $_REQUEST['username'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $dob = $_REQUEST['dob'];
        $userType = $_REQUEST['user-type'];
        $gender = $_REQUEST['gender'];
        $password = $_REQUEST['password'];
        $confirmPassword = $_REQUEST['confirm-password'];

        if ($name == '' || $username == '' || $phone == '' || $email == '' || $dob == '' || $userType == '' || $gender == '' || $password == '' || $confirmPassword == '')
        {
            echo "<script> alert('input fields cannot be empty!') </script>";
            echo "<script>window.location.href = 'signup.php'</script>";
        }

        else 
        {

            $duplicate = mysqli_query($conn, "SELECT * FROM signed_up_users WHERE username = '$username' OR phone = '$phone' OR email = '$email'");

        
            if(mysqli_num_rows($duplicate) > 0)
            {
                echo "<script> alert('Invalid username, email, or phone!') </script>";
                echo "<script>window.location.href = 'signup.php'</script>";
            }
            else 
            {
                if ($password == $confirmPassword)
                {
                    $query = "INSERT INTO signed_up_users VALUES('', '$name', '$username', '$phone', '$email', '$dob', '$userType', '$gender', '$password')";

                    mysqli_query($conn, $query);

                    echo "<script> alert('User added!') </script>";

                    $_SESSION['new-signup'] = 'true';

                    echo "<script>window.location.href = 'add-user.php'</script>";
                }
                else 
                {
                    echo "<script> alert('Password does not match! please try again.') </script>";
                    echo "<script>window.location.href = 'signup.php'</script>";
                }
            }
        }

    }

?>