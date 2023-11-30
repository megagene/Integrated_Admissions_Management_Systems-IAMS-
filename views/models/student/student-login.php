<?php
session_start();
include "../../../connection.php";

if (isset($_POST['submit'])) {
  if (!empty($_POST['email']) && !empty($_POST['password'])) {

    $email = trim(strtolower($_POST['email']));
    $_SESSION['validated_email'] = $email;


    $password = trim($_POST['password']);

    $sql = 'select * from students_table where email = :email';
    $handle = $connection->prepare($sql);
    $param = [
      ':email' => $email,

    ];
    $handle->execute($param);
    if ($handle->rowCount() > 0) {
      $getRow = $handle->fetch(PDO::FETCH_ASSOC);
      // echo"<pre>";
      //       var_dump($getRow);
      //       echo"</pre>";

      if (password_verify($password, $getRow['password'])) {
        unset($getRow['password']);


        $_SESSION['auth_student'] = $getRow;

        header('location: /IAMS/views/forms/student/sip.php');
        exit();
      } else {
        $errors = array("type" => "wrong password");
        $_SESSION['passworderror'] = $errors['type'];
        header("location:/IAMS/views/forms/student/student-login-form.php");
      }
    } else {

      $errors = array("type" => "wrong user name");

      $_SESSION['emailerror'] = $errors['type'];
      header("location:/IAMS/views/forms/student/student-login-form.php ");
    }
  } else {
    $errors = array("type" => "Email and password are required");

    $_SESSION['required'] = $errors['type'];
    var_dump($_SESSION['required']);
  }
} else {
  header("location:  /IAMS/index.html");
}
