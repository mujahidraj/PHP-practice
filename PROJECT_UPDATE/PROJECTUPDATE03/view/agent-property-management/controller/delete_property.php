<?php
require '../../../model/config.php';

if(isset($_POST['id'])) { 
    $id = $_POST['id'];

    foreach($id as $id) {
        $id = intval($id); 
        
       
        $query = "DELETE FROM properties WHERE id = $id";
        
    
        if (mysqli_query($conn, $query)) {
            echo "Property with ID $id deleted successfully<br>";
            header('location:../../agentproperties_listing.php');
        } 
        else {
            echo "Error deleting property with ID $id: " . mysqli_error($conn) . "<br>";
        }
    }
    
    mysqli_close($conn); 
} else {
    echo "Form not submitted or no properties selected";
}
?>
