<?php

require '../model/config.php';

if(isset($_REQUEST['submit'])){
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$gender=$_REQUEST['Gender'];
$DOB=$_REQUEST['DOB'];
$password=$_REQUEST['password'];
$re_password=$_REQUEST['re_password'];

if($password==$re_password){
    $query="INSERT INTO auth VALUES('','$name','$email','Gender','DOB','password','re_password')";
    mysqli_query($conn,$query);
    echo "Sign up Success";
}

}

?>