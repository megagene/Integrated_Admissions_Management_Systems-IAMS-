<?php
session_start();
include "../../../connection.php";

if (isset($_POST['submit'])) {
  if (!empty($_POST['username']) && !empty($_POST['password'])) {

    $username = trim(strtolower($_POST['username']));
    $_SESSION['validated_username'] = $username;


    $password = trim($_POST['password']);

    $sql = 'select * from applicants where username = :username';
    $handle = $connection->prepare($sql);
    $param = [
      'username' => $username,

    ];
    $handle->execute($param);
    if ($handle->rowCount() > 0) {
      $getRow = $handle->fetch(PDO::FETCH_ASSOC);
      // echo"<pre>";
      //       var_dump($getRow);
      //       echo"</pre>";

      if (password_verify($password, $getRow['password'])) {
        unset($getRow['password']);


        $_SESSION['auth'] = $getRow;

        header('location: /IAMS/views/forms/applicants/applicant_dashboard_form.php?content=personal');
        exit();
      } else {
        $errors = array("type" => "wrong password");
        $_SESSION['passworderror'] = $errors['type'];
        header("location: /IAMS/views/forms/applicants/applicant-login-form.php ");
      }
    } else {

      $errors = array("type" => "wrong user name");

      $_SESSION['usernameerror'] = $errors['type'];
      header("location: /IAMS/views/forms/applicants/applicant-login-form.php ");
    }
  } else {
    $errors = array("type" => "Email and password are required");

    $_SESSION['required'] = $errors['type'];
    var_dump($_SESSION['required']);
  }
} else {
  header("location: /IAMS/index.html");
}
