<?php

$fname = $_REQUEST['fname'];
$lname = $_REQUEST['lname'];
$dob = $_REQUEST['DOB'];
$gender = $_REQUEST['gender'];
$phone = $_REQUEST['phone'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$confirm_password = $_REQUEST['confirm_password'];

$characters = ['!', '@', '#', '$', '%', '^', '&', '*', '(', ')', '+', '=', '{', '}', '[', ']', '|', '\\', '/', '<', '>', '?', ',', '.', '~', '`', "'", '"', ':', ';', '_', '-', ' '];

//fisrt name 

for ($i = 0; $i < strlen($fname); $i++) {
    if (in_array($fname[$i], $characters)) {
        echo "First Name contains disallowed characters.Fisrt name only contain letters and Whitespace";
        break;
    }
    else if($fname==""){
        echo "First name cant remain null";
        }
} 

//last name 

for ($i = 0; $i < strlen($lname); $i++) {
    if (in_array($lname[$i], $characters)) {
        echo "First Name contains disallowed characters.Fisrt name only contain letters and Whitespace";
        break;
    }
    else if($lname==""){
        echo "Last name can't remain null";
        }
        else{
            echo "form Validationm Fail";
        }
} 

if (empty($email)) {
    echo "Email address cannot be empty";
}
 else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Invalid email address";
}
else 
{
    echo "Form validation Fail";
}

if (empty($gender)) {
    echo "Gender must be selected";
    header('location:dashboard.php');
}
else {
    echo "Form validation fail";
}




