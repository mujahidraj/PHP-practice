
<?php

$hostname = 'localhost';
$dbusername= 'root';
$dbpass='';
$dbname='lab7';

$conn=mysqli_connect($hostname,$dbusername,$dbpass,$dbname);



$name = $_POST['name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];


$sql = "INSERT INTO products (name, quantity, price) VALUES ('$name', '$quantity', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "New product added successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
