<?php
require_once('../treatment/database_connect.php');


//requete liste patients
$request = $database->query('SELECT * FROM `patients`');

$patients = $request->fetchAll();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>liste patients</title>
    <link rel="stylesheet" href="../css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="">
   <div= class="row justify-content-end">
        <button a class="rounded-1 py-2 justify-content-center mt-5 col-2 mx-2 ">
                <a class ="link-underline link-underline-opacity-0 text-white" href="../index.php">Accueil</a>
        </button>
   </div=>
    <div class="container-fluid py-5">
        <h2 class ="text-center mb-4">Liste des patients:</h2>

        <div class="test-bg">
            <?php
                if (!empty($patients)) {
                    foreach ($patients as $patient) {
                        echo '
                            <div class="patientList row justify-content-between align-items-center mb-2">
                                <div class="col-6">
                                    <p> <span class="text-secondary">N° patient:  </span><span class="fw-bold">' . $patient["id"] . "</span> </p>" .
                                    '<p> <span class="text-secondary">Nom:  </span><span class="fw-bold">' . $patient["lastname"] . " </span> " .
                                    '<span class="text-secondary">Prénom:  </span><span class="fw-bold">' . $patient["firstname"] . '</span></p>
                                 </div>
                                <div class="col-6">
                                    <form action="./profil-patient.php" method="get">
                                        <input type="hidden" name="idPatient" value="' . $patient["id"] . '" />
                                        <button type="submit" class="rounded-1 py-2 text-white col-2 mx-2">Fiche patient</button>
                                    </form>
                                </div>

                            </div>
                            
                        ';
                    }
                } else {
                    echo 'Il n\'ya actuellement aucun patient enregistré';
                }
            ?>  
        </div>

        <div class="row justify-content-center align-item-center"><!--bouton enregistrer patient-->
            <button class = "rounded-1 py-2 justify-content-center mt-5 col-2">
                <a  class ="link-underline link-underline-opacity-0 text-white" href="./ajout-patient.php">Enregistrer un nouveau patient</a>
            </button>
        </div>
    </div>
    


    <!-- <div class="bg-test">



    </div> -->
</body>

</html>