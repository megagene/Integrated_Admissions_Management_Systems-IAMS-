<?php
include "header.php";

?>


<!-- Page Sidebar Ends-->
<div class="page-body">
  <div class="container-fluid">
    <div class="page-title">
      <div class="row">
        <div class="col-6">
          <h3>Send Mail</h3>
        </div>
        <div class="col-6">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html"> <i data-feather="home"></i></a></li>
            <li class="breadcrumb-item active"> Send Mail</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!-- Container-fluid starts-->
  <div class="container-fluid">
    <div class="email-wrap">
      <div class="row">
        <div class="col-xl-12 col-md-6">
          <div class="email-right-aside">
            <div class="card email-body">
              <div class="row">
                <div class="col-xl-12 col-md-12 box-md-12 pl-0">
                  <div class="email-right-aside">
                    <div class="email-body radius-left">
                      <div class="ps-0">
                        <div class="tab-content">
                          <div class="tab-pane fade active show" id="pills-darkhome" role="tabpanel" aria-labelledby="pills-darkhome-tab">
                            <div class="email-compose">
                              <div class="email-top compose-border">
                                <div class="row">
                                  <div class="col-sm-8 xl-70">
                                    <h4 class="mb-0">New Message</h4>
                                  </div>
                                  <div class="col-sm-4 btn-middle xl-30">
                                    <button class="btn btn-primary btn-block btn-mail text-center mb-0 mt-0 w-100" style="float: right;" type="button"><i class="fa fa-paper-plane me-2"></i> SEND</button>
                                  </div>
                                </div>
                              </div>
                              <div class="email-wrapper">
                                <form class="theme-form">
                                  <div class="mb-3">
                                    <label class="col-form-label pt-0" for="exampleInputEmail1">To</label>
                                    <input class="form-control" name="receiveremail" id="exampleInputEmail1" type="email">
                                  </div>
                                  <div class="mb-3">
                                    <label for="exampleInputPassword1">Subject</label>
                                    <input class="form-control" name="subject" id="exampleInputText" type="text">
                                  </div>
                                  <div class="mb-3">
                                    <label class="text-muted">Message</label>
                                    <textarea id="text-box" name="message" cols="10" rows="3"> </textarea>
                                  </div>
                                  <div>
                                    <label for="attachment">Add Attachment</label>
                                    <input class="form-control" name="attachment" style="width: 350px;" type="file">
                                  </div>
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
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Container-fluid Ends-->
</div>
</div>


<?php
include "foot.php";

?>