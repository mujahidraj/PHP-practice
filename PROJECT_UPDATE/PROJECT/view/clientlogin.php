<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Client Login</title>
    <link rel="stylesheet" href="../design/design_clientlogin.css">
</head>
<body>

    <form method='post' action='../controller/clientlogincheckdb.php'>
        <fieldset align="center">
        <img src="logos/logo.png" alt="logo">
        <h1 align="center">Client Login</h1>

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
    
            
           <h3>Forgot Password?</h3><a href="forgot_password.php">Go</a><br><br>
        </fieldset>
    </form>
</body>
</html>
