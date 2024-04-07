<?php

    require 'config.php';

    if(isset($_REQUEST['reg-submit']))
    {
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $username = $_REQUEST['username'];
        $password = $_REQUEST['password'];
        $confirmpassword = $_REQUEST['confirmpassword'];

        $duplicate = mysqli_query($conn, "SELECT * FROM log_reg_system WHERE username = '$username' OR email = '$email'");

        if(mysqli_num_rows($duplicate) > 0)
        {
            echo "<script> alert('username or email already taken!'); </script>";

            echo "<script>window.location.href = 'registration.php'</script>";
        }
        else 
        {
            if($password == $confirmpassword)
            {
                $query = "INSERT INTO log_reg_system VALUES('', '$name', '$email', '$username', '$password')";

                mysqli_query($conn, $query);

                echo "<script> alert('Registration successful!'); </script>";

                // header('location: login.php');
                echo "<script>window.location.href = 'login.php'</script>";
            }
            else 
            {
                echo "<script> alert('Password does not match!'); </script>";

                echo "<script>window.location.href = 'registration.php'</script>";
            }
        }
    }

?>