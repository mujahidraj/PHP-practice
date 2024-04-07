<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../design/design_clientdashboard.css">
</head>
<body>
    <form action=""></form>
    <header>
        <div class="container">
            <div class="logo">
                <img src="logos/logo.png" alt="Logo">
            </div>
            <div class="search">
                <input type="text" placeholder="Search Agent">
                <a href="agent_search.php"><input type="button" value="Search Agent"></a>
                <div class="dropdowns">
                    <select name="Profile Navigation">
                        <option value="">Profile Option</option>
                        <option name=""><a href="dashboard_home.php">View Profile</a></option>
                        <option name=""><a href="property_whitelist.php">Edit Profile</a></option>
                        <option name=""><a href="analytics.php">Agent Friend</a></option>
                        <option name=""><a href="tasks.php">Client Friend</a></option>
                    </select>
                    <select>
                        <option value="">Watchlist</option>
                    <option name="">Aziz Villa</option>
                        <option name="">Sopnonir</option>
                        <option name="">Ahmed Nir</option>
                        <option name="">Santineketon</option>
                    </select>

                    <select name="View Navigation">
                    <option value="">View Navigation</option>
                        <option name=""><a href="dashboard_home.php">Grid view</a></option>
                        <option name=""><a href="property_whitelist.php">List View</a></option>
                        <option name=""><a href="analytics.php">Content View</a></option>
                    </select>

                    <select name="Dashboard Navigation">
                        <option value="">Activity Option</option>
                        <option name=""><a href="dashboard_home.php">Home</a></option>
                        <option name=""><a href="property_whitelist.php">Whitelist</a></option>
                        <option name=""><a href="analytics.php">Analytics</a></option>
                        <option name=""><a href="tasks.php">Activity Log</a></option>
                        
                    </select>
                </div>
            </div>
            <div class="user-options">
            <a href="#" id="notification"> Notification</a>
                <a href="help _and_support.php" id="help"> Customer Support</a>
                <a href="#" id="settings">Settings</a>
                <a href="../controller/clientlogout.php" id="contact us">Contact Us</a>
            </div>
        </div>
    </header>
    <form action="../controller/property_search.php">
    <div class="sidebar">
       
        <div class="search-sidebar">
        <input type="text" name="search" id="" placeholder="Search for property">
        <input type="submit" value="submit" align="center"><br><br>
        </div>
        </form>
        
        <ul class="sidebar-menu">
            <li><a href="neighbours.php">My neighbours</a></li>
            <li><a href="agent_search.php">Agent Contact</a></li>
            <li><a href="local_service.php">Local Service</a></li>
            <li><a href="Help _and_support.php">Help And Sypports</a></li>
            <li><a href="#">Appointment Scheduler</a></li>
            <li><a href="#">Massage And Notification</a></li>
            <li><a href="#">Profile Settings</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="../controller/clientlogout.php">Client  Logout</a></li>
        </ul>
    </div>

    <main>
        <div class="container" align="center">
            <h1>Welcome to the Dashboard</h1>
<img src="logos/property1.jpg" alt="">
<h3 Align="center">Raj's Kingdom</h3>
<p>Step into the majestic realm of Raj's Kingdom, where grandeur meets tranquility in every corner. This sprawling estate boasts palatial architecture, adorned with intricate detailing and opulent finishes throughout. From the magnificent foyer to the luxurious living spaces, every room exudes elegance and sophistication. Outdoor amenities include lush gardens, sparkling fountains, and a private pool, creating a serene oasis fit for royalty. With its regal charm and unparalleled beauty, Raj's Kingdom offers a lifestyle of unparalleled luxury and refinement.</p>



<img src="logos/property2.jpg" alt="" width="60%">
<h3>Mayad Palace</h3>
<p>Discover comfort and convenience in this charming Mayad's Palace with an inviting open-concept layout. The modern kitchen is perfect for culinary endeavors, while the serene master bedroom offers relaxation. Enjoy the landscaped backyard oasis for outdoor entertainment. Conveniently located near schools, parks, and shopping centers, with easy highway access. Don't miss out on this perfect blend of comfort and Mayad's Palace living.</p>
        </div>
    </main>

    <footer>
        <div class="container">
            <p>&copy; 2024 Your Company. All rights reserved.</p>
        </div>
    </footer>
    </form>
</body>
</html>
