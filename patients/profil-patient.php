<?php
require_once('../treatment/database_connect.php');

$idPatient = $_GET["idPatient"];


$request = $database->query('SELECT * FROM `patients` WHERE id=' . "$idPatient");

$patient = $request->fetch();

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page patient</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-end align-item-center py-2">
            <button a class="rounded-1 py-2 justify-content-center  col-2 mx-2 ">
                <a class="link-underline link-underline-opacity-0 text-white" href="../index.php">Accueil</a>
            </button>

            <button a class="rounded-1 py-2 justify-content-center  col-2 mx-2 ">
                <a class="link-underline link-underline-opacity-0 text-white" href="../patients/liste-patients.php">Liste des patients</a>
            </button>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row text-center mb-3">
            <h3 class="text-center mb-5">Civilité</h3>
            <p> N° patient: <?php echo  $patient["id"] ?></p>
            <p> Nom: <?php echo  $patient["lastname"] ?></p>
            <p> Prénom: <?php echo  $patient["firstname"] ?></p>
            <p> Date de Naissance: <?php echo  $patient["birthdate"] ?></p>
        </div>
        <div class="row text-center">
            <h3 class="text-center mb-5">Coordonnées</h3>
            <p> Téléphone: <?php echo  $patient["phone"] ?></p>
            <p> E-mail: <?php echo  $patient["mail"] ?></p>
        </div>
    </div>

    <div class="container mt-5 py-5">
        <h2 class=text-center>Modifications des informations</h2>
        <div class="row justify-content-center">
            <!-- form modif donnees-->
            <form class=" col-2" action="../treatment/modif-patient.php" method="post">
                <div class="d-flex  flex-column justify-content-center">

                    <label class="text-center" for="lastname">Nom</label>
                    <input type="text" id="fname" name="lastname" value="<?php echo $patient["lastname"] ?>">

                    <label class="text-center" for="firstname">Prenom</label>
                    <input type="text" id="firstname" name="firstname" value="<?php echo $patient["firstname"] ?>">

                    <label class="text-center" for="birthdate">Date de naissance</label>
                    <input type="date" id="birthdate" name="birthdate" value="<?php echo $patient["birthdate"] ?>">

                    <label class="text-center" for="phone">N° téléphone</label>
                    <input class="input-group" type="tel" id="phone" name="phone" pattern="[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}-[0-9]{2}" value="<?php echo $patient["phone"] ?>">

                    <label class="text-center" for="mail">Email</label>
                    <input type="mail" id="mail" name="mail" value="<?php echo $patient["mail"] ?>">

                    <input type="hidden" name="idPatient" value="<?php echo $patient["id"] ?>" />
                    <button type="submit" class="text-white rounded-1 py-2 justify-content-center mt-2 mx-2">Soumettre</button>
                </div>
            </form>

        </div>
        <form action="../treatment/suppression-patient.php" method="post">
            <div class="row justify-content-end align-item-end me-5"><!--bouton supprimer patient-->
                <form action="../treatment/suppression-patient.php" method="post">
                    <input type="hidden" name="idPatient" value="<?php echo $patient["id"] ?>" />
                    <button type="submit" class="text-danger rounded-1 py-2 justify-content-center mt-2 mx-2 col-2">Supprimer le patient</button>
                </form>
            </div>

        </form>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>