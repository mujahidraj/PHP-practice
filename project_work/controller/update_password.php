<?php

if(isset($_REQUEST['email']) && isset($_REQUEST['new_password'])) {
   
    require '../model/config.php';
   
    $email = $_REQUEST['email'];
    $new_password = $_REQUEST['new_password'];


    $hashed_password = password_hash($new_password, PASSWORD_DEFAULT);


    $sql = "UPDATE client SET password = '$hashed_password' WHERE email = '$email'";
    if ($conn->query($sql) ==TRUE) {
    
        echo "Password updated successfully!";
        header('location:../view/clientlogin.php');
    } else {
      
        echo "Error updating password: " . $conn->error;
    }


    $conn->close();
} else {
  
    echo "Email and new password are required!";
}
?>
