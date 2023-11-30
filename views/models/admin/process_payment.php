<?php
require "../../../util.php";

session_start();
if (!isset($_SESSION['admin_auth'])) {

    header("location: /IAMS/index.html");
}

include "../../../connection.php";

$insertvalue = 0;
$transaction_id = $_POST['transaction_id'];


if (isset($_POST['accept'])) {
    $insertvalue = 1;
} elseif (isset($_POST['decline'])) {
    $insertvalue = 2;
}
// die("insert values is " . $insertvalue . " and transaction id is " . $transaction_id);


$sql = "UPDATE fee_payment_list SET payment_accepted=:payment_accepted  WHERE transaction_id=:transaction_id LIMIT 1 ";


try {
    $handler = $connection->prepare($sql);
    $params = [
        ':payment_accepted' => $insertvalue,
        ':transaction_id' => $transaction_id



    ];
    $handler->execute($params);
    $_SESSION["error"] = "action taken";
    header('location: /IAMS/views/forms/admin/payments.php');
} catch (PDOException $e) {
    $errors = $e->getMessage();
    echo ($errors);
}
