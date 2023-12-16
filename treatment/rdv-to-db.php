<?php





 if (
    isset($_POST['idPatient']) && !empty($_POST['idPatient'])
    && isset($_POST['appointmentDate']) && !empty($_POST['appointmentDate']) ){
        var_dump($_POST);
        require_once('./database_connect.php');
        $appointmentDate = $_POST['appointmentDate'];
        $idPatient = $_POST['idPatient'];
     
        
        $requete = $database->prepare("INSERT INTO appointments (dateHour, idPatients ) 
                    VALUES (:dateHour, :idPatients)");

    $result = $requete->execute([
        'dateHour' => $appointmentDate,
        'idPatients' => $idPatient
       
    ]);


    }
    header('Location: ../rdv/liste-rdv.php');
?>