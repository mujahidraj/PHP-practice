<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment Form</title>
    <link rel="stylesheet" href="../design/design_agentappointment.css">
</head>
<body>
    <form method='post' action='../Controller/appointmentform_check.php'>
        <fieldset>
        <h1 align="center">Appointment Form</h1>
            <table cellpadding="5" align="center">
                <tr>
                    <td><h2>Agent Information</h2></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Full Name :</b></td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td><b>Email :</b></td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td><b>Phone Number :</b></td>
                    <td><input type="text" name="phn_no" required></td>
                </tr>
                <hr>
                <tr>
                    <td><h2>Appointment Details</h2></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Date :</b></td>
                    <td><input type="date" name="date" required></td>
                </tr>
                <tr>
                    <td><b>Time :</b></td>
                    <td><input type="time" name="time" required></td>
                </tr>
                <tr>
                    <td><b>Duration :</b></td>
                    <td><input type="text" name="duration" required></td>
                </tr>
                <tr>
                    <td><h2>Property Information</h2></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Property Address :</b></td>
                    <td><input type="text" name="pro_add" required></td>
                </tr>
                <tr>
                    <td><b>MLS Number :</b></td>
                    <td><input type="text" name="mls_no" required></td>
                </tr>
                <tr>
                    <td><h2>Client Information</h2></td>
                    <td></td>
                </tr>
                <tr>
                    <td><b>Name :</b></td>
                    <td><input type="text" name="a_name" required></td>
                </tr>
                <tr>
                    <td><b>Email :</b></td>
                    <td><input type="text" name="a_email" required></td>
                </tr>
                <tr>
                    <td><b>Phone Number :</b></td>
                    <td><input type="text" name="a_phn" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" value="Submit" name="submit"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
