<?php

require '../Model/Database.php';

if(isset($_REQUEST['submit'])){
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$gender=$_REQUEST['gender'];
$DOB=$_REQUEST['DOB'];
$password=$_REQUEST['password'];
$re_password=$_REQUEST['re_password'];
$user_type=$_REQUEST['user_type'];

if($password==$re_password){

    $query="INSERT INTO signup VALUES('$name','$email','$gender','$DOB','$password','$re_password','$user_type')";
    mysqli_query($conn,$query);
    echo "Sign up Success";
    header('location:../View/Dashboard.php');

}

}
else {
    echo "error found";
}

?>