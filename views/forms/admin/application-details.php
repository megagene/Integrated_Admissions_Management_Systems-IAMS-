<?php include "header.php";


?>

<?php


$sql = 'select * from applicants_data where applicant_id = :applicant_id';
$stmt = $connection->prepare($sql);
$p = [':applicant_id' => isset($_GET['user']) ? $_GET['user'] : NULL];
$stmt->execute($p);

if ($personal = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {
  $person = $personal[0];
}


$sql = 'select * from applicants_exams where applicants_id = :applicant_id';
$stmt = $connection->prepare($sql);
$p = [':applicant_id' => isset($_GET['user']) ? $_GET['user'] : NULL];
$stmt->execute($p);

if ($exams = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {
  $exam = $exams[0];
}
$sql = 'select * from applicants_documents where applicants_id = :applicant_id';
$stmt = $connection->prepare($sql);
$p = [':applicant_id' => isset($_GET['user']) ? $_GET['user'] : NULL];
$stmt->execute($p);

if ($documents = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {
  $document = $documents[0];
}





?>



<div class="page-body">


  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Application Details #AP<?php print(issetnull($person, 'id')); ?></h3>

        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php"> <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item"><a href="applications.php">Applications</li>
          </ol>
          <li class="breadcrumb-item active">Application Details</li>
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
          <div class="card-header">
            <h5>Personal Information</h5>
          </div>

          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="mb-3 row">
                  <div class="card-profile"><img height="250px" src="../admin/assets/user.png" alt=""></div>
                  <p class="col-sm-3 col-form-label"><b>Title</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'salutation')); ?></p>
                  </div>
                  <p class="col-sm-3 col-form-label"><b>Present Occupation</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'occupation')); ?></p>
                  </div>
                </div>
                <div class="mb-3 row">
                  <p class="col-sm-3 col-form-label"><b>Surname</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'firstname')); ?></p>
                  </div>
                  <p class="col-sm-3 col-form-label"><b>Place of Work</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'occupation')); ?></p>
                  </div>
                </div>
                <div class="mb-3 row">
                  <p class="col-sm-3 col-form-label"><b>Othername(s)</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'lastname')); ?></p>
                  </div>
                  <p class="col-sm-3 col-form-label"><b>Phone Number</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print("0" . issetnull($person, 'contact')); ?></p>
                  </div>
                </div>
                <div class="mb-3 row">
                  <p class="col-sm-3 col-form-label"><b>Date of Birth</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'dateofbirth')); ?></p>
                  </div>
                  <p class="col-sm-3 col-form-label"><b>Email Address</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'email')); ?></p>
                  </div>
                </div>
                <div class="mb-3 row">
                  <p class="col-sm-3 col-form-label"><b>Gender</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'gender')); ?></p>
                  </div>
                  <p class="col-sm-3 col-form-label"><b>Postal Address</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'postaddr')); ?></p>
                  </div>
                </div>
                <div class="mb-3 row">
                  <p class="col-sm-3 col-form-label"><b>Marital Status</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'martialstatus')); ?></p>
                  </div>
                  <p class="col-sm-3 col-form-label"><b>Religion</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'religion')); ?></p>
                  </div>
                </div>
                <div class="mb-3 row">
                  <p class="col-sm-3 col-form-label"><b>Home Region</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'homeregion')); ?></p>
                  </div>
                  <p class="col-sm-3 col-form-label"><b>City</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'city')); ?></p>
                  </div>
                </div>
                <div class="mb-3 row">
                  <p class="col-sm-3 col-form-label"><b>Residential Address</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'residentialaddr')); ?></p>
                  </div>
                  <p class="col-sm-3 col-form-label"><b>Street</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'street')); ?></p>
                  </div>
                </div>
                <div class="mb-3 row">
                  <p class="col-sm-3 col-form-label"><b>Country</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'country')); ?></p>
                  </div>
                  <p class="col-sm-3 col-form-label"><b>Physically Challenged</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'disability')); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5>Guardian Information</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="mb-3 row">
                  <p class="col-sm-3 col-form-label"><b>First Name</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'firstname_g')); ?></p>
                  </div>
                  <p class="col-sm-3 col-form-label"><b>Relation to Applicant</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'relation_g')); ?></p>
                  </div>
                </div>
                <div class="mb-3 row">
                  <p class="col-sm-3 col-form-label"><b>Last Name</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'lastname_g')); ?></p>
                  </div>
                  <p class="col-sm-3 col-form-label"><b>Occupation</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'occupation_g')); ?></p>
                  </div>
                </div>
                <div class="mb-3 row">
                  <p class="col-sm-3 col-form-label"><b>Address</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'Address_g')); ?></p>
                  </div>
                  <p class="col-sm-3 col-form-label"><b>Phone Number</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print("0" . issetnull($person, 'contact_g')); ?></p>
                  </div>
                </div>
                <div class="mb-3 row">
                  <p class="col-sm-3 col-form-label"><b>Email Address</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($person, 'email_g')); ?></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5>Exam Results</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="mb-3 row">
                  <p class="col-sm-3 col-form-label"><b>Exam Type</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($exam, 'exams_type')); ?></p>
                  </div>
                  <p class="col-sm-3 col-form-label"><b>Sitting</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($exam, 'sitting')); ?></p>
                  </div>
                </div>
                <div class="mb-3 row">
                  <p class="col-sm-3 col-form-label"><b>Exam Year</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($exam, 'exams_year')); ?></p>
                  </div>
                  <p class="col-sm-3 col-form-label"><b>Index Number</b></p>
                  <div class="col-sm-3">
                    <p class="application"><?php print(issetnull($exam, 'index_number')); ?></p>
                  </div>
                </div>
                <div class="mb-3 row">
                  <p class="col-sm-12 col-form-label" style="text-align: center; font-size: 20px;"><b>Results</b></p>
                </div>
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Subject</th>
                        <th scope="col">Grade</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $elements = [
                        'courses' => array('course_one', 'course_two', 'course_three', 'course_four', 'course_five', 'course_six', 'course_seven', 'course_eight', 'course_nine', 'course_ten'),
                        'grades' => array('grade_one', 'grade_two', 'grade_three', 'grade_four', 'grade_five', 'grade_six', 'grade_seven', 'grade_eight', 'grade_nine', 'grade_ten')


                      ];
                      for ($index = 0; $index < sizeof($elements["courses"]); $index++) {

                        $course = $elements['courses'][$index];
                        $grade = $elements['grades'][$index];
                        if (isset($exam[$course])) {
                          $newindex =  $index + 1;

                          echo  "<tr>";
                          echo "<th scope='row'>$newindex</th>";
                          echo " <td>$exam[$course]</td>";
                          echo " <td>$exam[$grade]</td>";
                          echo " </tr>";
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
        <div class="card">
          <div class="card-header">
            <h5>Choice of Program</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Program</th>
                        <th>Session</th>
                        <th scope="col">campus</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">1</th>
                        <td><?php print(issetnull($person, 'firstchoice_p')); ?></td>
                        <td><?php print(issetnull($person, 'session_p')); ?></td>
                        <td><?php print(issetnull($person, 'campus_p')); ?></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td><?php print(issetnull($person, 'secondchoice_p')); ?></td>
                        <td><?php print(issetnull($person, 'session_p')); ?></td>
                        <td><?php print(issetnull($person, 'campus_p')); ?></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td><?php print(issetnull($person, 'thirdchoice_p')); ?></td>
                        <td><?php print(issetnull($person, 'session_p')); ?></td>
                        <td><?php print(issetnull($person, 'campus_p')); ?></td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header">
            <h5>Documents</h5>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <div class="table-responsive">
                  <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Document Type</th>
                        <th scope="col">Document</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $imagepath = "../../../public/images/passport/";
                      $docpath = "../../../public/documents/";
                      ?>
                      <tr>
                        <th scope="row">1</th>
                        <td>Passport Picture</td>
                        <td><a href="<?php
                                      print($imagepath . issetnull($document, 'passport'));
                                      ?>"><i class="fa fa-image"></i><?php print(issetnull($document, 'passport')); ?></a></td>
                      </tr>
                      <tr>
                        <th scope="row">2</th>
                        <td>Transcript</td>
                        <td><a href="
                              <?php
                              print($docpath . issetnull($document, 'transcript'));
                              ?>"><i class="fa fa-file-pdf-o"></i> <?php print(issetnull($document, 'transcript')); ?></a></td>
                      </tr>
                      <tr>
                        <th scope="row">3</th>
                        <td>Other Relevant Documents</td>
                        <td><a href="
                                  <?php
                                  print($docpath . issetnull($document, 'other_documents'));
                                  ?>
                              "><i class="fa fa-file-pdf-o"></i> <?php print(issetnull($document, 'other_documents')); ?></a></td>
                      </tr>
                    </tbody>
                  </table>
                  <div class="card-footer text-end">
                    <div class="col-sm-9 offset-sm-3">
                      <form action="../../models/admin/process_application.php" method="post" style="display:inline;">
                        <input type='hidden' name='applicant_id' value="
                               <?php isset($_GET['user']) ?  print($_GET['user']) : NULL; ?>">
                        <button class="btn btn-primary" name="accept" style="background-color: green !important;" type="submit"><i class="fa fa-check"></i> Approve</button>
                      </form>

                      <form action="../../models/admin/process_application.php" method="post" style="display:inline;">
                        <input type='hidden' name='applicant_id' value="
                                  <?php isset($_GET['user']) ?  print($_GET['user']) : NULL; ?>
                              
                              ">
                        <button class="btn btn-primary" name="decline" style="background-color: red !important;" type="submit"><i class="fa fa-times"></i> Decline</button>
                      </form>
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
  <!-- Container-fluid Ends-->
</div>
</div>
</div>

<?php

include "foot.php";
?>