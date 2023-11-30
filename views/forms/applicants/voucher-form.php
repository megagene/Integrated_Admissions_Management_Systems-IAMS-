<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="../images/pclogo.jpg" type="image/x-icon">
    <link rel="shortcut icon" href="../images/pclogo.jpg" type="image/x-icon">
    <title>Voucher</title>

    <!--===============================================================================================-->
    <link rel="icon" type="image/png" href="images/icons/favicon.ico" />
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../vendor/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../vendor/animate/animate.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../vendor/css-hamburgers/hamburgers.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../vendor/animsition/css/animsition.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../vendor/select2/select2.min.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../vendor/daterangepicker/daterangepicker.css">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="../../../css/main_voucher.css">
    <link rel="stylesheet" type="text/css" href="../../../css/util_voucher.css">
</head>


<body>

    <div class="limiter w-100 ">
        <div class="container-login100 w-100  " style="background-image: url('../../../images/bg-01.jpg');">
            <div class="wrap-login100 w-100 p-t-30 p-b-50 col-xs-12 col-sm-12 col-md-8 ">

                <form class="login100-form validate-form p-b-33 p-t-5  w-100 " method="post" action="../../models/applicants/voucher.php">
                    <span class="login100-form-title p-t-21 p-b-21 ">
                        VOUCHER
                    </span>
                    <div style=" color: red; width:100%; text-align:center; filter:opacity(0.7); 
                          <?php
                            isset($_SESSION['validate_voucher']) ? print('display: block; ') : print('display:none;');
                            unset($_SESSION['validate_voucher']);

                            ?> 
        
                     ">

                        invalid serialcode or pincode

                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Serial Code">
                        <input class="input100" type="text" name="serialcode" placeholder="Enter Serial Code">
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Enter Pin Code">
                        <input class="input100" type="text" name="pincode" placeholder="Enter Pin Code">
                        <span class="focus-input100" data-placeholder=""></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32">
                        <button class="login100-form-btn " type="submit" name="submit">
                            CHECK
                        </button>
                    </div>

                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>

    <!--===============================================================================================-->
    <script src="../../../vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
    <script src="../../../vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
    <script src="../../../vendor/bootstrap/js/popper.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    <script src="../../../vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
    <script src="../../../vendor/daterangepicker/moment.min.js"></script>
    <script src="../../../vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
    <script src="../../../vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->
    <script src="../../../assets/js/voucher.js"></script>

</body>

</html>