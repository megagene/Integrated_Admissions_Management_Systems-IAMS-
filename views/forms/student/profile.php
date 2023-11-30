<?php

  session_start();
  require "../../../connection.php";
  require "../../../util.php";

  if (!isset($_SESSION['auth_student'])) {

    header("location: /IAMS/index.html");
  }
$meta_data;


$sql = 'select * from students_table where id =:id';
$stmt = $connection->prepare($sql);
$p = [':id' => $_SESSION['auth_student']['id']];
$stmt->execute($p);

if ($results = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {

  $student = $results[0];


  $sql = 'select * from applicants_data where id =:applicants_data_id';
  $stmt = $connection->prepare($sql);
  $p = [':applicants_data_id' => $_SESSION['auth_student']['applicants_data_id']];
  $stmt->execute($p);

  if ($results = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {

    $meta_data = $results[0];
  }
}





?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>User Profile</title>


  <?php
  include "header.php";
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Profile</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">User Profile</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">

          <!-- Profile Image -->
          <div class="col-md-9 card card-primary card-outline" style="margin: 0 auto;">
            <div class="card-body box-profile">
              <div class="text-center">
                <img class="  " height="100px" width="100px" src=" 
                     <?php



                      $path = "../../../public/images/passport/";
                      print($path . issetnull($student, 'passport'));





                      ?>" alt="">


              </div>

              <h3 class="profile-username text-center">

                <?php
                print(issetnull($student, 'firstname') . " " . issetnull($student, 'lastname'));

                ?>



              </h3>

              <ul class="list-group list-group-unbordered mb-3">
                <li class="list-group-item">
                  <b>Index Number</b> <a class="float-right"><?php
                                                              print(issetnull($student, 'index_number'));

                                                              ?></a>
                </li>
                <li class="list-group-item">
                  <b>Date of birth</b> <a class="float-right"><?php
                                                              print(issetnull($meta_data, 'dateofbirth'));

                                                              ?></a></a>
                </li>
                <li class="list-group-item">
                  <b>Gender</b> <a class="float-right"><?php
                                                        print(issetnull($student, 'gender'));

                                                        ?></a></a>
                </li>
                <li class="list-group-item">
                  <b>Country</b> <a class="float-right"><?php
                                                        print(issetnull($meta_data, 'country'));

                                                        ?></a></a>
                </li>
                <li class="list-group-item">
                  <b>Contact</b> <a class="float-right"><?php
                                                        print("0" . issetnull($student, 'contact'));

                                                        ?></a></a>
                </li>
                <li class="list-group-item">
                  <b>Email</b> <a class="float-right"><?php
                                                      print(issetnull($student, 'email'));

                                                      ?></a></a>
                </li>
                <li class="list-group-item">
                  <b>Program</b> <a class="float-right">

                    <?php
                    print(issetnull($meta_data, 'firstchoice_p'));

                    ?></a>
                  </a>
                </li>
                <li class="list-group-item">
                  <b>Current Level</b> <a class="float-right"><?php
                                                              print(issetnull($student, 'current_level'));

                                                              ?></a></a>
                </li>

                <li class="list-group-item">
                  <b>Session</b> <a class="float-right">

                    <?php
                    print(issetnull($student, 'session'));

                    ?></a>
                  </a>
                </li>
                <li class="list-group-item">
                  <b>Guardian Name</b> <a class="float-right"><?php
                                                              print(issetnull($meta_data, 'firstname_g') . " " . issetnull($meta_data, 'secondname_g'));

                                                              ?></a></a>
                </li>
                <li class="list-group-item">
                  <b>Guardian Contact</b> <a class="float-right">
                    <?php
                    print("0" . issetnull($meta_data, 'contact_g'));

                    ?></a>


                  </a>
                </li>
              </ul>
            </div>
            <!-- /.card-body -->
          </div>

          <!-- <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="active nav-item"><a class="active nav-link" data-toggle="tab">Profile Details</a></li>
                  </ul>
                </div>
                <div class="card-body">
                  <div class="tab-content">
  
                    <div class="active tab-pane" id="settings">
                      <form class="form-horizontal">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-1 col-form-label">Name</label>
                          <div class="col-sm-4 col-form-label">
                            <h5>Abdullah Anaman</h5>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName2" placeholder="Name">
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputExperience" class="col-sm-2 col-form-label">Experience</label>
                          <div class="col-sm-10">
                            <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputSkills" class="col-sm-2 col-form-label">Skills</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputSkills" placeholder="Skills">
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          <!-- /.card -->
          <!-- /.col -->

          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <?php
  include "foot.php";
  ?>