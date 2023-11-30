<?php
include "header.php";

$sql = 'select * from  fee_payment_list where payment_accepted = 1';
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
          <h3>Receipts List</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Receipts</li>
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
                    <th style="padding:5px;">Name</th>
                    <th style="padding:5px;">Index Number</th>
                    <th style="padding:5px;">contact</th>
                    <th style="padding:5px;">level</th>
                    <th style="padding:5px;">Receipt</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      foreach($students as $student){
                    $sql = 'select * from  students_table where id=:id';
                    $stmt = $connection->prepare($sql);
                    $p = [':id' => $student->student_id];
                    $stmt->execute($p);

                    if ($meta_data = $stmt->fetchAll(\PDO::FETCH_OBJ)) {
                      $meta_data = $meta_data[0];
                    }

                            echo "<tr>
                    <td style='padding:5px;'>$student->firstname $student->lastname</td>
                    <td style='padding:5px;'>$student->index_number</td>
                    <td style='padding:5px;'>0$meta_data->contact</td>
                    <td style='padding:5px;'>$meta_data->current_level</td>
                    <td style='padding:5px;'><a target='_blank' href='print_receipt.php?id=$student->student_id&transact_id=$student->transaction_id'>
                        <div class='file-top'><i class='fa fa-file-pdf-o txt-primary pdfcolor'></i> receipt.pdf</div>
                      </a></td>
                  </tr>";

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