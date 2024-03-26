<?php

session_start();

if(!isset($_SESSION['flag'])){
    header('location: clientlogin.php');
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
</head>
<body>

<table width="100%">
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
                <td>
                <h4>Logged In as Client</h4>
                    <input type="text" name="search" id=""placeholder="Search for Agent">
                    <input type="submit" value="Search">
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
                    </select>
                </td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr>
                    <td>
                    <h4>Navigation</h4>
                    <select name="Dashboard Navigation">
                        <option name=""><a href="dashboard_home.php">Home</a></option>
                        <option name=""><a href="property_whitelist.php">Whitelist</a></option>
                        <option name=""><a href="analytics.php">Analytics</a></option>
                        <option name=""><a href="tasks.php">Activity Log</a></option>
                        
                    </select>
                        </td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr>
                    <td>
                        <h4>View Option</h4>
                    <select name="View Navigation">
                        <option name=""><a href="dashboard_home.php">Grid view</a></option>
                        <option name=""><a href="property_whitelist.php">List View</a></option>
                        <option name=""><a href="analytics.php">Content View</a></option>
                    </select>
                </td>
                </tr>
            </table>
        </td>
        <td>
            <table>
                <tr>
                    <td><h4>Watch List</h4>
                        <select name="Property Watch List">
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
                    <td><a href="dashboard.php"><img src="logos/support.png" alt="Help/support Logo"></a></td>
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
                    <td><a href="../controller/clientlogout.php"><img src="logos/logout.png" alt="logout Logo"></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<hr>
<div>
<table width="15%" cellspacing="0" cellpadding="5" border="1">
    <tr>
        <td>
            <form action="../controller/property_search.php">
        <b>Property Search<b><br>
        <input type="text" name="search" id="" placeholder="Search for property"><br><br>
        <input type="submit" value="submit" align="center"><br><br>
        </form>
            <a href="#dashboard_overview">Dashboard Overview</a><br><br>
            <a href="#saved_properties">Saved Properties</a><br><br>
           <a href="neighbours.php">My Neighbours</a><br><br>
           
            <a href="local_service.php">Local Service Provider</a><br><br>
            <a href="#appointment_scheduler">Appointment Scheduler</a><br><br>
            <a href="#agent_contacts">Agent Contacts</a><br><br>
            <a href="#messages_notifications">Messages and Notifications</a><br><br>
            <a href="#profile_settings">Profile Settings</a><br><br>
            <a href="#help_support">Help and Support</a><br><br>
            <a href="#logout">Logout</a><br><br><br>
        </td>
    </tr>
</table>
<hr>
            <footer align="center">
                <p>&copy; 2021 Real Estate. All rights reserved.</p>
            </footer>


</div>

</body>
</html>
