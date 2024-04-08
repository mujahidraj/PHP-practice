<!-- search_employee_result.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Search Employee Result</title>
</head>
<body>
    <h1>Search Employee Result</h1>
    <?php
    $hostname = 'localhost';
    $dbusername= 'root';
    $dbpass='';
    $dbname='lab7';
    
    $conn=mysqli_connect($hostname,$dbusername,$dbpass,$dbname);

    $search_username = $_POST['search'];

   
    $sql = "SELECT * FROM employees WHERE username='$search_username'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
       
        while($row = $result->fetch_assoc()) {
            echo  "Name: " . $row["name"]. "<br>Contact: " . $row["contact"]. "<br>Username: " . $row["username"]. "<br>";
        }
    } else {
        echo "No employee found with the given username.";
    }

    ?>
</body>
</html>
