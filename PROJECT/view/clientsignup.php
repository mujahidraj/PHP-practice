<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Signup Form</title>
    <link rel="stylesheet" href="../design/design_clientsignup.css">
</head>
<body>
    <form action="../controller/clientsignupcheck.php" method="post" align="center">
        <a href="../index.php"><img src="logos/logo.png" alt="logo" align="center"></a>
    <h1>Client Signup Form</h1>
        <fieldset align="center">

            <table cellpadding="5"  align="center">

                <tr>
                    <td><b>Name :</b></td>
                    <td><input type="text" name="name" required></td>
                </tr>
                <tr>
                    <td><b>Phone :</b></td>
                    <td><input type="number" name="number" required></td>
                </tr>
                <tr>
                    <td><b>Username :</b></td>
                    <td><input type="text" name="username" required></td>
                </tr>
                <tr>
                    <td><b>Email :</b></td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td><b>DOB :</b></td>
                    <td><input type="date" name="DOB"></td>
                </tr>
                <tr>
                    <td><b>Gender : </b></td>
                    <td>
                        <input type="radio" name="gender" value="male">Male
                        <input type="radio" name="gender" value="female">Female
                        <input type="radio" name="gender" value="Others">Others
                    </td>
                </tr>
                <tr>
                    <td><b>Password : </b></td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td><b>Comfirm Password : </b></td>
                    <td><input type="password" name="confirm_password" required></td>
                </tr>
               
            </table>
            <input type="submit" value="Submit" name="submit">
                
        </fieldset>
    </form>
</body>
</html>
