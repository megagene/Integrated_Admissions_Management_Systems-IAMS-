<?php
require_once "../../../connection.php";




$sql = 'select * from applicants_data where applicant_id = :applicant_id';
$stmt = $connection->prepare($sql);
$p = [':applicant_id' => $_SESSION['auth']['id']];
$stmt->execute($p);

if ($results = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {

  unset($results[0]['id']);
  


}
