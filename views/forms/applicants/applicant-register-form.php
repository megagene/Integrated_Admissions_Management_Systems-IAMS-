<?php

session_start();
if (isset($_SESSION['auth'])) {
    $_SESSION["error"] = "needs to log out first";
    header("location: applicant_dashboard_form.php?content=personal");
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Applicants sing up</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <link rel="stylesheet" type="text/css" href="../../../css/util.css">
    <link rel="stylesheet" type="text/css" href="../../../css/main.css">
    <!--===============================================================================================-->
</head>

<body class="min-vh-100" style="background-color: #666666;">

    <div class=" h-100 ">
        <div class="h-100">
            <div class="wrap-login100">
                <form class="login100-form py-4 validate-form" method="POST" action="../../models/applicants/applicant-register.php">
                    <span class="login100-form-title p-b-43">
                        APPLICANT SIGN UP
                    </span>


                    <div class="wrap-input100 validate-input" data-validate="Valid username is required">
                        <input class="input100" type="text" name="username" value="<?php isset($_SESSION['user_exist']) ? print($_SESSION['user_exist']) : NULL;
                                                                                    ?>">
                        <span class="focus-input100"></span>

                        <?php isset($_SESSION['user_exist']) ? NULL : print("<span class='label-input100'>username</span>");
                        ?>

                    </div>
                    <span class="text-danger m-l-5 w-100 font-weight-light h-6 small font-italic d-none
                        <?php isset($_SESSION['user_exist']) ? print('d-block') : NULL;
                        unset($_SESSION['user_exist']);
                        ?>
                       
                       ">
                        username already exist

                    </span>


                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <input class="input100" type="password" id="password" name="password">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password</span>

                    </div>
                    <span class="text-danger m-l-10 d-none   text-center h-6 small  w-100 font-weight-light" id="password_validate">

                        passwords donot match

                    </span>
                    <div class="wrap-input100 validate-input" data-validate="Password confirm is required">
                        <input class="input100" type="password" name="password_confirm" id="password_confirm">
                        <span class="focus-input100"></span>
                        <span class="label-input100">Password confirm</span>
                    </div>

                    <div class="flex-sb-m w-full p-t-3 p-b-32">
                        <div class="contact100-form-checkbox">
                            <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
                            <label class="label-checkbox100" for="ckb1">
                                Remember me
                            </label>
                        </div>

                        <div>
                            <a href="#" class="txt1">
                                Forgot Password?
                            </a>
                        </div>
                    </div>
                    <div class="text-danger h-6 small m-t-5 text-right w-100 font-weight-light  ">
                        All fields are important *

                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn" type="submit" name="submit">
                            signup
                        </button>
                    </div>

                    <div class="text-center p-t-46 p-b-20">
                        <span class="txt2">
                            <a href="applicant-login-form.php" class="txt2 bo1">
                                Sign in now
                            </a>
                        </span>
                    </div>




                </form>




                <div class="login100-more" style="background-image: url('../../../images/bg-01.jpg');">
                </div>
            </div>
        </div>
    </div>





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
    <script src="../../../assets/js/app_forms.js"></script>



</body>

</html>