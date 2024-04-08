
<?php

$hostname = 'localhost';
$dbusername= 'root';
$dbpass='';
$dbname='lab7';

$conn=mysqli_connect($hostname,$dbusername,$dbpass,$dbname);




$name = $_POST['name'];
$contact = $_POST['contact'];
$username = $_POST['username'];
$password = $_POST['password'];


$sql = "INSERT INTO employees (name, contact, username, password) VALUES ('$name', '$contact', '$username', '$password')";

if ($conn->query($sql) === TRUE) {
    echo "New employee registered successfully";
} 

?>
