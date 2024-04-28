<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <h1>Signup</h1>
    <a href="index.php"><< Back to home</a> |
    <a href="signin.php">Sign in</a>

    <form method="post" action="signup-check.php">
        <fieldset>
            <legend>Registration form</legend>
            
            <table>
                <tr>
                    <td><label for="name">Name:</label></td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td><label for="username">Username:</label></td>
                    <td><input type="text" name="username"></td>
                </tr>
                <tr>
                    <td><label for="phone">Phone Number:</label></td>
                    <td><input type="tel" name="phone"></td>
                </tr>
                <tr>
                    <td><label for="email">Email:</label></td>
                    <td><input type="email" name="email"></td>
                </tr>
                <tr>
                    <td><label for="dob">Date of birth:</label></td>
                    <td><input type="date" name="dob"></td>
                </tr>
                <tr>
                    <td><label for="user-type">User type:</label></td>
                    <td>
                        <select name="user-type">
                            <option name="client">Client</option>
                            <option name="Agent">Agent</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td><label for="gender">Gender</label></td>
                    <td>
                        <input type="radio" name="gender" value="male"> Male
                        <input type="radio" name="gender" value="female"> Female
                    </td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" name="password"></td>
                </tr>
                <tr>
                    <td><label for="confirm-password">Confirm Password:</label></td>
                    <td><input type="password" name="confirm-password"></td>
                </tr>
            </table>

            <button type="submit" name="reg-submit">Signup</button>
        </fieldset>
    </form>
</body>
</html>