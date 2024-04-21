<?php

require '../Model/Database.php';

session_start();
    $username = $_REQUEST["name"];
    $password = $_REQUEST["password"];

    if ($username==""||$password=="") 
    { 
        echo "Username or Password can't be null";
     }
     else{

        $query = "SELECT * FROM signup WHERE Name='$username' AND Password='$password'";
        $result = $conn->query($query);

        if ($result->num_rows ==1) {
            
            $_SESSION['flag'] = "true";
            header('location: ../View/Dashboard.php');

        } 
        else {
            
           echo "Invalid username";
        }
    }
?>