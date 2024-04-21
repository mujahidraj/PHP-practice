<?php

    require '../../../model/config.php'; 

    if(isset($_REQUEST['submit'])) { 
        $property_name = $_REQUEST['property_name'];
        $type = $_REQUEST['type'];
        $location = $_REQUEST['location'];
        $size = $_REQUEST['size'];
        $room = $_REQUEST['room'];
        $price = $_REQUEST['price'];

     
        $query = "INSERT INTO properties (properties_name,type, location,size,room, price) VALUES ('$property_name','$type', '$location','$size','$room', '$price')";
        

       
        if (mysqli_query($conn, $query)) {
            echo "Property added successfully";
            header('location:../../agentproperties_listing.php');

        } else {
            echo "Error";
        }

    }
    else {
        echo "Form not submitted"; 
    }
?>
