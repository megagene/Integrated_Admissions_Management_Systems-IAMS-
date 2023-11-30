<?php
session_start();


                        if (isset($_SESSION['admin_auth'])) {

                            header("location: /IAMS/views/forms/admin/index.php");
                        }


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="../../../fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="../../../css/style.css">
</head>

<body>

    <div class="limiter">
        <div class="main main-bg-image" style="background-image: url('../../../images/pc-aerial-view.jpg');">

            <!--Sign in form -->
            <section class="sign-in">
                <div class="container">
                    <div class="signin-content">
                        <div class="signin-image">
                            <figure><img src="../../../images/pclogo.jpg" alt="pclogo"></figure>
                        </div>

                        <div class="signin-form">
                            <h2 class="form-title">Admin Login</h2>
                            <form method="POST" class="register-form" id="login-form" action="../../models/admin/admin-login.php">
                                <div class="form-group">
                                    <label for="email"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="email" name="email" id="email" placeholder="Email" value="
                                    <?php isset($_SESSION['validated_admin_email']) ? print($_SESSION['validated_admin_email']) : NULL;
                                    unset($_SESSION['validated_admin_email']);  ?>
                                    
                                    " required />
                                    <div style=" color:#f12; margin: 0 15px;
                     <?php
                        isset($_SESSION['admin_email_error']) ? print('display:block') : print('display:none');
                        unset($_SESSION['admin_email_error']);

                        ?>
                     ">
                                        email not found

                                    </div>

                                </div>


                                <div class="form-group">
                                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password" id="password" placeholder="Password" required />

                                    <div style=" color:#f12; margin: 0 15px;
                     <?php
                        isset($_SESSION['admin_passworderror']) ? print('display:block') : print('display:none');
                        unset($_SESSION['admin_passworderror']);

                        ?>
                     ">
                                        invalid password

                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                    <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember
                                        me</label>
                                </div>
                                <a href="#" class="txt2 bo1 m-l-5">
                                    Forgot password?
                                </a>
                                <div class="form-group form-button">
                                    <input type="submit" name="submit" id="submit" class="form-submit" value="Login" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

        </div>
    </div>
    <!-- JS -->
    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../js/main.js"></script>
</body>

</html>