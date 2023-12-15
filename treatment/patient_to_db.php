<?php




if (
    isset($_POST['lastname']) && !empty($_POST['lastname'])
    && isset($_POST['firstname']) && !empty($_POST['firstname'])
    && isset($_POST['birthdate']) && !empty($_POST['birthdate'])
    && isset($_POST['phone']) && !empty($_POST['phone'])
    && isset($_POST['email']) && !empty($_POST['email'])

) {
    $lastname = $_POST['lastname'];
    $firstname = $_POST['firstname'];
    $birthdate = $_POST['birthdate'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];

    require_once('./database_connect.php');

    $requete = $database->prepare("INSERT INTO patients (lastname, firstname, birthdate, phone, mail) 
                    VALUES (:lastname,:firstname,:birthdate,:phone,:email)");

    $result = $requete->execute([
        'lastname' => $lastname,
        'firstname' => $firstname,
        'birthdate' => $birthdate,
        'phone' => $phone,
        'email' => $email
    ]);

}

header('Location: ../patients/liste-patients.php');
?>
