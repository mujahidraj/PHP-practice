<?php

session_start();

$hostname = 'localhost';
$dbusername= 'root';
$dbpass='';
$dbname='webtech';

$conn=mysqli_connect($hostname,$dbusername,$dbpass,$dbname);
?>