<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign_Up</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        form {
            max-width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
        }
        input[type="text"],
        input[type="email"],
        input[type="password"],
        input[type="date"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            width: 100%;
            background-color: #4caf50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #45a049;
        }
        a {
            text-decoration: none;
            color: #007bff;
        }
        fieldset {
            border: none;
            padding: 0;
            margin: 0;
        }
        legend {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <form align="center" method="post" action="../controller/Signupcheck.php">
        <fieldset>
            <legend><h1>Signup Here</h1></legend>
            Name: <input type="text" name="name" required><br><br>
            Email: <input type="email" name="email" required><br><br>
            Gender: <input type="text" name="gender"><br><br>
            DOB: <input type="date" name="DOB" required><br><br>
            Password: <input type="password" name="password" required><br><br>
            Re Password: <input type="password" name="re_password" required><br><br>
            User-type: <input type="text" name="user_type"><br><br>
            <input type="submit" value="Signup" name="submit"><br><br>
            <a href="./signin.php">Sign-in Here</a><br><br>
            <a href="./signin_cookie.php">Sign-in with cookie</a><br><br>
        </fieldset>
    </form>
</body>
</html>
