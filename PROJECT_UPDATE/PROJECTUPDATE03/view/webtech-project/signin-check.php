<?php

    require 'db-conn.php';

    if (isset($_REQUEST['signin-submit']))
    {
        $username_or_email = $_REQUEST['username-or-email'];
        $password = $_REQUEST['password'];

        if ($username_or_email == '' || $password == '')
        {
            echo "<script> alert('Input fields cannot be empty!') </script>";
            echo "<script>window.location.href = 'signin.php'</script>";
        }
        else
        {
            $result_admin = mysqli_query($conn, "SELECT * FROM admin_list WHERE admin_username = '$username_or_email' OR admin_email = '$username_or_email'");

            $row_admin = mysqli_fetch_assoc($result_admin);

            if(mysqli_num_rows($result_admin) > 0)
            {
                # admin login

                if ($password == $row_admin['admin_password'])
                {
                    $_SESSION['admin'] = 'true';
                    $_SESSION['client'] = 'true';
                    $_SESSION['agent'] = 'true';

                    echo "<script> alert('login successful!') </script>";

                    if ($row_admin['user_type'] == 'ADMIN')
                    {
                        

                        echo "<script>window.location.href = 'admin-dashboard.php'</script>"; 
                    }
   
                }
            }

            $result = mysqli_query($conn, "SELECT * FROM signed_up_users WHERE username = '$username_or_email' OR email = '$username_or_email'");

            $row = mysqli_fetch_assoc($result);

            if (mysqli_num_rows($result) > 0 || mysqli_num_rows($result_admin) > 0)
            {

                if ($password == $row['password'])
                {
                    echo "<script> alert('login successful!') </script>";

                    $_SESSION['id'] = $row['id'];
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['username'] = $row['username'];
                    $_SESSION['phone'] = $row['phone'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['dob'] = $row['date_of_birth'];
                    $_SESSION['user-type'] = $row['user_type'];
                    $_SESSION['gender'] = $row['gender']; 
                    $_SESSION['password'] = $row['password']; 

                    if ($row['user_type'] == 'Client')
                    {
                        $_SESSION['client'] = 'true';
                        echo "<script>window.location.href = 'client-dashboard.php'</script>";    
                    }
                    if ($row['user_type'] == 'Agent')
                    {
                        $_SESSION['agent'] = 'true';
                        echo "<script>window.location.href = 'agent-dashboard.php'</script>";    
                    }
                    
                }
                else 
                {
                    echo "<script> alert('Incorrect password!') </script>";
                    echo "<script>window.location.href = 'signin.php'</script>";
                }
            }
            else 
            {
                echo "<script>alert('No user found with this username!')</script>";
                echo "<script>window.location.href = 'signin.php'</script>";
            }
        }

    }

?>