<?php

require_once('./database_connect.php');


if (
    isset($_POST['lastname']) && !empty($_POST['lastname'])
    

) {
    $lastname = $_POST['lastname'];
    $idpatient =$_POST['idPatient'];

    var_dump($lastname, $idpatient);
    



    // $requete = $database->prepare("INSERT INTO patients (lastname) 
    //                 VALUES (:lastname,:firstname,:birthdate,:phone,:email)");

    // $result = $requete->execute([
    //     'lastname' => $lastname,
    //     'firstname' => $firstname,
    //     'birthdate' => $birthdate,
    //     'phone' => $phone,
    //     'email' => $email
    // ]);

}

// header('Location: ../index.php');