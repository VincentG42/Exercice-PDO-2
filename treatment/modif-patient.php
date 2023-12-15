<?php

require_once('./database_connect.php');



// modification donnees patient
if (
    isset($_POST['lastname']) && !empty($_POST['lastname'])
    && isset($_POST['firstname']) && !empty($_POST['firstname'])
    && isset($_POST['birthdate']) && !empty($_POST['birthdate'])
    && isset($_POST['phone']) && !empty($_POST['phone'])
    && isset($_POST['mail']) && !empty($_POST['mail'])

    

){
    $idpatient =$_POST['idPatient'];
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $birthdate = $_POST['birthdate'];
    $phone = $_POST['phone'];
    $mail = $_POST['mail'];

    $requete = $database->prepare("UPDATE patients 
                                        SET lastname = :lastname, 
                                            firstname = :firstname, 
                                            birthdate = :birthdate,
                                            phone = :phone,
                                            mail = :mail

                                        WHERE id= :id");

    $result = $requete->execute([
        'id' => $idpatient,
        'lastname' => $lastname,
        'firstname' => $firstname,
        'birthdate' => $birthdate,
        'phone' => $phone,
        'mail' => $mail


    ]);

}


header('Location: ../patients/profil-patient.php?idPatient='.$idpatient);