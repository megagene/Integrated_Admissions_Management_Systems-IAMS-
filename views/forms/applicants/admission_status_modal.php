<?php
require_once "../../../connection.php";
require "../../../util.php";


$iscompleted=0;
$sql = 'select * from applicants_data where applicant_id = :applicant_id';
$stmt = $connection->prepare($sql);
$p = [':applicant_id' => $_SESSION['auth']['id']];
$stmt->execute($p);

if ($results = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {

    unset($results[0]['id']);
    $appresult = $results[0];
    $iscompleted = issetnull($appresult, 'iscompleted');
    $isadmitted = issetnull($appresult, 'isadmitted');
}
?>




<div class="modal " id="appstatusmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Application Status</h5>
                <button type="btn btn-primary " onclick="$('#appstatusmodal').modal('toggle');" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">


                <?php
                if (isset($iscompleted)) {

                    $iscompleted == 1 ? print(" <li> <span>submitted</span> <span><i style='color: greenyellow;' class='fa fa-check fa-lg accept'></i></span>") : print("  <li> <span>submitted</span> <span style='color: red'><i class='fa fa-times fa-lg decline'></i></span>");
                }


                ?>
                </li>



                <li class="
            <?php $iscompleted != 1 ? print('d-none') : NULL  ?>
          
          ">




                    <?php
                    if ($iscompleted == 1 &&  $isadmitted == 0) {
                        echo " <span>on processing...</span>  <div style='color: blue;' class='spinner-border spinner-border-sm' role='status'>
              <span class='sr-only'>Loading...</span>
            </div>";
                    } elseif ($iscompleted == 1 &&  ($isadmitted == 1 || $isadmitted == 2)) {

                        echo "<span>processed</span> <span><i style='color: greenyellow;' class='fa fa-check fa-lg accept'></i></span>";
                    }
                    ?>


                </li>
                <li class="
            <?php
            if ($iscompleted != 1 && ($isadmitted != 1 || $isadmitted != 2)) {
                print("d-none");
            } else {
                NULL;
            }

            ?>
          
          ">
                    <?php
                    if ($isadmitted == 1) {
                        echo "<span>admitted</span> <span><i style='color: greenyellow;' class='fa fa-check fa-lg accept'></i></span>";
                    } elseif ($isadmitted == 2) {
                        echo "<span>admitted</span>  <span style='color: red'><i class='fa fa-times fa-lg decline'></i></span>";
                    }
                    ?>





                </li>
                <!-- <li> <span>rejected</span> <span style='color: red'><i class='fa fa-times fa-lg decline'></i></span> </li> -->
            </div>
            <div class="modal-footer">
                <?php
             

                if (isset($isadmitted)) {

                    $isadmitted == 1 ? print("<a target='_blank' href='print_admission_form.php' class='btn btn-primary'>Print Admission Letter</a>") :NULL;
                }
                ?>

            </div>
        </div>
    </div>
</div>