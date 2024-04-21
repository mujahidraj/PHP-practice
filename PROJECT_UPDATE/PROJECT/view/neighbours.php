

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Neighbor List</title>
<link rel="stylesheet" href="../design/design_neighbours.css"
</head>
<body>

<form action="agent-property-management/controller/delete_neighbor.php" method="post" align="center">
<a href="clientdashboard.php"><img src="logos/logo.png" alt="logo"></a>
    <fieldset align="center">
        
        <legend><h3>NEIGHBOR LIST</h3></legend>

        <table border="1" cellspacing="0" cellpadding="5" align="center">
            <thead>
                <tr>
                    <th>Checkbox</th>
                    <th>Neighbor ID</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Occupation</th>
                    <th>Age</th>
                </tr>
            </thead>
            <tbody>
            <?php

            require '../model/config.php';

            $sql = "SELECT id, name, address, occupation, age FROM neighbour";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
              
                while($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td><input type='checkbox' name='id[]' value='" . $row["id"] . "'></td>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["name"] . "</td>";
                    echo "<td>" . $row["address"] . "</td>";
                    echo "<td>" . $row["occupation"] . "</td>";
                    echo "<td>" . $row["age"] . "</td>";
                    echo "</tr>";
                }
            } 
            else {
                echo "<tr><td colspan='6'>No neighbors found</td></tr>";
            }
            $conn->close();

            ?>
            </tbody>
        </table>
        <br><br>
        <a href="agent-property-management/view/add_neighbor.php"><button type="button">Insert Neighbor</button></a>
        <input type="submit" name="submit" value="Delete Neighbor">
        <a href="agent-property-management/view/update_neighbor.php"><button type="button">Update Neighbor</button></a>
    </fieldset>
</form>

</body>
</html>
