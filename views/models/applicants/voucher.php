<?php
session_start();
include "../../../connection.php";


if (isset($_POST['submit'])) {
  $serial = $_POST['serialcode'];
  $pincode = $_POST['pincode'];


  $sql = 'select * from voucher where serialcode =:serialcode and  pincode =:pincode';
  $handle = $connection->prepare($sql);
  $params = [
    'serialcode' => $serial,
    'pincode' => $pincode


  ];
  $handle->execute($params);
  if ($handle->rowCount() > 0) {
    $getRow = $handle->fetch(PDO::FETCH_ASSOC);


    header("Location: /IAMS/views/forms/applicants/applicant-register-form.php");
    exit();
  } else {


    $_SESSION['validate_voucher'] = "invalid serialcode or pincode";

    header("Location: /IAMS/views/forms/applicants/voucher-form.php");
    exit();
  }
}
