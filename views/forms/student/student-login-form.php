<?php
session_start();

if (isset($_SESSION['auth_student'])) {

    header("location: /IAMS/views/forms/student/sip.php");
}


?>
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student Login</title>

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

                        <div class="signin- ">
                            <h2 class="form-title">Student Login</h2>
                            <form method="POST" class="register-form" id="login-form" method="post" action="../../models/student/student-login.php">
                                <div class="form-group">
                                    <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                    <input type="text" name="email" id="email" placeholder="Email" value="<?php isset($_SESSION['validated_email']) ? print($_SESSION['validated_email']) : NULL;
                                                                                                            unset($_SESSION['validated_email']);  ?>" />
                                </div>
                                <div style=" color:#f12; margin: 0 15px;
                     <?php
                        isset($_SESSION['emailerror']) ? print('display:block') : print('display:none');
                        unset($_SESSION['emailerror']);

                        ?>
                     ">
                                    email not found

                                </div>
                                <div class="form-group">
                                    <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                    <input type="password" name="password" id="password" placeholder="Password" />
                                </div>

                                <div style=" color:#f12; margin: 0 15px;
                     <?php
                        isset($_SESSION['passworderror']) ? print('display:block') : print('display:none');
                        unset($_SESSION['passworderror']);

                        ?>
                     ">
                                    invalid password

                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                    <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                                </div>
                                <a href="#" class="txt2 bo1 m-l-5">
                                    Forgot password?
                                </a>
                                <div class="form-group form-button">
                                    <input type="submit" name="submit" id="submit" class="form-submit" value="Log in" />
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