<?php


require '../model/config.php';


    $username = $_REQUEST["username"];
    $password = $_REQUEST["password"];

    if ($username==""||$password=="") 
    { 
        echo "Username or Password can't be null";
     }
     else{

        $query = "SELECT * FROM agents WHERE username='$username' AND password='$password'";
        $result = $conn->query($query);

        if ($result->num_rows ==1) {
            
            setcookie('flag', 'true', time()+3000, '/');
            header('location: ../view/agentdashboard.php');
        } 
        else {
           
           echo "Invalid username/password combination";
        }
    }
?>