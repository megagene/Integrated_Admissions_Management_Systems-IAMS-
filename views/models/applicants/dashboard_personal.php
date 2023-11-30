<?php
session_start();
// die(__FILE__);
require_once "../../../connection.php";
// include "dashboard_completed.php";
if (isset($_POST['submit'])) {


    $firstname = trim($_POST['firstname']);
    $salutation = trim($_POST['salutation']);

    $lastname = trim($_POST['lastname']);
    $dob = trim($_POST['dob']);
    $gender = trim($_POST['gender']);
    $martial_status = trim($_POST['marital']);
    $home_region = trim($_POST['homeregion']);
    $street = trim($_POST['street']);
    $residential_address = trim($_POST['address']);
    $postal_address = trim($_POST['postal']);
    $city = trim($_POST['city']);
    $country = trim($_POST['country']);
    $religion = trim($_POST['religion']);
    $occupation = trim($_POST['occupation']);
    $challenged = trim($_POST['challenged']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $application_mode = trim($_POST['appmode']);

    $sql = 'select * from applicants_data where applicant_id = :applicant_id';
    $stmt = $connection->prepare($sql);
    $p = [':applicant_id' => $_SESSION['auth']['id']];
    $stmt->execute($p);


    if ($stmt->rowCount() == 0) {

        $sql = "INSERT INTO applicants_data ( salutation,firstname, lastname, dateofbirth,gender,
     martialstatus,homeregion,street,
     residentialaddr,postaddr,city,country,religion,occupation,disability,contact,email,application,applicant_id)
    VALUES ( :salutation,:firstname,:lastname,:dateofbirth,:gender,:martialstatus,:homeregion,
    :street,:residentialaddr,:postaddr,:city,:country,:religion,:occupation,
        :disability,:contact,:email,:application ,:applicant_id)";


        try {
            $handler = $connection->prepare($sql);
            $params = [
                ':salutation' => $salutation,
                ':firstname' => $firstname,
                ':lastname' => $lastname,
                ':dateofbirth' => $dob,
                ':gender'=>$gender,
                ':martialstatus' => $martial_status,
                ':homeregion' => $home_region,
                ':street' => $street,
                ':residentialaddr' => $residential_address,
                ':postaddr' => $postal_address,
                ':city' => $city,
                ':country' => $country,
                ':religion' => $religion,
                ':occupation' => $occupation,
                ':disability' => $challenged,
                ':contact' => $phone,
                ':email' => $email,
                ':application' => $application_mode,
                ':applicant_id' => $_SESSION['auth']['id'],

            ];
            $handler->execute($params);
            header('location: /IAMS/views/forms/applicants/applicant_dashboard_form.php?content=guardian');
        } catch (PDOException $e) {
            $errors = $e->getMessage();
            echo ($errors);
        }
    } else {



        $sql = "UPDATE applicants_data SET salutation=:salutation, firstname=:firstname, lastname=:lastname, 
        dateofbirth=:dateofbirth,gender=:gender, martialstatus=:martialstatus, homeregion=:homeregion,
     street=:street, residentialaddr=:residentialaddr, postaddr=:postaddr, city=:city, country=:country, religion=:religion,
     occupation=:occupation, disability=:disability, contact=:contact, email=:email, application=:application
    WHERE applicant_id=:applicant_id LIMIT 1 ";
        try {
            $handler = $connection->prepare($sql);
            $params = [
                ':salutation' => $salutation,
                ':firstname' => $firstname,
                ':lastname' => $lastname,
                ':dateofbirth' => $dob,
                ':gender'=>$gender,
                ':martialstatus' => $martial_status,
                ':homeregion' => $home_region,
                ':street' => $street,
                ':residentialaddr' => $residential_address,
                ':postaddr' => $postal_address,
                ':city' => $city,
                ':country' => $country,
                ':religion' => $religion,
                ':occupation' => $occupation,
                ':disability' => $challenged,
                ':contact' => $phone,
                ':email' => $email,
                ':application' => $application_mode,
                ':applicant_id' => $_SESSION['auth']['id'],

            ];
            $handler->execute($params);
            header('location: /IAMS/views/forms/applicants/applicant_dashboard_form.php?content=guardian');
        } catch (PDOException $e) {
            $errors = $e->getMessage();
            echo ($errors);
        }
    }



    //    print($dob);
    //    print(preg_replace('/', '-', $dob));












}
