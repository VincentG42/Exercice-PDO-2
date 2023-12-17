<?php


require_once('./database_connect.php');
var_dump($_POST);

$rdvAsuppr= $_POST["idPatient"];
var_dump($rdvAsuppr);

    $requete = $database->prepare("DELETE  FROM `appointments` WHERE id= :id");

    $result = $requete->execute([
        'id' => $rdvAsuppr
            ]);
header('Location: ../rdv/liste-rdv.php');
