<?php


require_once "../../../connection.php";





$sql = 'select iscompleted from applicants_data where applicant_id = :applicant_id';
$stmt = $connection->prepare($sql);
$p = [':applicant_id' => $_SESSION['auth']['id']];
$stmt->execute($p);
if ($results = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {
    $iscompleted = $results[0]['iscompleted'];
    if ($iscompleted == 1) :
        if ($_GET['content'] != "completed") header("Location: /IAMS/views/forms/applicants/applicant_dashboard_form.php?content=completed");

    endif;
}
       


    // die($iscompleted);
