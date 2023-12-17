<?php
require_once('../treatment/database_connect.php');

$idRDV = $_GET["idRDV"];
// var_dump($idRDV);


$request = $database->query('SELECT appointments.id, appointments.dateHour, appointments.idPatients, patients.lastname, patients.firstname, patients.birthdate, patients.phone, patients.mail FROM `appointments` 
                            JOIN patients ON appointments.idPatients = patients.id 
                            WHERE appointments.id=' . "$idRDV");

$rdvDetail = $request->fetch();


$request = $database->query('SELECT * FROM `patients`');

$patients = $request->fetchAll();

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
                <a class="link-underline link-underline-opacity-0 text-white" href="../patients/liste-rdv.php">Liste des rendez-vous</a>
            </button>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row text-center mb-3">
            <h3 class="text-center mb-5">Patient</h3>
            <p> N° patient: <?php echo  $rdvDetail["idPatients"] ?></p>
            <p> Nom: <?php echo  $rdvDetail["lastname"] ?></p>
            <p> Prénom: <?php echo  $rdvDetail["firstname"] ?></p>
            <p> Date de Naissance: <?php echo  $rdvDetail["birthdate"] ?></p>
        </div>
        <div class="row text-center">
            <h3 class="text-center mb-5">Rendez-vous</h3>
            <p> N° Rendez-vous : <?php echo  $rdvDetail["id"] ?></p>
            <p> Date et Heure: <?php echo  $rdvDetail["dateHour"] ?></p>
        </div>
        <div class="row justify-content-around my-5">
            <!-- Button trigger modal -->
            <button type="button" class="text-white rounded-1 py-2 justify-content-center col-4 mx-2 mb-3" data-bs-toggle="modal" data-bs-target="#modifpatientModal">
                Modifications des informations
            </button>
            <form action="../treatment/suppression-rdv.php" method="post" class="col-3">
                <input type="hidden" name="idPatient" value="<?php echo $rdvDetail["id"] ?>" />
                <button type="submit" class="text-danger rounded-1 justify-content-center py-2 mx-2 mb-3">
                    Supprimer le rendez-vous
                </button>
            </form>

        </div>

    </div>


    <!-- Modal  Modif RDV-->
    <div class="modal fade" id="modifpatientModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-body">
                    <form class="py-5" action="../treatment/modif-rdv.php" method="post">

                        <label class="py-1" for="appointmentDate">Selection Patient:</label><br>
                        <select class="py-1" name="idPatient" id="idPatient">
                            <option value="">--Choissisez un patient--</option>

                            <?php foreach ($patients as $patient) { ?>
                                <option value="<?php echo $patient["id"] ?>"><?php echo $patient["lastname"] ?> <?php echo $patient["firstname"] ?></option>
                            <?php } ?>
                        </select><br>
                        <label class="py-1" for="appointmentDate">Date de rendez-vous:</label><br>
                        <input class="input col-3 py-1" type="datetime-local" step="1800" id="appointmentDate" name="appointmentDate" value="<?php echo $rdvDetail["dateHour"] ?>"><br>
                        
                        <input type="hidden" name="idRDV" value="<?php echo $rdvDetail["id"] ?>" />
                        <button type="submit" class=" text-white rounded-1 py-2 mt-3 justify-content-center col-3 mx-2">Modifiez le Rendez-vous</button>

                    </form>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>