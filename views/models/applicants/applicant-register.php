<?php

session_start();
require_once "../../../connection.php";


if (isset($_POST['submit'])) {

  if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['password_confirm'])) {
    $sql = 'select * from applicants where username = :username';
    $stmt = $connection->prepare($sql);
    $p = ['username' => trim($_POST['username'])];
    $stmt->execute($p);

    if ($stmt->rowCount() > 0) {

      $_SESSION['user_exist'] = $_POST['username'];

      header("location: /IAMS/views/forms/applicants/applicant-register-form.php");
    } elseif (trim($_POST['password']) == trim($_POST['password_confirm'])) {

      $username = trim(strtolower($_POST['username']));
      $password = trim($_POST['password']);

      $date = date('Y-m-d H:i:s');

      $stmt = $connection->prepare("INSERT INTO applicants (username, password, created_at, updated_at) VALUES ( :username, :password, :created_at, :updated_at)");

      $stmt->bindValue(":username", $username,);
      $stmt->bindValue(":password", password_hash($password, PASSWORD_BCRYPT));
      $stmt->bindValue(":created_at", $date);
      $stmt->bindValue(":updated_at", $date);

      $stmt->execute();

      header('location: /IAMS/views/forms/applicants/applicant-login-form.php');
    } else {
      die('passwords donot match');
    }
  } else {
    die('all fields are required');
  }
} else {


  header("Location: /IAMS/index.html");
  exit();
}
