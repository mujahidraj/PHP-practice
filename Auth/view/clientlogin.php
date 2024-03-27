<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Login</title>
</head>
<body>
    <form method='post' action='../controller/clientlogincheckdb.php'>
        <fieldset align="center">
            <legend><h1>Client Login</h1></legend>

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
                
               
            </table>
            <br><br>
            
           Forgot Password?<a href="forgot_password.php">Click here...</a><br><br><br>
            
            <h3>Are you a new client here?</h3>
                
               
                <a href="clientsignup.php">Click here..</a>
        </fieldset>
    </form>
</body>
</html>
