<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Signin</h1>
    <a href="index.php"><< Back to home</a> |
    <a href="signup.php">Signup</a>

    <form method="post" action="signin-check.php">
        <fieldset>
            <legend>Signin form</legend>

            <table>
                <tr>
                    <td><label for="username-or-email">Username or email:</label></td>
                    <td><input type="text" name="username-or-email"></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password"></td>
                </tr>
            </table>
            <button type="submit" name="signin-submit">Login</button>
        </fieldset>
    </form>
</body>
</html>