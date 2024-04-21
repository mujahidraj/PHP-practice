
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <!-- Include any necessary CSS files -->
</head>
<body>
    <!-- Header/Top Bar -->
    <header>
        <div class="logo">
            <a href="Dashboard.php"><img src="logo.png" alt="Company Logo"></a>
        </div>
        <div class="dashboard-title">
            <h1>Dashboard Title</h1>
        </div>
        <div class="search-bar">
            <form action="search.php" method="GET">
                <input type="text" name="search_query" placeholder="Search for properties">
                <button type="submit">Search</button>
            </form>
        </div>
        <?php
        // Check if user is logged in and determine whether to show client or agent specific options
        $user_type = 'client'; // Assuming user is a client for demonstration purposes
        if ($user_type === 'client') {
            // Display client specific options
            echo '<div class="messages-notifications">
                    <!-- Client specific notifications/messages -->
                  </div>';
        } else {
            // Display agent specific options
            echo '<div class="property-listings">
                    <!-- Agent specific property listings -->
                  </div>';
        }
        ?>
        <div class="profile-dropdown">
            <!-- Profile dropdown content -->
            <button class="dropbtn">Profile</button>
            <div class="dropdown-content">
                <a href="#">Settings</a>
                <a href="#">Logout</a>
            </div>
        </div>
        <div class="help-support">
            <a href="#">Help/Support</a>
        </div>
        <div class="settings">
            <a href="#">Settings</a>
        </div>
        <?php
        // Check if user is an agent and display search filters accordingly
        if ($user_type === 'agent') {
            echo '<div class="search-filters">
                    <!-- Agent specific search filters -->
                  </div>';
        }
        ?>
        <div class="dashboard-navigation">
            <!-- Dashboard navigation links -->
        </div>
        <div class="logout">
            <a href="logout.php">Logout</a>
        </div>
    </header>
    <!-- Other content of the dashboard goes here -->
</body>
</html>
