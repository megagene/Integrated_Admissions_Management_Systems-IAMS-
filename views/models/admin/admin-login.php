<?php
include "../../../connection.php";

session_start();



if (isset($_POST['submit'])) {
 
  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $email =trim(strtolower($_POST['email']));

    $password = $_POST['password'];
   

    
    $_SESSION['validated_admin_email'] = $email;


    $password = trim($_POST['password']);

    $sql = 'select * from admin where email = :email';
    $handle = $connection->prepare($sql);
    $param = [
      'email' => $email,

    ];
    $handle->execute($param);
    if ($handle->rowCount() > 0) {
      // die('email verified');
      $getRow = $handle->fetch(PDO::FETCH_ASSOC);
        $get_password =  $getRow['password'];
  

      if ($password == $get_password) {
        
       

        $_SESSION['admin_auth'] = $getRow;


        header('location: /IAMS/views/forms/admin/applications.php');
        exit();
      } else {
        $errors = array("type" => "wrong password");
        $_SESSION['admin_passworderror'] = $errors['type'];
        header("location: /IAMS/views/forms/admin/admin-login-form.php ");
      }
    } else {
     

      $errors = array("type" => "wrong email");

      $_SESSION['admin_email_error'] = $errors['type'];
      header("location:/IAMS/views/forms/admin/admin-login-form.php ");
    }
  } else {
    $errors = array("type" => "Email and password are required");

    $_SESSION['admin_required'] = $errors['type'];
    var_dump($_SESSION['admin_required']);
  }
} else {
  header("location: /IAMS/views/forms/admin/admin-login-form.php");
}
