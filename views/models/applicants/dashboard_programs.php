<?php
session_start();
require_once "../../../connection.php";
if (isset($_POST['submit'])) {

  $firstchoice = trim($_POST['firstchoice']);
  $secondchoice = trim($_POST['secondchoice']);
  $thirdchoice =  trim($_POST['thirdchoice']);
  $campus =  $_POST['campus'];
  $intake = $_POST['intake'];
  $session = $_POST['session'];
  $session = $_POST['session'];

  $sql = "UPDATE applicants_data SET firstchoice_p=:firstchoice_p, secondchoice_p=:secondchoice_p, 
    thirdchoice_p=:thirdchoice_p, campus_p=:campus_p, intake_p=:intake_p,
     session_p=:session_p  WHERE applicant_id=:applicant_id LIMIT 1 ";
  try {
    $handler = $connection->prepare($sql);
    $params = [
      ':firstchoice_p' => $firstchoice,
      ':secondchoice_p' => $secondchoice,
      ':thirdchoice_p' => $thirdchoice,
      ':campus_p' => $campus,
      ':intake_p' => $intake,
      ':session_p' => $session,
      ':applicant_id' => $_SESSION['auth']['id']


    ];


    $handler->execute($params);

    header('location: /IAMS/views/forms/applicants/applicant_dashboard_form.php?content=documents');
  } catch (PDOException $e) {
    $errors = $e->getMessage();
    echo ($errors);
  }
}
