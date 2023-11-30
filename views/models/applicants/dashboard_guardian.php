<?php
session_start();
require_once "../../../connection.php";

if (isset($_POST['submit'])) {



    $firstname_g = trim($_POST['gfirstname']);
    $salutation_g = trim($_POST['salutation_g']);
    $lastname_g = trim($_POST['glastname']);
    $relation_g =  trim($_POST['relation']);
    $Address_g =  trim($_POST['gaddress']);
    $occupation_g = trim($_POST['goccupation']);
    $contact_g = trim($_POST['gphone']);
    $email_g = trim($_POST['gemail']);


    $sql = "UPDATE applicants_data SET salutation_g=:salutation_g ,firstname_g=:firstname_g, lastname_g=:lastname_g, 
    relation_g=:relation_g, Address_g=:Address_g, occupation_g=:occupation_g,
     contact_g=:contact_g, email_g=:email_g WHERE applicant_id=:applicant_id LIMIT 1 ";


    try {
        $handler = $connection->prepare($sql);
        $params = [
            ':salutation_g' => $salutation_g,
            ':firstname_g' => $firstname_g,
            ':lastname_g' => $lastname_g,
            ':relation_g' => $relation_g,
            ':Address_g' => $Address_g,
            ':occupation_g' => $occupation_g,
            ':contact_g' => $contact_g,
            ':email_g' => $email_g,
            ':applicant_id' => $_SESSION['auth']['id']


        ];


        $handler->execute($params);

        header('location: /IAMS/views/forms/applicants/applicant_dashboard_form.php?content=exams');
    } catch (PDOException $e) {
        $errors = $e->getMessage();
        echo ($errors);
    }
}
