<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div>
        <form action="./treatment/patient_to_db.php" method="post">
            <label for="fname">Firstname:</label><br>
            <input type="text" id="fname" name="lastname"><br>

            <label for="lname">Lastname:</label><br>
            <input type="text" id="lname" name="firstname"><br>

            <label for="bdate">Birth Date:</label><br>
            <input type="date" id="bdate" name="birthdate"><br>

            <label for="phone">Enter your phone number:</label><br>
            <input type="tel" id="phone" name="phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"><br>

            <label for="email">Email:</label><br>
            <input type="mail" id="email" name="email"><br>

            <input type="submit">
        </form>

    </div>


</body>
</html>