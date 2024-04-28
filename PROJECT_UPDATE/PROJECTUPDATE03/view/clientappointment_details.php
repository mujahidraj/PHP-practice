<?php
require '../model/config.php';



if (isset($_SESSION['Name'])) {
    $username = $_SESSION['Name'];

    $sql = "SELECT * FROM appointment WHERE name = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Appointments</title>
    <link rel="stylesheet" href="../design/design_clientappointmentdetails.css">
</head>
<body>
    <form action="" align="center">
        <fieldset>
        <a href="clientdashboard.php"><img src="logos/logo.png" alt="logo"></a>
       
    <h1>All Appointments for <?php echo $username; ?></h1>
    <table>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Date</th>
            <th>Time</th>
            <th>Duration</th>
            <th>Property Address</th>
            <th>MLS Number</th>
        </tr>
        <?php
      
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['phn_no'] . "</td>";
                echo "<td>" . $row['date'] . "</td>";
                echo "<td>" . $row['time'] . "</td>";
                echo "<td>" . $row['duration'] . "</td>";
                echo "<td>" . $row['pro_add'] . "</td>";
                echo "<td>" . $row['mls_no'] . "</td>";
                echo "</tr>";
            }
        ?>
    </table>
    </fieldset>
    </form>
</body>
</html>
<?php
    } else {
        echo "No appointments found for $username.";
    }
} else {
    echo "User not logged in.";
}
?>
