<?php
include "header.php";

$sql = 'select * from  students_table';
$stmt = $connection->prepare($sql);

$stmt->execute();

if ($students = $stmt->fetchAll(\PDO::FETCH_OBJ)) {
}

?>
<script class="result-template" type="text/x-handlebars-template">
    <div class="ProfileCard u-cf">
                        <div class="ProfileCard-avatar"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-airplay m-0"><path d="M5 17H4a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-1"></path><polygon points="12 15 17 21 7 21 12 15"></polygon></svg></div>
                        <div class="ProfileCard-details">
                            <div class="ProfileCard-realName">{{name}}</div>
                        </div>
                    </div>
                </script>
<script class="empty-template" type="text/x-handlebars-template">
    <div class="EmptyMessage">Your search turned up 0 results. This most likely means the backend is down, yikes!</div>
                </script>

<!-- Page Header Ends                              -->
<!-- Page Body Start-->

<!-- Page Sidebar Ends-->
<div class="page-body">
    <div class="container-fluid">
        <div class="page-title">
            <div class="row">
                <div class="col-6">
                    <h3>ID Cards List</h3>
                </div>
                <div class="col-6">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="index.html"><i data-feather="home"></i></a></li>
                        <li class="breadcrumb-item active">ID Cards</li>
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
                                        <th style='padding:10px'>Name</th>
                                        <th style='padding:10px'>Index Number</th>
                                        <th style='padding:10px'>ID Card</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   

                                            <?php 
                                                    foreach($students as $student){

                                                        echo "
                                                         <tr>
                                      <td style='padding:10px'>$student->firstname $student->lastname</td>
                                        <td style='padding:10px'>$student->index_number</td>
                                        <td style='padding:10px'>
                                            <a target='_blank' href='print_id_card.php?id=$student->id'>
                                                <div class='file-top'><i class='fa fa-image txt-primary'></i> $student->firstname $student->lastname id-card</div>
                                            </a>
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