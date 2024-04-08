<!-- edit_product.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Product</title>
</head>
<body>

    <h1>Edit Product</h1>
    <?php

 $hostname = 'localhost';
 $dbusername= 'root';
 $dbpass='';
 $dbname='lab7';
 
 $conn=mysqli_connect($hostname,$dbusername,$dbpass,$dbname);
 
    $product_name = $_GET['name'];

 
    $sql = "SELECT * FROM products WHERE name='$product_name'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    
        $row = $result->fetch_assoc();
        ?>
        <form action="update_product.php" method="post">
            <input type="hidden" name="product_name" value="<?php echo $row['name']; ?>">
            <label for="quantity">Quantity:</label><br>
            <input type="number" id="quantity" name="quantity" value="<?php echo $row['quantity']; ?>" required><br>
            <label for="price">Price:</label><br>
            <input type="number" id="price" name="price" value="<?php echo $row['price']; ?>" step="0.01" required><br><br>
            <input type="submit" value="Update Product">
        </form>
        <?php
    } else {
        echo "Product not found.";
    }

   
    ?>
</body>
</html>
