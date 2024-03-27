<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Login</title>
</head>
<body>
    <form method='post' action='../controller/agentlogincheckdb.php'>
        <fieldset align="center">
            <legend><h1>Agent Login</h1></legend>
            <table align="center">
                <tr>
                    <td>Username :</td>
                    <td><input type="text" name="username" placeholder="Username" required></td>
                </tr>
                <tr>
                    <td>Password :</td>
                    <td><input type="password" name="password" placeholder="Password" required></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" value="Submit" name="submit"></td>
                </tr>
                <tr>
                    <td>

            
                    <h3 align="center"> Forgot Password?</h3><a href="forgot_password.php" align="center">Click here...</a><br><br><br>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><h3>Are you a new agent here?</h3></td>
                </tr>
                <tr>
                    <td colspan="2"><a href="agentsignup.php">Click here..</a></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
