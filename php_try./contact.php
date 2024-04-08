<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Me</title>
</head>
<body>
 
  <form action="submit_contact.php" method="post">
    <fieldset align="center">
        <legend><h3>Contact form</h3></legend>

   
    Name : <input type="text" id="name" name="name" required><br><br>
    
    Email : <input type="email" id="email" name="email" required><br><br>
    
   Massage :  <textarea id="message" name="message" rows="4" required></textarea><br><br>
    <input type="submit" value="Submit">
    </fieldset>
  </form>
</body>
</html>
