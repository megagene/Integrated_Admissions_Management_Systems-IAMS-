<?php
session_start();

require_once '../../../views/models/applicants/dashboard_completed.php';


$_SESSION['curr_index'] = 0;
if (!isset($_SESSION['auth'])) {

  header("location: /IAMS/index.html");
}


include('../../../views/models/applicants/dashbord_currindex.php');







?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../images/pclogo.jpg" type="image/x-icon">
  <link rel="shortcut icon" href="../images/pclogo.jpg" type="image/x-icon">
  <title>Start New Application </title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="../../../assets/css/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="../../../assets/css/icofont.css">

  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="../../../assets/css/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="../../../assets/css/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="../../../assets/css/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="../../../assets/css/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="../../../assets/css/date-picker.css">
  <!-- Plugins css Ends-->
  <link rel="stylesheet" type="text/css" href="../../../assets/css/sweetalert2.css">
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="../../../assets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
  <link id="color" rel="stylesheet" href="../../../assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="../../../assets/css/responsive.css">

  <style>
    div.customizer-links {
      display: none;
    }

    .auth_banner {

      inset: auto 40%;
      top: 10px;

    }

    .ntopoffset {
      inset: auto 40%;
      top: -100%;
      transition: top 2s ease-in-out
    }

    .modal-body li {
      list-style-type: none;
      line-height: 15px;
      margin: 5px 5px;
      /* border: 1px solid black; */
      padding: 10px 45px;
      display: flex;
      justify-content: space-around;
      font-weight: 500;

    }
  </style>


</head>

