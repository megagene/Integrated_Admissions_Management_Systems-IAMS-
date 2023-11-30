<?php

require_once "../../../connection.php";
require "../../../vendor/autoload.php";

use Intervention\Image\ImageManager;

include('../../models/applicants/dashboard_upload_model.php');



if (isset($_POST['submit'])) {

    $passport = image_Upload();
    $transcript =  Document_upload('transcript');
    $other_docs =  Document_upload('otherdocs');

    if (isset($_SESSION['error'])) {
        header('location: /IAMS/views/forms/applicants/applicant_dashboard_form.php?content=documents');
    } else {
        $sql = 'select * from applicants_documents where applicants_id = :applicants_id';
        $stmt = $connection->prepare($sql);
        $p = [':applicants_id' => $_SESSION['auth']['id']];
        $stmt->execute($p);


        if ($stmt->rowCount() == 0) {
            $sql = "INSERT INTO applicants_documents(applicants_id,passport,transcript,other_documents)
        VALUES (:applicants_id,:passport,:transcript ,:other_documents)";



            try {
                $handler = $connection->prepare($sql);
                $params = [
                    ':applicants_id' => $_SESSION['auth']['id'],
                    ':passport' => $passport,
                    ':transcript' => $transcript,
                    ':other_documents' => $other_docs,

                ];
                $handler->execute($params);
                header('location: /IAMS/views/forms/applicants/applicant_dashboard_form.php?content=declaration');
            } catch (PDOException $e) {
                $errors = $e->getMessage();
                echo ($errors);
            }
        } else {
            $sql = "UPDATE  applicants_documents SET passport=:passport,transcript=:transcript,other_documents=:other_documents
           WHERE  applicants_id=:applicants_id ";
            //    will be doing this later
            //  $path = '/';

            //             if (!file_exists($path.$file_name)) 
            //                         {                   
            //                 if (mkdir( $path,0777,false )) {

            //                     }

            //                 } else 
            //                 {

            //   unlink($path.$file_name);
            // }


            try {
                $handler = $connection->prepare($sql);
                $params = [
                    ':applicants_id' => $_SESSION['auth']['id'],
                    ':passport' => $passport,
                    ':transcript' => $transcript,
                    ':other_documents' => $other_docs,

                ];
                $handler->execute($params);
                header('location: /IAMS/views/forms/applicants/applicant_dashboard_form.php?content=declaration');
            } catch (PDOException $e) {
                $errors = $e->getMessage();
                echo ($errors);
            }
        }
    }
}
