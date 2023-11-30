<?php 
include "header.php";

?>

<!-- Page Sidebar Ends-->
        <div class="page-body">
          <div class="container-fluid">
            <div class="page-title">
              <div class="row">
                <div class="col-6">
                  <h3>
                     Add Student</h3>
                </div>
                <div class="col-6">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                    <li class="breadcrumb-item"><a href="students.html">Students</li></a>
                    <li class="breadcrumb-item active">Add Student </li>
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
                    <div class="form theme-form">
                      <form method="POST" action="">
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="mb-3">
                              <label>Full Name</label>
                              <input class="form-control" name="fullname" type="text" placeholder="Enter Full Name" required>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="mb-3">
                              <label>Index Number</label>
                              <input class="form-control" name="idnumber" type="text" placeholder="Enter Index Number" required>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="mb-3">
                              <label>Email</label>
                              <input class="form-control" name="idnumber" type="email" placeholder="Enter Email Address" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="mb-3">
                              <label>Phone Number</label>
                              <input class="form-control" name="phone" type="text" placeholder="Enter Phone Number" required>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="mb-3">
                              <label>Course</label>
                              <input class="form-control" type="text" name="course" placeholder="Enter Course" required>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="mb-3">
                              <label>Year</label>
                              <select class="form-control" name="year" required>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                              </select>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-sm-4">
                            <div class="mb-3">
                              <label>Session</label>
                              <select class="form-control" name="session" required>
                                <option value="Morning">Morning</option>
                                <option value="Evening">Evening</option>
                                <option value="Weekend">Weekend</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-sm-4">
                            <div class="mb-3">
                              <label>Upload Student Photo</label>
                              <input class="form-control" type="file" name="photo" required>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col">
                            <input class="btn btn-success me-3 text-end" style="float: right;" type="submit" name="submit" value="Add">
                          </div>
                        </div>
                      </form>
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
    


    <?php include "foot.php";?>