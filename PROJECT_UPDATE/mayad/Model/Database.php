<?php

session_start();

$hostname="localhost";
$dbusername="root";
$dbpassword="";
$dbname = "auth";

$conn=mysqli_connect($hostname,$dbusername,$dbpassword,$dbname);

?>