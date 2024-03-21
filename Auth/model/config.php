<?php

session_start();

$hostname="localhost";
$dbusername="root";
$dbpassword="";
$dbname = "webtech";

$conn=mysqli_connect($hostname,$dbusername,$dbpassword,$dbname);

?>