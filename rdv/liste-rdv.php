<?php
require_once('../treatment/database_connect.php');


//requete liste patients
$request = $database->query('SELECT * FROM `appointments`');

$rdvs = $request->fetchAll();
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
   
    <div class="container py-5">
        <div class="row justify-content-end me-5">
            <button a class="rounded-1 py-2 justify-content-center mt-5 col-2 mx-2 ">
                    <a class ="link-underline link-underline-opacity-0 text-white" href="../index.php">Accueil</a>
            </button>
        </div>
        <h2 class ="text-center mb-4">Liste des rendez-vous:</h2>

        <div class="">
            <?php
                if (!empty($rdvs)) {
                    foreach ($rdvs as $rdv) { ?>
                        
                            <div class="patientList row justify-content-between align-items-center mb-2">
                                <div class="col-6 d-flex">
                                    <p class="mb-0 col-2"> <span class="text-secondary"> N° rendez-vous:  </span><span class="fw-bold"> <?php echo  $rdv["id"] ?> </span> </p>
                                    <p class="col-3"> <span class="text-secondary"> N° patient:  </span><span class="fw-bold"><?php echo $rdv["idPatients"] ?> </span></p>
                                    <p class="col-3"><span class="text-secondary"> Date rendez-vous: </span><span class="fw-bold"><?php echo $rdv["dateHour"] ?> </span></p>
                                 </div>
                                <div class="col-6">
                                    <form action="./rendezvous.php" method="get"><!--page details rdv-->
                                        <input type="hidden" name="idRDV" value="<?php echo $rdv["id"]?>" />
                                        <button type="submit" class="rounded-1 py-2 text-white col-3 mx-2 mb-2">Details rendez-vous</button>
                                    </form>
                                </div>

                            </div>
                            
                    <?php }
                } else {
                    echo 'Il n\'ya actuellement aucun rendez-vous enregistré';
                }
            ?>  
        </div>

        <div class="row justify-content-center align-item-center"><!--bouton enregistrer rdv-->
            <button class = "rounded-1 py-2 justify-content-center mt-5 col-3">
                <a  class ="link-underline link-underline-opacity-0 text-white" href="./ajout-rendezvous.php">Enregistrer un nouveau rendez_vous</a>
            </button>   
        </div>
        

    </div>
    



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>