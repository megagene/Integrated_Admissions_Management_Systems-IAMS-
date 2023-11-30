<?php
require "../../../util.php";

session_start();
if (!isset($_SESSION['admin_auth'])) {

    header("location: /IAMS/index.html");
}

include "../../../connection.php";

$insertvalue = 0;
$applicant_id = $_POST['applicant_id'];
$passport = NULL;

if (isset($_POST['accept'])) {
    $insertvalue = 1;
} elseif (isset($_POST['decline'])) {
    $insertvalue = 2;
}
// die("insert values is ". $insertvalue ." and do ". $applicant_id);


$sql = "UPDATE applicants_data SET isadmitted=:isadmitted  WHERE applicant_id=:applicant_id LIMIT 1 ";


try {
    $handler = $connection->prepare($sql);
    $params = [
        ':isadmitted' => $insertvalue,
        ':applicant_id' => $applicant_id



    ];
    $handler->execute($params);

    $sql = 'select isadmitted from applicants_data where applicant_id=:applicant_id';

    $stmt = $connection->prepare($sql);
    $p = [':applicant_id' => $applicant_id];
    $stmt->execute($p);
    if ($results = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {

        $isadmitted = issetnull($results[0], 'isadmitted');

        $sqlpassport = "select passport from applicants_documents where applicants_id=:applicant_id";
        $stmtpassport = $connection->prepare($sqlpassport);
        $pp = [':applicant_id' => $applicant_id];
        $stmtpassport->execute($pp);
        if ($passport_results = $stmtpassport->fetchAll(\PDO::FETCH_ASSOC)) {
           
            $passport = $passport_results[0]['passport'];
        }

        if ($isadmitted == 1) {
            $sql = 'select * from applicants_data where applicant_id=:applcant_id';
           
          
            $stmt = $connection->prepare($sql);
            $p = [':applcant_id' => $applicant_id];
            $stmt->execute($p);

            if ($results = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {

                $result = $results[0];
                //  print_r($result);


                $applicants_data_id = issetnull($result, 'id');
                $firstname = issetnull($result, 'firstname');
                $lastname = issetnull($result, 'lastname');
                $index_number = "040" . str_pad($applicants_data_id, 4, '0', STR_PAD_LEFT);
                $email = $index_number . "@pc.edu.gh";
                $password = $index_number;
                
                $current_level = 100;
                $contact = issetnull($result, 'contact');
                $session = issetnull($result, 'session_p');
                $gender = issetnull($result, 'gender');
                $date = date('Y-m-d H:i:s');

                $stmt = $connection->prepare("INSERT INTO students_table (applicants_data_id, firstname,lastname, email, password ,index_number,passport,current_level,contact,session,gender, created_at, updated_at) 
                VALUES (:applicants_data_id, :firstname, :lastname, :email, :password ,:index_number,:passport,:current_level,:contact,:session,:gender, :created_at, :updated_at)");



                try {

                    $params = [
                        ':applicants_data_id' => $applicants_data_id,
                        ':firstname' => $firstname,
                        ':lastname' => $lastname,
                        ':email' => $email,
                        ':password' =>  password_hash($password, PASSWORD_BCRYPT),
                        ':index_number' => $index_number,
                        ':passport' => $passport,
                        ':current_level' => $current_level,
                        ':contact' => $contact,
                        ':session' => $session,
                        ':gender' => $gender,
                        ':created_at' => $date,
                        ':updated_at' => $date






                    ];
                    $stmt->execute($params);
                } catch (PDOException $e) {
                    $errors = $e->getMessage();
                    echo ($errors);
                }
            }
        }
    }




    $_SESSION["error"] = "action taken";
    header('location: /IAMS/views/forms/admin/applications.php');
} catch (PDOException $e) {
    $errors = $e->getMessage();
    echo ($errors);
}
