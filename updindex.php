<!DOCTYPE html>

<html>

    <head>

        <title> PHP UPDATE DATA </title>

        <meta charset="UTF-8">

        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>

    <body>

        <form action="updation.php" method="post">

            ID To Update: <input type="text" name="id" required><br><br>

            New First Name:<input type="text" name="fname" required><br><br>

            New Last Name:<input type="text" name="lname" required><br><br>

            New Age:<input type="number" name="age" required><br><br>

            <input type="submit" name="update" value="Update Data">

        </form>

    </body>


</html>