<?php


require_once('./database_connect.php');


$idPatient = $_POST["idPatient"];
var_dump($idPatient);

    $requete = $database->prepare("DELETE  FROM `patients` WHERE id= :id");

    $result = $requete->execute([
        'id' => $idPatient
            ]);
header('Location: ../patients/liste-patients.php');



