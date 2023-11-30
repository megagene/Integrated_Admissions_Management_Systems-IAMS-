<?php
session_start();
require_once "../../../connection.php";

if (!isset($_SESSION['auth'])) {
header("location:   /IAMS/index.html");
}



require_once "../../../util.php";




$sql = 'select * from applicants_data where applicant_id = :applicant_id';
$stmt = $connection->prepare($sql);
$p = [':applicant_id' => $_SESSION['auth']['id']];
$stmt->execute($p);

if ($results = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {

    //   unset($results[0]['id']);
    $result = $results[0];
    $sql = 'select * from students_table where applicants_data_id = :id';
    $stmt = $connection->prepare($sql);
    $p = [':id' => $result['id']];
    $stmt->execute($p);
    if ($students = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {
        $student = $students[0];
    }
}


?>
<html>


<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>

<head>

    <link rel="stylesheet" href="../../../assets/css/registeration_form.css">
    <title> <?php isset($_SESSION['auth']) ? print($_SESSION['auth']['username'] . ' admission form') : print('admission form') ?></title>


    <script src="../../../assets/js/jquery-3.5.1.min.js"></script>



</head>

<body>



    <div class="container">


        <form>
            <fieldset>
                <div class="header">ADMISSION FORM</div>
                <div class="">
                    <div class="grid-2">
                        <div class="schooldetails">
                            <nav id="logo">
                                <img src="/IAMS/images/pclogo.jpg" alt="">

                            </nav>
                            <nav id="info">
                                <div>
                                    Name of school
                                </div>
                                <div>
                                    P.O BOX AS 234234
                                </div>
                                <div>
                                    Aberka - tesano
                                </div>
                                <div>
                                    tel: 0305458555
                                </div>

                            </nav>


                        </div>
                        <div class="passportholder">
                            <img src="
                            <?php



                            $path = "../../../public/images/passport/";
                            if (isset($student['passport'])) {


                                print($path . $student['passport'] . "?" . mt_rand());
                            } else {
                                print($path . "avatar.svg");
                            }





                            ?>" class="passport"></img>
                        </div>
                    </div>


                    <div id="admission_citation">
                        <p>
                            <span class="informative"> <?php print(issetnull($result, 'salutation'))  ?> <?php print(issetnull($student, 'firstname') . " " . issetnull($student, 'lastname'))?></span> The Administration of Prempeh College have hereby accepted your admission to persue <span class="informative"><?php print(issetnull($result, 'application'))  ?></span>
                            in <span class="informative"> <?php print(issetnull($result, 'firstchoice_p'))  ?></span>.

                        </p>

                        <p>
                            You are hereby noted to be available for matriculation. Lectures for you and your year group will begin
                            in first week of <span class="informative"><?php print(issetnull($result, 'intake_p'))  ?> </span> .
                            For any further information contact the school administration.


                        </p>

                        <p>
                            You are also encouraged to visit the student portal for any further procedures.<br>
                            Below are some information you might need
                        </p>


                    </div>




            </fieldset>
            <fieldset style="margin-top: 30px; ">
                <div class="header">Admission Info</div>
                <nav class="flex"><label for="application">Admitted for :</label>
                    <input type="text" name="application" id="" value="<?php isset($results[0]['application']) ? print($results[0]['application']) : NULL;  ?>">
                </nav>
                <nav class="flex"><label for="firstchoice">program :</label>
                    <input type="text" name="firstchoice" id="" value="<?php isset($results[0]['firstchoice_p']) ? print($results[0]['firstchoice_p']) : NULL;  ?>">
                </nav>
                <nav class="flex"><label for="secondchoice">Index Number :</label>
                    <input type="text" name="secondchoice" id="" value="<?php print(issetnull($student, 'index_number'))  ?>">
                </nav>
                <nav class="flex"><label for="secondchoice">Student mail :</label>
                    <input type="text" name="secondchoice" id="" value="<?php print(issetnull($student, 'email'))  ?>">
                </nav>
                <nav class="flex"><label for="secondchoice">Password :</label>
                    <input type="text" name="secondchoice" id="" value="<?php print(issetnull($student, 'index_number'))  ?>">
                </nav>

                <div class="grid-2">
                    <nav class="flex"><label for="campus">campus :</label>
                        <input type="text" name="campus" id="" value="<?php isset($results[0]['campus_p']) ? print($results[0]['campus_p']) : NULL;  ?>">
                    </nav>
                    <nav class="flex"><label for="intake">intake :</label>
                        <input type="text" name="intake" id="" value="<?php isset($results[0]['intake_p']) ? print($results[0]['intake_p']) : NULL;  ?>">
                    </nav>
                    <nav class="flex"><label for="session">session :</label>
                        <input type="text" name="session" id="" value="<?php isset($results[0]['session_p']) ? print($results[0]['session_p']) : NULL;  ?>">
                    </nav>
                </div>


            </fieldset>
        </form>


    </div>




    <button id="print" value='Print' onclick="printpage()">print</button>


    <script>
        function printpage() {

            var title = document.title;
            var divElements = document.querySelector('.container').innerHTML;
            var printWindow = window.open("", "_blank", "");

            printWindow.document.open();

            printWindow.document.write('<html><head><title>' + title + '</title><link rel="stylesheet" type="text/css" href="../../../assets/css/registeration_form.css"></head><body>');
            printWindow.document.write(divElements);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.focus();

            setTimeout(function() {
                printWindow.print();
                printWindow.close();
            }, 100);
        }

        printpage();
    </script>




</body>

</html>