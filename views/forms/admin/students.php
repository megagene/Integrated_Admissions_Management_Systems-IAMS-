<?php
include "header.php";

$sql = 'select * from  students_table';
$stmt = $connection->prepare($sql);

$stmt->execute();

if ($students = $stmt->fetchAll(\PDO::FETCH_OBJ)) {
}


?>
<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Students List</h3>

        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Students</li>
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
            <h5>Students</h5>
          </div>
          <div class="card-body">
            <div class="dt-ext table-responsive">
              <a class="btn btn-primary" href="add-student.php"><i class="fa fa-plus"></i> Add Student</a><br>
              <table class="display" id="export-button">
                <thead>
                  <tr>
                    <th style='padding:10px'>Name</th>
                    <th style='padding:10px'>Index Number</th>
                    <th style='padding:10px'>Email</th>
                    <th style='padding:10px'>Phone</th>
                    <th style='padding:10px'>Action</th>
                  </tr>
                </thead>
                <tbody>

                  <?php
                  foreach ($students as $student) {

                    echo "
                        
                      <tr >
                    <td style='padding:10px' > $student->firstname $student->lastname  </td>
                    <td style='padding:10px' >$student->index_number</td>
                    <td style='padding:10px' >$student->email</td>
                    <td  style='padding:10px'>0$student->contact</td>
                    <td style='padding:10px'><i data-feather='edit'></i><i data-feather='trash-2'></i></td>
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