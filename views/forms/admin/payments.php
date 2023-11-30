<?php
include "header.php";

$sql = 'select * from  fee_payment_list where payment_accepted = 0';
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
          <h3>Payment List</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active">Payments</li>
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
                    <th style='padding:5px;'>contact</th>
                    <th style='padding:5px;'>Level</th>
                    <th style='padding:5px;'>Amount</th>
                    <th style='padding:5px;'>transaction time</th>
                    <th style='padding:5px;'>transaction id</th>
                    <th style='padding:5px;'>action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php

                 

                  foreach ($students as $student) {
                    $date = date_create($student->paid_at);

                    $date = date_format($date, ' j F Y');
                    $sql = 'select * from  students_table where id=:id';
                    $stmt = $connection->prepare($sql);
                    $p = [':id' => $student->student_id];
                    $stmt->execute($p);

                    if ($meta_data = $stmt->fetchAll(\PDO::FETCH_OBJ)) {
                      $meta_data = $meta_data[0];
                    }

                    echo "
                              <tr>
                    <td style='padding:5px;'>$student->firstname $student->lastname</td>
                    <td style='padding:5px;'>$student->index_number</td>
                    <td style='padding:5px;'>0$meta_data->contact</td>
                    <td style='padding:5px;'>$meta_data->current_level</td>
                    <td style='padding:5px;'>GHS $student->amount</td>
                    <td style='padding:5px;'>$date </td>
                    <td style='padding:5px;'>$student->transaction_id</td>
                    <td style='padding:5px;'>
                      <form style='display:inline; margin-right:3px;' action='../../models/admin/process_payment.php' method='POST'>
                        <input type='hidden' name='transaction_id' value=$student->transaction_id >
                        <button name='accept' style='padding: 0; outline:none ; border:none; display:inline; margin:0;' type='submit'><i class='fa fa-check fa-lg accept'></i></button>
                      </form>

                      <form style='display:inline;' action='../../models/admin/process_payment.php' method='POST'>
                        <input type='hidden' name='transaction_id' value=$student->transaction_id>
                        <button name='decline' style='padding: 0; outline:none ; border:none; display:inline; margin:0;' type='submit'><i class='fa fa-times fa-lg decline'></i></button>
                      </form>
                    </td>

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