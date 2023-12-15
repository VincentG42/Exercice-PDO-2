<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>formulaire ajout patient</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" 
            rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" 
            crossorigin="anonymous">
</head>
<body>
    <div class="container ajoutPatient">
        <div class="row justify-content-end">
            <button class = "rounded-1 py-2 justify-content-center mt-5 col-2">
                <a  class ="link-underline link-underline-opacity-0 text-white" href="../index.php">Accueil</a>
            </button>
        </div>
        <h2 class="mx-5">Formulaire d'insciption</h2>
        <div class="mx-5">
            <form action="../treatment/patient_to_db.php" method="post">
                <label for="fname">Firstname:</label><br>
                <input class="input-group" type="text" id="fname" name="lastname"><br>

                <label for="lname">Lastname:</label><br>
                <input  class="input-group"type="text" id="lname" name="firstname"><br>

                <label for="bdate">Birth Date:</label><br>
                <input  class="input-group"type="date" id="bdate" name="birthdate"><br>

                <label for="phone">Enter your phone number:</label><br>
                <input  class="input-group"type="tel" id="phone" name="phone" 
                        pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}"><br>

                <label for="email">Email:</label><br>
                <input  class="input-group"type="mail" id="email" name="email"><br>

                <button type="submit" class=" text-white rounded-1 py-2 justify-content-center col-1 mx-2">Submit</button>
            </form>

        </div>
    </div>

</body>
</html>