<?php
session_start();
if(isset($_SESSION['auth_student'])){
    unset($_SESSION['auth_student']);
    header('location:  /IAMS/index.html');
    exit();
}
