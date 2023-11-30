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

$sql = 'select * from  fee_payment_list where student_id =:student_id';
$stmt = $connection->prepare($sql);
$p = [':student_id' => $_SESSION['auth_student']['id']];
$stmt->execute($p);

if ($transactions = $stmt->fetchAll(\PDO::FETCH_OBJ)) {

  $transaction = $transactions[0];
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Fees Payment</title>

  <?php
  include "header.php";
  ?>
  <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Fees Payment</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Fees Payment</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-body pad table-responsive" style="margin: 0 auto !important;">
                <table class="table table-bordered text-center">
                  <tr>
                    <td>
                      <a href="bank-details.php" class="btn btn-block btn-primary btn-lg">Enter Banking Details</a>
                    </td>
                    <td>
                      <a href="/IAMS/views/forms/admin/print_receipt.php" class="btn btn-block btn-primary btn-lg">View Payment Receipt</a>
                    </td>
                  </tr>
                </table>
              </div>
              <!-- <div> <?php
                          print_r($transaction);


                          ?></div> -->
              <!-- /.card -->
            </div>
          </div>
          <!-- /.col -->
        </div>


        <div class='row'>
          <div class='col-md-12'>
            <div class='card card-primary '>
              <div class='card-body pad table-responsive' style='margin: 0 auto !important;'>

                <div class='col-sm-6 '>
                  <h2>Transaction History</h2>
                </div>
                <table class='table table-bordered text-center'>

                  <tr>
                    <th>transaction id</th>
                    <th>Transaction time</th>
                    <th>status</th>

                  </tr>
                  <?php if($transactions !=null){
                    $date = date_create($transaction->paid_at);
                   
                     $date= date_format($date, ' jS F Y  g:ia ');
                    
                    
                    foreach($transactions as $transaction){
                          if($transaction->payment_accepted == 0){
                            $status = 'on process';

                          }elseif($transaction->payment_accepted == 1){
                        $status = "<span>paid</span> <span><i style='color: greenyellow;' class='fa fa-check fa-lg accept'>";
                          } elseif ($transaction->payment_accepted == 2) {
                        $status = 'payment decline';
                      }else{
                        $status = 'not availabe';
                      }

                      echo "
                       <tr>
                    <td>
                     $transaction->transaction_id
                    </td>
                    <td>
                     $date
                    </td>
                    <td>
                       $status
                    </td>
                  </tr>
                      ";
                    }
                

                  }else{
                    echo " <tr><td>nothing to display</td>
                                <td>nothing to display</td>
                                <td>nothing to display</td>
                    </tr>";

                  }
                  
                  
                  ?>
                 
                </table>

              </div>

            </div>
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