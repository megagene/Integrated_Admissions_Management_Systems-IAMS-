<?php
session_start();
if(isset($_SESSION['admin_auth'])){
    unset($_SESSION['admin_auth']);
    header('location:  /IAMS/index.html');
    exit();
}
