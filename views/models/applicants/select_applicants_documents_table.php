<?php
require_once "../../../connection.php";






$sql = 'select * from applicants_documents where applicants_id = :applicants_id';
$stmt = $connection->prepare($sql);
$p = [':applicants_id' => $_SESSION['auth']['id']];
$stmt->execute($p);

if ($results = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {
  unset($results[0]['id']);
  //  print_r($results[0]);

}
