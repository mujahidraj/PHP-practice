<?php

require '../Model/Database.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phn_no = $_POST['phn_no'];
$date = $_POST['date'];
$time = $_POST['time'];
$duration = $_POST['duration'];
$pro_add = $_POST['pro_add'];
$mls_no = $_POST['mls_no'];
$a_name = $_POST['a_name'];
$a_email = $_POST['a_email'];
$a_phn = $_POST['a_phn'];

$sql = "INSERT INTO appointments (name, email, phn_no, date, time, duration, pro_add, mls_no, a_name, a_email, a_phn) 
        VALUES ('$name', '$email', '$phn_no', '$date', '$time', '$duration', '$pro_add', '$mls_no', '$a_name', '$a_email', '$a_phn')";


if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}


$conn->close();
?>
