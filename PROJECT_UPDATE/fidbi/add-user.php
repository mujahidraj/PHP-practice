<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add user</title>
</head>
<body>
    <h1>Admin</h1>

    <form method="post" action="add-user-check.php">
        <fieldset>
            <legend>Add user</legend>
            
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

            <button type="submit" name="reg-submit">Add</button>
        </fieldset>
    </form>
    <a href="admin-dashboard.php">Back</a>
</body>
</html>