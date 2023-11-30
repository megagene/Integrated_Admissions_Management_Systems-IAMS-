<!DOCTYPE html>
<html lang="en">

<?php
session_start();
require_once "connection.php";

include "util.php";







if (!isset($_SESSION['admin_auth'])) {

  header("location:../index.html");
}




$sql = 'select * from applicants_data where iscompleted = :iscompleted AND isadmitted = 0';
$stmt = $connection->prepare($sql);
$p = [':iscompleted' => 1];
$stmt->execute($p);

if ($applicants = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {

  // print_r($applicants);

}
?>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../images/gctulogo.png" type="image/x-icon">
  <link rel="shortcut icon" href="../images/gctulogo.png" type="image/x-icon">
  <title>Applications List</title>
  <!-- Google font-->
  <link href="https://fonts.googleapis.com/css?family=Rubik:400,400i,500,500i,700,700i&amp;display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
  <!-- ico-font-->
  <link rel="stylesheet" type="text/css" href="assets/css/icofont.css">
  <!-- Themify icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/themify.css">
  <!-- Flag icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/flag-icon.css">
  <!-- Feather icon-->
  <link rel="stylesheet" type="text/css" href="assets/css/feather-icon.css">
  <!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="assets/css/scrollbar.css">
  <link rel="stylesheet" type="text/css" href="assets/css/datatables.css">
  <link rel="stylesheet" type="text/css" href="assets/css/datatable-extension.css">
  <!-- Plugins css Ends-->
  <!-- Bootstrap css-->
  <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
  <!-- App css-->
  <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  <link id="color" rel="stylesheet" href="assets/css/color-1.css" media="screen">
  <!-- Responsive css-->
  <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
  <style>
    .auth_banner {

      /* inset: auto 40%; */
      bottom: 10px;
      left: 20px;
      min-width: 50px;

    }

    .ntopoffset {
      left: 20px;
      bottom: -100%;
      transition: bottom 2s ease-in-out
    }


    .accept {
      color: green !important;
    }

    .decline {
      color: red !important;
    }

    div.customizer-links,
    div.according-menu {
      display: none !important;
    }
  </style>
</head>

<body>

  <!-- error banner-->
  <div id="auth_banner" class=" alert rounded-pill alert-info position-fixed  text-center
       <?php isset($_SESSION["error"]) ? print('auth_banner') : print('ntopoffset'); ?>
       " style="z-index:10;   " role="alert">
    <?php isset($_SESSION["error"]) ? print($_SESSION["error"]) : NULL;
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
          <div class="logo-wrapper"><a href="index.php"><img class="img-fluid" src="/admin/assets/logo.png" alt=""></a></div>
          <div class="toggle-sidebar"><i class="status_toggle middle sidebar-toggle" data-feather="align-center"></i></div>
        </div>
        <div class="left-header col horizontal-wrapper ps-0"></div>
        <div class="nav-right col-8 pull-right right-header p-0">
          <ul class="nav-menus">

            <li class="maximize"><a class="text-dark" href="#!" onclick="javascript:toggleFullScreen()"><i data-feather="maximize"></i></a></li>
            <li class="profile-nav onhover-dropdown p-0 me-0">
              <div class="media profile-media"><img class="b-r-10" height="37px" width="37px" src="/admin/assets/user.png" alt="">
                <div class="media-body"><span>Theophilus Adusei</span>
                  <p class="mb-0 font-roboto">Admin <i class="middle fa fa-angle-down"></i></p>
                </div>
              </div>
              <ul class="profile-dropdown onhover-show-div">
                <li><a href="../logout.php"><i data-feather="log-out"> </i><span>Logout</span></a></li>
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
          <div class="logo-wrapper"><a href="index.php"><img class="img-fluid for-light" src="/admin/assets/logo.png" alt=""><img class="img-fluid for-dark" src="/admin/assets/logo.png" alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i></div>
          </div>
          <div class="logo-icon-wrapper"><a href="index.php"><img class="img-fluid" width="32px" height="32px" src="../images/gctulogo.png" alt=""></a></div>
          <nav class="sidebar-main">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu">
              <ul class="sidebar-links" id="simple-bar">
                <li class="back-btn"><a href="index.php"><img class="img-fluid" width="32px" height="32px" src="../images/gctulogo.png" alt=""></a>
                  <div class="mobile-back text-end"><span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i></div>
                </li>
                <li class="sidebar-list" style="margin-top: 50px;"><a class="sidebar-link sidebar-title link-nav" href="index.php"><i data-feather="home"> </i><span>Home</span></a></li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="file-text"> </i><span>Application</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="applications.php">Received Applications</a></li>
                    <li><a href="application-ranks.html">Application Ranks</a></li>
                    <li><a href="send-mail.html">Send Mail</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="user"> </i><span>Students</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="students.html">Students List</a></li>
                    <li><a href="add-student.html">Add Student</a></li>
                    <li><a href="id-cards.html">ID Cards</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="credit-card"> </i><span>Payment</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="payments.html">Payment List</a></li>
                    <li><a href="receipts.html">Digital Receipts</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#"><i data-feather="server"> </i><span>Faculties</span></a>
                  <ul class="sidebar-submenu">
                    <li><a href="departments.html">Departments List</a></li>
                    <li><a href="course-reg.html">Course Registrations List</a></li>
                  </ul>
                </li>
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
                <h3>Applications List</h3>
              </div>
              <div class="col-6">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="index.php"><i data-feather="home"></i></a></li>
                  <li class="breadcrumb-item active">Applications List</li>
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
                  <div class="dt-ext table-responsive">
                    <table class="display" id="export-button">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Application No.</th>
                          <th>First Choice</th>
                          <th>Email</th>
                          <th>Phone</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        <?php


                        foreach ($applicants as $applicant) {
                          // print_r(issetnull($applicant, 'firstname'));
                          $sql = 'SELECT id FROM `applicants` where id = :applicants_id;';
                          $stmt = $connection->prepare($sql);
                          $p = [':applicants_id' => issetnull($applicant, 'applicant_id')];
                          $stmt->execute($p);

                          if ($ids = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {

                            $id = $ids[0]['id'];

                            echo " <tr style = 'border-bottom:1px solid gray; margin:1px 0;'>";

                            echo "<td>" . issetnull($applicant, 'lastname') . " " . issetnull($applicant, 'firstname') . "</td>";
                            echo "<td>AP" .  issetnull($applicant, 'id') . "</td>";
                            echo "<td>" . issetnull($applicant, 'firstchoice_p') . "</td>";
                            echo " <td>" . issetnull($applicant, 'email') . "</td>";
                            echo " <td>0" . issetnull($applicant, 'contact') . "</td>";
                            echo "<td>";
                            echo " <a  ";

                            echo "href='application-details.php?user=$id";

                            echo "'";
                            echo "><i class='fa fa-eye fa-lg'></i></a>";
                            $applicant_id = issetnull($applicant, 'applicant_id');
                            echo "<form action='process_application.php' method='POST'>";

                            echo "<input type='hidden' name='applicant_id' value= $applicant_id>";
                            echo " <button name='accept' style='padding: 0; outline:none ; border:none; display:inline; margin:0;' type='submit'><i class='fa fa-check fa-lg accept'></i></button>";
                            echo "</form>";
                            echo "<form action='process_application.php' method='POST'>";
                            echo "<input type='hidden' name='applicant_id' value= $applicant_id>";
                            echo " <button name='decline' style='padding: 0; outline:none ; border:none; display:inline; margin:0;' type='submit'><i class='fa fa-times fa-lg decline'></i></button>";
                            echo "</form>";

                            echo "</td>";
                            echo "</tr>";
                          }
                        }




                        ?>






                      </tbody>

                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- latest jquery-->
      <script src="assets/js/jquery-3.5.1.min.js"></script>
      <!-- Bootstrap js-->
      <script src="assets/js/bootstrap.bundle.min.js"></script>
      <!-- feather icon js-->
      <script src="assets/js/feather.min.js"></script>
      <script src="assets/js/feather-icon.js"></script>
      <!-- scrollbar js-->
      <script src="assets/js/simplebar.js"></script>
      <script src="assets/js/custom.js"></script>
      <!-- Sidebar jquery-->
      <script src="assets/js/config.js"></script>
      <!-- Plugins JS start-->
      <script src="assets/js/sidebar-menu.js"></script>
      <script src="assets/js/jquery.dataTables.min.js"></script>
      <script src="assets/js/dataTables.buttons.min.js"></script>
      <script src="assets/js/jszip.min.js"></script>
      <script src="assets/js/buttons.colVis.min.js"></script>
      <script src="assets/js/pdfmake.min.js"></script>
      <script src="assets/js/vfs_fonts.js"></script>
      <script src="assets/js/dataTables.autoFill.min.js"></script>
      <script src="assets/js/dataTables.select.min.js"></script>
      <script src="https://admin.pixelstrap.com/cuba/assets/js/datatable/datatable-extension/buttons.bootstrap4.min.js"></script>
      <script src="assets/js/buttons.html5.min.js"></script>
      <script src="assets/js/buttons.print.min.js"></script>
      <script src="assets/js/dataTables.bootstrap4.min.js"></script>
      <script src="assets/js/dataTables.responsive.min.js"></script>
      <script src="assets/js/responsive.bootstrap4.min.js"></script>
      <script src="assets/js/dataTables.keyTable.min.js"></script>
      <script src="assets/js/dataTables.colReorder.min.js"></script>
      <script src="assets/js/dataTables.fixedHeader.min.js"></script>
      <script src="assets/js/dataTables.rowReorder.min.js"></script>
      <script src="assets/js/dataTables.scroller.min.js"></script>
      <script src="assets/js/dataTablescustom.js"></script>
      <script src="assets/js/tooltip-init.js"></script>
      <!-- Plugins JS Ends-->
      <!-- Theme js-->
      <script src="assets/js/script.js"></script>
      <script src="assets/js/customizer.js"></script>
      <script>
        let banner_el = document.querySelector('#auth_banner');
        if (banner_el.classList.contains('auth_banner')) {
          setTimeout(() => {
            banner_el.classList.toggle("auth_banner");
            banner_el.classList.toggle("ntopoffset");
          }, 3000);

        }
      </script>
      <!-- login js-->
      <!-- Plugin used-->
</body>

</html>