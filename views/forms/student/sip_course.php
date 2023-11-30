<?php

  session_start();
  require "../../../connection.php";
  require "../../../util.php";

  if (!isset($_SESSION['auth_student'])) {

    header("location: /IAMS/index.html");
  }


$sql = 'select * from students_table where id =:id';
$stmt = $connection->prepare($sql);
$p = [':id' => $_SESSION['auth_student']['id']];
$stmt->execute($p);

if ($results = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {

  $student = $results[0];
}
$sql = 'select * from courses';
$stmt = $connection->prepare($sql);
// $p = [':id' => $_SESSION['auth_student']['id']];
$stmt->execute();

if ($courses = $stmt->fetchAll(\PDO::FETCH_OBJ)) {
}

$sql = 'select * from course_enroll_list where student_id =:id';
$stmt = $connection->prepare($sql);
$p = [':id' => $_SESSION['auth_student']['id']];
$stmt->execute($p);

if ($enrolled_course = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {

  // $enrolled_course = $enrolled_course[0];
}



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Course Registration</title>
  <?php
  include "header.php"
  ?>



  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">

        <?php
          
        ?>
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 style="text-align: center; font-size: larger;">Courses Available For 2020/2021 Second Semester</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th>COURSE</th>
                      <th> <?php $enrolled_course!=NULL? print('STATUS') : print("LECTURER")   ?>
                      </th>
                      <?php $enrolled_course != NULL ? NULL : print("<th style='width: 131px'>CREDIT HOURS</th>")   ?>

                    </tr>
                  </thead>
                  <tbody>
                    <form action="../../models/student/sip_course_register.php" method="POST">
                      <?php
                      if ($enrolled_course!=NULL) {
                        $elements = [
                          'courses' => array('course_one', 'course_two', 'course_three', 'course_four', 'course_five', 'course_six', 'course_seven', 'course_eight', 'course_nine', 'course_ten'),


                        ];
                        for ($index = 0; $index < sizeof($elements["courses"]); $index++) {
                          $course = $elements['courses'][$index];

                          if (isset($enrolled_course[0][$course])) {
                            $getcourse = isset($enrolled_course[0][$course]) ? $enrolled_course[0][$course] : NULL;
                            $gethourse = isset($enrolled_course[0][$course]) ? $enrolled_course[0][$course] : NULL;

                            // print_r($getcourse);
                            echo "
                              <tr>
                                    <td>
                                              <div class='form-check'>
                                                <input class='form-check-input' checked='true' type='checkbox' name='course[]'  >
                                          <label class='form-check-label'>$getcourse</label>
                                        </div>
                                      </td>
                                      <td>
                                        <div>
                                          <p>registered</p>
                                        </div>
                                      </td>
                                     
                                    </tr>
                                        
                        
                        ";
                          }
                        }
                      } 
                      else if($enrolled_course==null) {
                        foreach ($courses as $course) {
                          echo "
                      <tr>
                      <td>
                        <div class='form-check'>
                          <input class='form-check-input' type='checkbox' name='course[]' value='$course->course_name' >
                          <label class='form-check-label'>$course->course_code - $course->course_name</label>
                        </div>
                      </td>
                      <td>
                        <div>
                          <p>$course->lecturer</p>
                        </div>
                      </td>
                      <td>$course->credit_hours</td>
                    </tr>
                         
                        
                        ";
                        }
                      }




                      ?>


                  </tbody>
                </table><br>
                <?php $enrolled_course != NULL ? NULL : print(" <div class='form-group'>
                  <button type='submit' name='submit' class='btn btn-primary'>Register</button>
                </div>")   ?>

                </form>
              </div>
            </div>
          </div>
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
  <?php
  include "foot.php";

  ?>