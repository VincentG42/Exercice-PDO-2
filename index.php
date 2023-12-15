<?php
require_once('./treatment/database_connect.php');

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index hospital</title>
    <link rel="stylesheet" href="./css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid g-0">
        <div class="row"></div>
            <h1 class="text-center titreIndex py-5">Bienvenue chez Hospital2n</h1>
        <div class="row justify-content-center">
            <button class="rounded-1 py-2  mt-5 col-2  mx-2">
                <a class ="link-underline link-underline-opacity-0 text-white" href="./patients/liste-patients.php">Liste des patients</a>
            </button>
            <button class="rounded-1 py-2 justify-content-center mt-5 col-2 mx-2 ">
                <a  class ="link-underline link-underline-opacity-0 text-white" href="./patients/ajout-patient.php">Enregistrer un nouveau patient</a>
            </button>
        </div>  
 
        
    </div>




</body>
</html>