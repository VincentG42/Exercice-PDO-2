<?php
require_once('../treatment/database_connect.php');

$request = $database->query('SELECT * FROM `patients`');

$patients = $request->fetchAll();



// Créer une page ajout-rendezvous.php et y créer un formulaire permettant de 
// créer un rendez-vous. Elle doit être accessible depuis la page index.php.

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout RDV</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container">
       
        <div class="row justify-content-end me-5">
            <button a class="rounded-1 py-2 justify-content-center mt-5 col-2 mx-2 ">
                    <a class ="link-underline link-underline-opacity-0 text-white" href="../index.php">Accueil</a>
            </button>
            <button a class="rounded-1 py-2 justify-content-center mt-5 col-2 mx-2 ">
                    <a class ="link-underline link-underline-opacity-0 text-white" href="../patients/liste-patients.php">Liste patients</a>
            </button>
        </div>
        <h2 class="text-center py-4">Nouveau Rendez-vous</h2>
        <div class="row justify-content-center">
            <form class="col-6 py-5" action="../treatment/rdv-to-db.php" method="post">

                <label  class="py-1" for="appointmentDate">Selection Patient:</label><br>
                <select  class="py-1" name="idPatient" id="idPatient">
                    <option value="">--Choissisez un patient--</option>

                    <?php foreach ($patients as $patient) { ?>
                              <option value=""><?php echo $patient["lastname"] ?> <?php echo $patient["firstname"] ?></option>
                    <?php } ?>
                </select><br>
                <label class="py-1" for="appointmentDate">Date de rendez-vous:</label><br>
                <input class="input col-3 py-1" type="datetime-local" step="1800" id="appointmentDate" name="appointmentDate"><br>

                <button type="submit" class=" text-white rounded-1 py-2 mt-3 justify-content-center col-3 mx-2">Ajout Rendez-vous</button>

            </form>
        </div>


    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>