<body>
  <?php
  include "admission_status_modal.php";
  ?>


  <!-- error banner-->
  <div id="auth_banner" class=" alert rounded-pill alert-secondary position-fixed  text-center
       <?php isset($_SESSION["error"]) ? print('auth_banner') : print('ntopoffset'); ?>
       " style="z-index:10;   " role="alert">
    <?php isset($_SESSION['auth']) ? print($_SESSION['auth']['username'] . " " . $_SESSION["error"]) : print('username');
    unset($_SESSION["error"]);
    ?>
  </div>
  <!-- tap on top starts-->
  <div class="tap-top"><i data-feather="chevrons-up"></i></div>
  <!-- tap on tap ends-->
  <!-- page-wrapper Start-->
  <div class="page-wrapper compact-wrapper" id="pageWrapper">
    <!-- Page Header Start-->

    <div class="page-header">

      <div class="header-wrapper row m-0">
        <div class="header-logo-wrapper col-auto p-0">
          <div class="logo-wrapper"><a href="../../../index.html">




              <img class="img-fluid" src="" alt=""></a></div>
          <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
        </div>
        <div class="left-header col horizontal-wrapper ps-0"></div>
        <div class="nav-right col-8 pull-right right-header p-0">
          <ul class="nav-menus">
            <li>
              <div class="mode"><i class="fa fa-moon-o"></i></div>
            </li>

            <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
            <li class="profile-nav onhover-dropdown p-0 me-0">
              <div class="media profile-media"><img class="b-r-10" height="37px" width="37px" src=" 
                     <?php
                      include "../../../connection.php";

                      $sql = 'select passport from applicants_documents where applicants_id = :applicants_id';
                      $stmt = $connection->prepare($sql);
                      $p = [':applicants_id' => $_SESSION['auth']['id']];
                      $stmt->execute($p);
                      $path = "../../../public/images/passport/";
                      if ($img = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {


                        print($path . $img[0]['passport'] . "?" . mt_rand());
                      } else {
                        print($path . "avatar.svg");
                      }





                      ?>" alt="">
                <div class="media-body"><span>
                    <?php isset($_SESSION['auth']) ? print($_SESSION['auth']['username']) : print('username');  ?>


                    <!-- </span>
                  <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                </div> -->
                </div>
                <ul class="profile-dropdown onhover-show-div">

                  <li><a href="applicant_logout.php"><i data-feather="log-out"> </i><span>Logout</span></li>


                </ul>
            </li>
          </ul>
        </div>
        <script class="result-template" type="text/x-handlebars-template">
          <div class="ProfileCard u-cf">
            <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
            <div class="ProfileCard-details">
            <div class="ProfileCard-realName">{{name}}</div>
            </div>
            </div>
          </script>
        <script class="empty-template" type="text/x-handlebars-template"><div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div></script>
      </div>
    </div>
    <!-- Page Header Ends                              -->
    <!-- Page Body Start-->
    <div class="page-body-wrapper">
      <!-- Page Sidebar Start-->
      <div class="sidebar-wrapper">
        <div>
          <div class="logo-wrapper"><a href="../../../index.html"><img class="img-fluid for-light" src="../../../admin/assets/logo.png" alt=""><img class="img-fluid for-dark" src="../../..//admin/assets/logo.png" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
          </div>
          <div class="logo-icon-wrapper"><a href="../../../index.html"><img class="img-fluid" width="32px" height="32px" src="../images/pclogo.jpg" alt=""></a></div>
          <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="../../../index.html"><img class="img-fluid" width="32px" height="32px" src="../images/pclogo.jpg" alt=""></a>
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-list" style="margin-top: 50px;"><a class="sidebar-link sidebar-title link-nav" href="applicant_logout.php"><i data-feather="edit"> </i><span>Start New Application</span></a></li>
                <li class="sidebar-list"><a style="cursor:pointer;" onclick="$('#appstatusmodal').modal('toggle');" class="sidebar-link sidebar-title link-nav" data-toggle="modal" data-target="#exampleModalCenter"><i data-feather="check-square"> </i><span>Check Application Status</span></a></li>

              </ul>
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </nav>
        </div>
      </div>
      <!-- Page Sidebar Ends-->
      <div class="page-body">
        <div class="container-fluid">
          <div class="page-title">
            <div class="row">
              <div class="col-6">
                <h3>Start New Application
                </h3>


              </div>
              <div class="col-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="../../../index.html"> <i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item">New Application</li>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
              <div class="card">
                <div class="card-body">
                  <div class="f1">
                    <div class="f1-steps">
                      <div class="f1-progress">
                        <div class="f1-progress-line" data-now-value="4.33" data-number-of-steps="7"></div>
                      </div>
                      <div class="f1-step 
                        <?php if (isset($_GET['content']))
                          $_GET['content'] == 'personal' ? print('active') : print('activated');

                        ?>
                        
                        ">
                        <div class="f1-step-icon
                        
                          
                          "><i class="fa fa-user 
                          "></i></div>
                        <p>Personal Info</p>
                      </div>
                      <div class="f1-step
                        
                          <?php if (isset($_GET['content']) && isset($_SESSION['curr_index'])) {
                            if ($_SESSION['curr_index'] == 2 && $_GET['content'] == 'guardian') {
                              print('active');
                            } elseif ($_SESSION['curr_index'] > 2) {
                              print('activated');
                            } elseif ($_SESSION['curr_index'] > 2  && $_GET['content'] != 'guardian') {
                              print('');
                            } else {
                              NULL;
                            }
                          }







                          ?>">
                        <div class="f1-step-icon"><i class="fa fa-users"></i></div>
                        <p>Guardian Info</p>
                      </div>
                      <div class="f1-step 
                                  <?php if (isset($_GET['content']) && isset($_SESSION['curr_index'])) {
                                    if ($_SESSION['curr_index'] == 3 && $_GET['content'] == 'exams') {
                                      print('active');
                                    } elseif ($_SESSION['curr_index'] > 3) {
                                      print('activated');
                                    } elseif ($_SESSION['curr_index'] > 3  && $_GET['content'] != 'exams') {
                                      print('');
                                    } else {
                                      NULL;
                                    }
                                  }







                                  ?>
                        
                        ">
                        <div class="f1-step-icon"><i class="fa fa-list"></i></div>
                        <p>Exam Results</p>
                      </div>
                      <div class="f1-step
                        <?php if (isset($_GET['content'])  && isset($_SESSION['curr_index'])) {
                          if ($_SESSION['curr_index'] == 4 && $_GET['content'] == 'programs') {
                            print('active');
                          } elseif ($_SESSION['curr_index'] > 4) {
                            print('activated');
                          } elseif ($_SESSION['curr_index'] > 4  && $_GET['content'] != 'programs') {
                            print('');
                          } else {
                            NULL;
                          }
                        }







                        ?>
                        
                        
                        
                        
                        ">
                        <div class="f1-step-icon"><i class="fa fa-graduation-cap"></i></div>
                        <p>Choice of Program</p>
                      </div>
                      <div class="f1-step
                        <?php if (isset($_GET['content']) && isset($_SESSION['curr_index'])) {
                          if ($_SESSION['curr_index'] == 5 && $_GET['content'] == 'documents') {
                            print('active');
                          } elseif ($_SESSION['curr_index'] > 5) {
                            print('activated');
                          } elseif ($_SESSION['curr_index'] > 5  && $_GET['content'] != 'documents') {
                            print('');
                          } else {
                            NULL;
                          }
                        }







                        ?>
                        
                        
                        ">
                        <div class="f1-step-icon"><i class="fa fa-file"></i></div>
                        <p>Upload Documents</p>
                      </div>
                      <div class="f1-step
                        <?php if (isset($_GET['content'])  && isset($_SESSION['curr_index'])) {
                          if ($_SESSION['curr_index'] == 6 && $_GET['content'] == 'declaration') {
                            print('active');
                          } elseif ($_SESSION['curr_index'] > 6) {
                            print('activated');
                          } elseif ($_SESSION['curr_index'] > 6  && $_GET['content'] != 'declaration') {
                            print('');
                          } else {
                            NULL;
                          }
                        }


                        ?>
                        
                        ">
                        <div class="f1-step-icon"><i class="fa fa-check-square"></i></div>
                        <p>Declaration </p>
                      </div>
                      <div class="f1-step
                         <?php if (isset($_GET['content'])  && isset($_SESSION['curr_index'])) {
                            if ($_SESSION['curr_index'] == 7 && $_GET['content'] == 'completed') {
                              print('active');
                            } elseif ($_SESSION['curr_index'] > 7) {
                              print('activated');
                            } elseif ($_SESSION['curr_index'] > 7  && $_GET['content'] != 'completed') {
                              print('');
                            } else {
                              NULL;
                            }
                          }


                          ?>
                        
                        
                        ">
                        <div class="f1-step-icon"><i class="fa fa-check-circle"></i></div>
                        <p>Application Completed</p>
                      </div>
                    </div>


                    <?php
                    
                    $Includes = array('personal', 'guardian', 'exams', 'programs', 'documents', 'declaration', 'completed');
                    if (isset($_GET['content'])) {
                      $content = $_GET['content'];
                      if (in_array($content, $Includes)) {
                        $scriptName = 'dashboard_' . $content . '.php';
                        // die($scriptName);
                        include($scriptName);
                      }
                    } else {
                      print('nothing to display');
                    }



                    ?>







                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row g-3 input-group fieldGroupCopy" style="display: none;">
          <div class="col-md-3">
            <input type="text" name="course[]" class="form-control" placeholder="Enter Subject" />
          </div>
          <div class="col-md-3">
            <select class="form-select" id="grade" name="grade[]" required="">
              <option selected="" disabled="" value="">Grade</option>
              <option value="A1">A1</option>
              <option value="B2">B2</option>
              <option value="B3">B3</option>
              <option value="C4">C4</option>
              <option value="C5">C5</option>
              <option value="C6">C6</option>
              <option value="D7">D7</option>
              <option value="E8">E8</option>
              <option value="F9">F9</option>
            </select>
          </div>
          <div class="col-md-2 input-group-addon mb-3">
            <a href="javascript:void(0)" class="btn btn-danger remove"> Remove</a>
          </div>
        </div>
        <!-- Container-fluid Ends-->
      </div>
      <!-- footer start-->
    </div>
  </div>



  <!-- latest jquery-->
  <script src="../../../assets/js/jquery-3.5.1.min.js"></script>

  <!-- Bootstrap js-->
  <script src="../../../assets/js/bootstrap.bundle.min.js"></script>
  <!-- feather icon js-->
  <script src="../../../assets/js/feather.min.js"></script>
  <script src="../../../assets/js/feather-icon.js"></script>
  <!-- scrollbar js-->
  <script src="../../../assets/js/simplebar.js"></script>
  <script src="../../../assets/js/custom.js"></script>
  <!-- Sidebar jquery-->
  <script src="../../../assets/js/config.js"></script>
  <!-- Plugins JS start-->
  <script src="../../../assets/js/sweetalert.min.js"></script>
  <script src="../../../assets/js/app.js"></script>
  <script src="../../../assets/js/sidebar-menu.js"></script>
  <script src="../../../assets/js/datepicker.js"></script>
  <script src="../../../assets/js/datepicker.en.js"></script>
  <script src="../../../assets/js/datepicker.custom.js"></script>
  <script src="../../../assets/js/form-wizard-three.js"></script>

  <script src="../../../assets/js/tooltip-init.js"></script>
  <!-- Plugins JS Ends-->
  <!-- Theme js-->
  <script src="../../../assets/js/script.js"></script>
  <script src="../../../assets/js/customizer.js"></script>
  <script src="../../../js/dashboardformsubmit.js"></script>

  <script>
    $(document).ready(function() {
      //group add limit
      var maxGroup = 10;

      //add more fields group
      $(".addMore").click(function() {
        if ($('body').find('.fieldGroup').length < maxGroup) {
          var fieldHTML = '<div class="row g-3 input-group fieldGroup " >' + $(".fieldGroupCopy").html() + '</div>';
          $('body').find('.fieldGroup:last').after(fieldHTML);
        } else {
          alert('Maximum ' + maxGroup + ' groups are allowed.');
        }
      });

      //remove fields group
      $("body").on("click", ".remove", function() {
        $(this).parents(".fieldGroup").remove();
      });
    });
  </script>
  <!-- Plugin used-->
  <script>
    let banner_el = document.querySelector('#auth_banner');
    if (banner_el.classList.contains('auth_banner')) {
      setTimeout(() => {
        banner_el.classList.toggle("auth_banner");
        banner_el.classList.toggle("ntopoffset");
      }, 4000);

    }
  </script>




</body>





</html>