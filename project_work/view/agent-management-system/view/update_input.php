<?php


if(!isset($_COOKIE['flag'])){
    header('location: agentlogin.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Property List</title>
</head>
<body>

<form action="../controller/update_property.php" method="post">
    <fieldset align="center">
        <legend><h3>Properties List</h3></legend>

        <table border="1" cellspacing="0" align="center">
            <thead>
                <tr>
                    <th>Checkbox</th>
                    <th>Property ID</th>
                    <th>Property Name</th>
                    <th>Property Type</th>
                    <th>Property Location</th>
                    <th>Property Size</th>
                    <th>Property Room</th>
                    <th>Property Price</th>
                </tr>
            </thead>
            <tbody>
                <?php
                require '../../../model/config.php';
                $sql = "SELECT id, properties_name, type, location ,size ,room, price FROM properties";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                   
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td><input type='checkbox' name='id[]' value='" . $row["id"] . "'></td>";
                        echo "<td>" . $row["id"] . "</td>";
                        echo "<td><input type='text' name='property_name[" . $row["id"] . "]' value='" . $row["properties_name"] . "'></td>";
                        echo "<td><input type='text' name='type[" . $row["id"] . "]' value='" . $row["type"] . "'></td>";
                        echo "<td><input type='text' name='location[" . $row["id"] . "]' value='" . $row["location"] . "'></td>";
                        echo "<td><input type='text' name='size[" . $row["id"] . "]' value='" . $row["size"] . "'></td>";
                        echo "<td><input type='text' name='room[" . $row["id"] . "]' value='" . $row["room"] . "'></td>";
                        echo "<td><input type='text' name='price[" . $row["id"] . "]' value='" . $row["price"] . "'></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='8'>No properties found</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
        <br><br>

        <input type="hidden" name="form_submitted" value="1">

        <input type="submit" value="Update" align="center">
    </fieldset>
</form>

</body>
</html>
