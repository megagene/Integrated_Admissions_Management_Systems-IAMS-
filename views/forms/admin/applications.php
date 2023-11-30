<?php 
include "header.php";



      $sql = 'select * from applicants_data where iscompleted = :iscompleted AND isadmitted = 0';
      $stmt = $connection->prepare($sql);
      $p = [':iscompleted' => 1];
      $stmt->execute($p);

      if ($applicants = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {

        // print_r($applicants);

      }
?>
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

                            echo " <tr style = 'border-bottom:1px solid #312056; margin:1px 0;'>";

                            echo "<td>" . issetnull($applicant, 'lastname') . " " . issetnull($applicant, 'firstname') . "</td>";
                            echo "<td>AP" .  issetnull($applicant, 'id') . "</td>";
                            echo "<td>" . issetnull($applicant, 'firstchoice_p') . "</td>";
                            echo " <td>" . issetnull($applicant, 'email') . "</td>";
                            echo " <td>0" . issetnull($applicant, 'contact') . "</td>";
                            echo "<td>";
                            echo " <a  style='display:block;' ";

                            echo "href='application-details.php?user=$id";

                            echo "'";
                            echo "><i class='fa fa-eye fa-lg'></i></a>";
                            $applicant_id = issetnull($applicant, 'applicant_id');
                            echo "<form  action='../../models/admin/process_application.php' method='POST'>";

                            echo "<input type='hidden' name='applicant_id' value=$applicant_id>";
                            echo " <button name='accept' style='padding: 0; outline:none ; border:none; display:inline; margin:0;' type='submit'><i class='fa fa-check fa-lg accept'></i></button>";
                            echo "</form>";
                            echo "<form   action='../../models/admin/process_application.php' method='POST'> ";
                            echo "<input type='hidden' name='applicant_id' value=$applicant_id>";
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
      

      <?php 
      include "foot.php";
      
      ?>