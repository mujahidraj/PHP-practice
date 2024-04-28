<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="../design/design_clientdashboard.css">
</head>
<body>
    <header>
        <div class="logged-in-user">
        <p >Login as: Client</p>
        User : <?php echo $_SESSION['Name'];?>
        </div>
        <div class="container">
            <div class="logo">
                <img src="logos/logo.png" alt="Logo">
            </div>
            <div class="search">
                <input type="text" placeholder="Search Agent">
                <a href="agent_search.php"><input type="button" value="Search Agent"></a>
                <div class="dropdowns">
                    <select name="Profile Navigation" onchange="window.location.href=this.value;">
                        <option value="">Profile Option</option>
                        <option name="" value="view-profile-client.php">View My Profile</option>
                        <option name="" value="edit-profile-client.php">Edit My profile</option>
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
            <a href="clientnotification.php" id="notification"> Notification</a>
                <a href="help _and_support.php" id="help"> Customer Support</a>
                <a href="clientappointment_details.php" id="settings">Appointments</a>
                <a href="#contact">Contact Us</a>
            </div>
        </div>
    </header>
    <form action="../controller/property_search.php" onsubmit="return validateForm()">
    <div class="sidebar">
       
        <div class="search-sidebar">
        <input type="text" name="search" id="search" placeholder="Search for property">
        <input type="submit" value="submit" align="center"><br><br>
        </div>
        </form>
        
        <ul class="sidebar-menu">
            <li><a href="neighbours.php">My neighbours</a></li>
            <li><a href="agent_search.php">Agent Contact</a></li>
            <li><a href="local_service.php">Local Service</a></li>
            <li><a href="Help _and_support.php">Help And Supports</a></li>
            <li><a href="client_appointment.php">Appointment Scheduler</a></li>
            <li><a href="clientnotification.php">Massage And Notification</a></li>
            <li><a href="edit-profile-client.php">Profile Settings</a></li>
            <li><a href="clientabout.php">About Us</a></li>
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
        <div class="class">
        <h2>About Us</h2>
        <p>At our real estate company, we prioritize personalized service, ensuring every client receives tailored solutions to meet their unique needs. With a deep understanding of the market trends and a commitment to transparency, we guide our clients through every step of the buying, selling, or renting process. Our team's dedication to integrity and excellence consistently results in successful transactions and satisfied customers.</p>
    </div>

    <div>
        <h2 id="contact">Contact Us</h2>
        <p>Email  : info@royalestate.bd</p>
        <p>Phone  : +8801641621584</p>
        <p>Address: Kuratoli Bazar, Kuril Bisso Road, Dhaka, Bangladesh</p>
    </div>
    <hr>
            <p><b>&copy; 2024 Your Company. All rights reserved.</b></p>
        </div>
    </footer>
    </form>
    <script src="script/property_search.js"></script>
</body>
</html>
