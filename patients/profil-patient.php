<?php
require_once('../treatment/database_connect.php');

 $idPatient = $_GET["idPatient"];
 

$request = $database->query('SELECT * FROM `patients` WHERE id=' ."$idPatient");

$patient = $request-> fetch();

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>page patient</title>
    <link rel="stylesheet" href="../css/fichePatient.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>



<div class="container mt-5">
        <div class="row text-center mb-3">
            <h3 class= "text-center mb-5">Civilité</h3>
            <p> N° patient: <?php echo  $patient["id"] ?></p>
            <p> Nom: <?php echo  $patient["lastname"] ?></p>
            <p> Prénom: <?php echo  $patient["firstname"] ?></p>
        </div>
        <div class="row text-center">
            <h3 class= "text-center mb-5">Coordonnées</h3>
            <p> Téléphone: <?php echo  $patient["phone"] ?></p>
            <p> E-mail: <?php echo  $patient["mail"] ?></p>
        </div>                     
</div>

<div class="container">
    <h2 class= text-center>Modifications des informations</h2>
    <form action="../treatment/modif-patient.php" method="post">
  
        <label for="lastname">Nom</label>
        <input type="text" id="fname" name="lastname">
        <input type="hidden" name="idPatient" value="<?php $idPatient ?>" />

        <button type="submit" class=" text-white rounded-1 py-2 justify-content-center col-1 mx-2">Submit</button>

    </form>
</div>
                        
    
</body>
</html>