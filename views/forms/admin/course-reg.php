<?php
include "header.php";


$sql = 'select * from  course_enroll_list';
$stmt = $connection->prepare($sql);

$stmt->execute();

if ($students = $stmt->fetchAll(\PDO::FETCH_OBJ)) {
}



?>


<!-- Page Sidebar Ends-->
<div class="page-body">

  <?php
  // var_dump($index_number[0]->index_number);
  ?>
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Course Registrations List</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Course Registrations</li>
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
                    <th style='padding:5px;'>Name</th>
                    <th style='padding:5px;'>Index Number</th>
                    <th style='padding:5px;'>Registration</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  foreach ($students as $student) {
                    $sql = 'select index_number from  students_table where id=:id';
                    $stmt = $connection->prepare($sql);
                    $p = [':id' => $student->student_id];
                    $stmt->execute($p);

                    if ($index_number = $stmt->fetchAll(\PDO::FETCH_OBJ)) {
                      $index_number = $index_number[0];
                    }
                    echo "
                        <tr>
                    <td style='padding:5px;'>$student->firstname $student->lastname</td>
                    <td style='padding:5px;'>
                          $index_number->index_number
                        
                  
                    
                    
                    </td>
                    <td style='padding:5px;'><a href='#'>
                        <div class='file-top'><i class='fa fa-file-pdf-o txt-primary pdfcolor'></i> registration.pdf</div>
                      </a></td>
                  </tr>
                        ";
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