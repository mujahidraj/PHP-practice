<?php

require '../Model/Database.php';


    $username = $_REQUEST["user_name"];
    $password = $_REQUEST["pass"];

    if ($username==""||$password=="") 
    { 
        echo "Username or Password can't be null";
     }
     else{

        $query = "SELECT * FROM signup WHERE Name='$username' AND Password='$password'";
        $result = $conn->query($query);

        if ($result->num_rows ==1) {
            
            setcookie('flag','true',time()+10000,'/');
            header('location: ../View/Dashboard_cookie.php');

        } 
        else {
            
           echo "Invalid username";
        }
    }
?>