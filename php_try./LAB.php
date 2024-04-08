<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Email Provider Registration</title>
</head>
<body>
  <form action="dashboard.php" method="post">
    <fieldset align="center">
      <Legend><h3>Registration form</h3></Legend>
    <table align="center" cellpadding="5" border="1">
      <tr>
        <td>First Name:</td>
        <td><input type="text" id="fname" name="fname" required></td>
      </tr>
      <tr>
        <td>Last Name:</td>
        <td><input type="text" id="lname" name="lname" required></td>
      </tr>
      <tr>
        <td>Date of Birth:</td>
        <td>
         <input type="date" name="DOB" id="">
        </td>
      </tr>
      <tr>
        <td>Gender:</td>
        <td>
          <input type="radio" id="male" name="gender" value="male" required>
          <label for="male">Male</label>
          <input type="radio" id="female" name="gender" value="female" required>
          <label for="female">Female</label>
        </td>
      </tr>
      <tr>
        <td>Phone:</td>
        <td><input type="text" id="phone" name="phone" required></td>
      </tr>
      <tr>
        <td>Email ID:</td>
        <td><input type="email" id="email" name="email" required></td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" id="password" name="password" required></td>
      </tr>
      <tr>
        <td>Confirm Password:</td>
        <td><input type="password" id="confirm_password" name="confirm_password" required></td>
      </tr>
    </table>
    <br>
    <input type="submit" value="Submit" align="">
    </fieldset>
  </form>
</body>
</html>
