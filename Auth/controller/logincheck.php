<?php

session_start();
$Username = $_REQUEST['username'];
$Password = $_REQUEST['password'];

if($Username=="" ||$Password=="")
{
    echo "Null Username and Password";
}
else if ($Username == $Password)
{
    $_SESSION['flag']='true';
    // setcookie('flag','true',time()+10000,'/');
    header('location: ../view/dashboard.php');

}
else{
    echo "invalid user";
}
?>