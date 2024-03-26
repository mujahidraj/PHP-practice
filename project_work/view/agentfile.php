<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agent Document Upload</title>
</head>
<body>
    <form method="post" action="../controller/agentfilecheck.php" enctype="multipart/form-data">
        <fieldset>
            <legend><h1>Agent Document Upload</h1></legend>
            <table align="center">
                <tr>
                    <td><h3>Upload your NID Card Image or File : </h3></td>
                    <td><input type="file" name="myfile" required></td>
                </tr>
                <tr>
                    <td><h3>Upload your Trade license via PDF : </h3></td>
                    <td><input type="file" name="myfile2" required></td>
                </tr>
                <tr>
                    <td colspan="2" align="center"><input type="submit" name="submit" value="Upload"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
