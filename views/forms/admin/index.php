<?php
include "header.php";

$sql = 'select * from applicants_data where iscompleted = :iscompleted AND isadmitted = 0';
$stmt = $connection->prepare($sql);
$p = [':iscompleted' => 1];
$stmt->execute($p);

if ($applicants = $stmt->rowCount()) {
}

$sql = 'select * from fee_payment_list where payment_accepted =0';
$stmt = $connection->prepare($sql);

$stmt->execute($p);

if ($payment_list = $stmt->rowCount()) {
}
$sql = 'select * from course_enroll_list';
$stmt = $connection->prepare($sql);

$stmt->execute();

if ($course_enroll_list = $stmt->rowCount()) {
}

?>
<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Dashboard</h3>

        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"> <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Dashbaord</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="user-profile">
      <div class="row">
        <!-- user profile first-style start-->
        <div class="col-sm-12">
          <div class="card hovercard text-center">
            <div class="cardheader" style="height: 100px !important;"></div>
            <div class="user-image">
              <div class="avatar"><img alt="" src="/backend/assets/user.png"></div>
              <div class="icon-wrapper"><i data-feather="edit"></i></div>
            </div>
            <div class="info">
              <div class="row">
                <div class="col-sm-6 col-lg-4 order-sm-1 order-xl-0">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="ttl-info text-start">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-12 col-lg-4 order-sm-0 order-xl-1 counterfigure" style="width: 35% !important;">
                  <div class="user-designation">
                    <div class="title">Adofo Michael</div><br>
                    <div class="desc">ID: <b>040971983</b></div>
                    <div class="desc">Email: <b>admin@pc.edu.gh</b></div>
                    <div class="desc">Register Date: <b>13/09/2020</b></div>
                  </div>
                </div>
                <div class="col-sm-6 col-lg-4 order-sm-2 order-xl-2" style="width: 26.33333% !important;">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="ttl-info text-start">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <hr>
              <div class="row">
                <div class="col-xl-4 xl-50 chart_data_right box-col-12" style="max-width: 33%;">
                  <div class="card" style="background-color: #040720 !important;">
                    <div class="card-body">
                      <div class="media align-items-center">
                        <div class="media-body right-chart-content">
                          <h4 class="counterfigure"> <?php print ($applicants) ?? ('0'); ?></h4><span style="color: white;">Received Applications</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 xl-50 chart_data_right second d-none" style="max-width: 33%;">
                  <div class="card" style="background-color: #3399CC !important;">
                    <div class="card-body">
                      <div class="media align-items-center">
                        <div class="media-body right-chart-content">
                          <h4 class="counterfigure"><?php print ($payment_list) ?? ('0'); ?></h4><span style="color: white;">Payment Lists</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-xl-4 xl-50 chart_data_right second d-none" style="max-width: 33%;">
                  <div class="card" style="background-color: rgb(206, 206, 67) !important;">
                    <div class="card-body">
                      <div class="media align-items-center">
                        <div class="media-body right-chart-content">
                          <h4 class="counterfigure"><?php print ($course_enroll_list) ?? ('0'); ?></h4><span style="color: white;">Courses Registrations</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
</div>
<!-- latest jquery-->

<?php
include "foot.php";

?>