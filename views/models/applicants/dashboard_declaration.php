<?php
session_start();

require_once "../../../connection.php";

if (isset($_POST['submit'])) {

    $iscompleted = 1;


    $sql = "UPDATE applicants_data SET iscompleted=:iscompleted WHERE applicant_id=:applicant_id LIMIT 1 ";

    try {
        $handler = $connection->prepare($sql);
        $params = [
            ':iscompleted' => $iscompleted,

            ':applicant_id' => $_SESSION['auth']['id']


        ];


        $handler->execute($params);
        header('location: /IAMS/views/forms/applicants/applicant_dashboard_form.php?content=completed');
    } catch (PDOException $e) {
        $errors = $e->getMessage();

        echo ($errors);
    }
}
