<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DOCUMENT </title>
</head>
<body>
    <form method='post' action='../controller/sign_up_check.php'>
<fieldset>
    <h2>
       Sign Up Form Of Real Estate
</h2>
    Name : <input type="text" name="name" id=""><br><br>
    Email :<input type="email" name="email" id=""><br><br>
    Gender: <input type="radio" name="gender" id="">Male
    <input type="radio" name="gender" id="">Female<br><br>
    DOB : <input type="date" name="DOB" id=""><br><br>
    Password :<input type="password" name="password" id=""><br><br>
    Re Password : <input type="password" name="re_password" id=""><br><br>
    User type: <input type="text" name="user_type" id=""><br><br>
   <input type="submit" value="submit"name="submit"><br><br>
   <a href="./sign_in.php"> Sign in </a>
</fieldset>

    </form>
</body>
</html>