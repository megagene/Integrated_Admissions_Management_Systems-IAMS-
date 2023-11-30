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



?>



<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bank Details</title>

  <!-- Google Font: Source Sans Pro -->

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
            <h1>Enter Banking Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Enter Banking Details</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="card card-primary card-outline" style="width: 100%;">
            <div class="card-header">
              <h3 class="card-title">Banking Details</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form action="../../models/student/fee_payment.php" method="POST">
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Index Number</label>
                      <input type="text" name="index_number" class="form-control" placeholder="040927673"
                        value="<?php 
                            isset($_SESSION['auth_student']['index_number'])? print($_SESSION['auth_student']['index_number']): NULL;
                        
                        ?>" 
                      >
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Transaction Number</label>
                      <input type="text" name="transaction_id" class="form-control" placeholder="22284-TT212366KL8W">
                    </div>
                  </div>
                </div>
                <?php

                isset($_SESSION['required'])? print("<div style='color:#f30100; '>". $_SESSION['required']." </div>"): NULL;
                      unset($_SESSION['required']);
                ?>
                    
                <div class="form-group">
                  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
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