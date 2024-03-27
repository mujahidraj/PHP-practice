<?php

if(isset($_REQUEST['email']) && isset($_REQUEST['reset_code'])) {

    require '../model/config.php';
   
    $email = $_REQUEST['email'];
    $reset_code = $_REQUEST['reset_code'];

   
    if($reset_code === '1234') {
      
        $sql = "SELECT * FROM client WHERE email = '$email'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
          
            echo "Please enter your new password:";
            header('location:../view/enter_password.php');
            
        } else {
           
            echo "User not found!";
        }
    } else {

        echo "Invalid reset code!";
    }

    
    $conn->close();
} else {
   
    echo "Email and reset code are required!";
}
?>
