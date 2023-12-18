<?php

// modification rdv
if (
    isset($_POST['idPatient']) && !empty($_POST['idPatient'])
    && isset($_POST['appointmentDate']) && !empty($_POST['appointmentDate']) ){

      var_dump($_POST);

      require_once('./database_connect.php');

        $idrdv =$_POST['idRDV'];
        $appointmentDate = $_POST['appointmentDate'];
        $idPatient = $_POST['idPatient'];

        $requete = $database->prepare("UPDATE appointments 
                                        SET dateHour = :dateHour, idPatients = :idPatients 
                                        WHERE appointments.id = :id");


        $result = $requete->execute([
            'id' => $idrdv,
            'dateHour' => $appointmentDate,
            'idPatients' => $idPatient

        ]);

}


header('Location: ../patients/liste-patients.php');