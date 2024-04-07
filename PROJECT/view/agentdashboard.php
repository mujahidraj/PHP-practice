<?php


if(!isset($_COOKIE['flag'])){
    header('location: agentlogin.php');
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>Agent Dashboard</title>
</head>
<body>
<form action="../controller/agentproperty_search.php" method="post">
<table width="100%" cellspacing="0" cellpadding="5">
    <tr>
        <td>
            <table>
                <tr>
                    <td>
                        <a href="dashboard.php"><img src="logos/company.jpg" alt="Company Logo"></a>
                    </td>
                </tr>
            </table>
        </td>
        
        <td>
            <table
            ><tr>
                <td><h4>Logged In as Agent</h4>
                    <input type="text" name="search" id=""placeholder="search for client">
                    <input type="submit" value="Search">
            </td>
            </tr>
        </table>
    </td>
        <td>
            <table>
                <tr>
                    <td> <h4>View Option</h4>
                    <select name="View Navigation">
                        <option name=""><a href="dashboard_home.php">Grid view</a></option>
                        <option name=""><a href="property_whitelist.php">List View</a></option>
                        <option name=""><a href="analytics.php">Content View</a></option>
                    </select></td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr>
                    <td>
                    <h4>Property Management</h4>
                    <select name="Dashboard Navigation" onchange="window.location.href=this.value;">
                        <option name="" value="agentdashboard.php">Home</option>
                        <option name="" value="agentproperties_listing.php">Property List</option>
                        <option name="" value="agent-property-management/view/update_input.php">Edit Property Detail</option>
                        <option name="" value="agent-property-management/view/add_properties.php">Add Property</option>
                        <option name="" value="agentproperties_listing.php">Delete Property</option>
                    </select>
                        </td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr>
                    <td>
                        <h4>Profile Option</h4>
                    <select name="Profile Navigation">
                        <option name=""><a href="dashboard_home.php">View Profile</a></option>
                        <option name=""><a href="property_whitelist.php">Edit Profile</a></option>
                        <option name=""><a href="analytics.php">Agent Friend</a></option>
                        <option name=""><a href="tasks.php">Client Friend</a></option>
                    </select></td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr>
                    <td><h4>Properties List</h4>
                        <select name="Property List">
                        <option name="">Aziz Villa</option>
                        <option name="">Sopnonir</option>
                        <option name="">Ahmed Nir</option>
                        <option name="">Santineketon</option>
                    </select>
                        
                    </td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr>
                    <td>
                    
                    <a href="dashboard.php"><img src="logos/Notify.png" alt="Massage/Notication Logo"></a>
                    </td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr>
                    <td><a href="help _and_support.php"><img src="logos/support.png" alt="Help/support Logo"></a></td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr>
                    <td> <a href="dashboard.php"><img src="logos/settings.png" alt="Settings Logo"></a>
                    </td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr>
                    <td><a href="../controller/agentlogout.php"><img src="logos/logout.png" alt="logout Logo">
                </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<hr>
<div>
<table width="15%" border="1" cellpadding="5" cellspacing="0">
    <tr>
        <td>
        <input type="text" name="search" id="" placeholder="search">
                        <input type="submit" value="search"><br><br>
            <a href="agentdashboard.php">Dashboard Overview</a><br><br>
            <a href="map.php">Office Location</a><br><br>
            <a href="agentproperties_listing.php">Saved Property</a><br><br>
            <a href="agent_search.php">Agent Contacts</a><br><br>
            <a href="#Task and Reminder">Appointment Scheduler</a><br><br>
            <a href="#profile_settings">Profile Settings</a><br><br>
            <a href="help _and_support.php">Help and Support</a><br><br>
            <a href="../controller/agentlogout.php">Logout</a><br><br><br><br><br><br><br><br>
        </td>
    </tr>
</table>
<hr>


            <footer align="center">
                <p>&copy; 2021 Real Estate. All rights reserved.</p>
            </footer>



</div>
</form>

</body>
</html>
