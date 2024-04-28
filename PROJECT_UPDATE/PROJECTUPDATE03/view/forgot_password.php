<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="stylesheet" href="../design/design_forgotpassword.css">
</head>
<body>
    <form action="../controller/reset_pin_2.php" method="post" align="center">
        <fieldset>
            <img src="logos/logo.png" alt="logo" align="center">
            <h1>Forgot Password</h1>
      <label for=""><b>Email :</b></label>
             <input type="email" name="email" id=""><br>
        <label for=""><b> Reset Pin :  </b></label>
      <input type="text" id="reset_code" name="reset_code" required><br>
        <button type="submit" value="submit">Submit</button>
        </fieldset>
    </form>
</body>
</html>
