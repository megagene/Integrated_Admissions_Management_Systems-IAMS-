<?php
session_start();
require_once "../../../connection.php";
include "../../models/applicants/select_applicants_table.php";
if (!isset($_SESSION['auth'])) {

    header("location:   /IAMS/index.html");
}
?>
<html>


<meta http-equiv='cache-control' content='no-cache'>
<meta http-equiv='expires' content='0'>
<meta http-equiv='pragma' content='no-cache'>

<head>

    <link rel="stylesheet" href="../../../assets/css/registeration_form.css">
    <title> <?php isset($_SESSION['auth']) ? print($_SESSION['auth']['username'] . ' registeration form') : print('admission form') ?></title>


    <script src="../../../assets/js/jquery-3.5.1.min.js"></script>



</head>

<body>



    <div class="container">

        <form>
            <fieldset>
                <div class="header">personal</div>
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


                            $sql = 'select passport from applicants_documents where applicants_id = :applicants_id';
                            $stmt = $connection->prepare($sql);
                            $p = [':applicants_id' => $_SESSION['auth']['id']];
                            $stmt->execute($p);
                            $path = "../../../public/images/passport/";
                            if ($img = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {


                                print($path . $img[0]['passport'] . "?" . mt_rand());
                            } else {
                                print($path . "avatar.svg");
                            }





                            ?>" class="passport"></img>
                        </div>
                        <nav class="flex"><label for="firstname">first Name :</label>
                            <input type="text" name="firstname" id="" value="<?php isset($results[0]['firstname']) ? print($results[0]['firstname']) : NULL;  ?>">
                        </nav>
                        <nav class="flex"><label for="lastname">last Name :</label>
                            <input type="text" name="lastname" id="" value="<?php isset($results[0]['lastname']) ? print($results[0]['lastname']) : NULL;  ?>">
                        </nav>

                        <nav class="flex"><label for="dob" style="display:flex; flex-wrap:nowrap; align-items:center; "><span> Date of birth</span> <span>:</span> </label>
                            <input type="text" name="dob" id="" value="<?php isset($results[0]['dateofbirth']) ? print($results[0]['dateofbirth']) : NULL;  ?>">
                        </nav>
                        <nav class="flex"><label for="gender">gender :</label>
                            <input type="text" name="gender" id="" value="<?php isset($results[0]['gender']) ? print($results[0]['gender']) : NULL;  ?>">
                        </nav>
                        <nav class="flex"><label for="marital">Marital Status :</label>
                            <input type="text" name="marital" id="" value="<?php isset($results[0]['martialstatus']) ? print($results[0]['martialstatus']) : NULL;  ?>">
                        </nav>
                        <nav class="flex"><label for="homeregion">Home region :</label>
                            <input type="text" name="homeregion" id="" value="<?php isset($results[0]['homeregion']) ? print($results[0]['homeregion']) : NULL;  ?>">
                        </nav>
                        <nav class="flex"><label for="street">street :</label>
                            <input type="text" name="street" id="" value="<?php isset($results[0]['street']) ? print($results[0]['street']) : NULL;  ?>">
                        </nav>
                        <nav class="flex"><label for="residentialaddress">residential add :</label>
                            <input type="text" name="residentialaddress" id="" value="<?php isset($results[0]['residentialaddr']) ? print($results[0]['residentialaddr']) : NULL;  ?>">
                        </nav>
                        <nav class="flex"><label for="postaddress">post address :</label>
                            <input type="text" name="postaddress" id="" value="<?php isset($results[0]['postaddr']) ? print($results[0]['postaddr']) : NULL;  ?>">
                        </nav>
                        <nav class="flex"><label for="city">city :</label>
                            <input type="text" name="city" id="" value="<?php isset($results[0]['city']) ? print($results[0]['city']) : NULL;  ?>">
                        </nav>
                        <nav class="flex"><label for="country">country :</label>
                            <input type="text" name="country" id="" value="<?php isset($results[0]['country']) ? print($results[0]['country']) : NULL;  ?>">
                        </nav>

                        <nav class="flex"><label for="religion">religion </label>
                            <input type="text" name="religion" id="" value="<?php isset($results[0]['religion']) ? print($results[0]['religion']) : NULL;  ?>">
                        </nav>
                        <nav class="flex"><label for="occupation">occupation :</label>
                            <input type="text" name="occupation" id="" value="<?php isset($results[0]['occupation']) ? print($results[0]['occupation']) : NULL;  ?>">
                        </nav>
                        <nav class="flex"><label for="disability">disability :</label>
                            <input type="text" name="contact" id="" value="<?php isset($results[0]['disability']) ? print($results[0]['disability']) : NULL;  ?>">
                        </nav>
                        <nav class="flex"><label for="contact">contact :</label>
                            <input type="text" name="disability" id="" value="<?php isset($results[0]['contact']) ? print("0" . $results[0]['contact']) : NULL;  ?>">
                        </nav>
                        <nav class="flex"><label for="email">email :</label>
                            <input type="text" style=" text-transform:lowercase; " name="email" id="" value="<?php isset($results[0]['email']) ? print($results[0]['email']) : NULL;  ?>">
                        </nav>

                    </div>
                </div>




            </fieldset>
            <fieldset style="margin-top: 30px; ">
                <div class="header">Application Info</div>
                <nav class="flex"><label for="application">applying for :</label>
                    <input type="text" name="application" id="" value="<?php isset($results[0]['application']) ? print($results[0]['application']) : NULL;  ?>">
                </nav>
                <nav class="flex"><label for="firstchoice">first choice :</label>
                    <input type="text" name="firstchoice" id="" value="<?php isset($results[0]['firstchoice_p']) ? print($results[0]['firstchoice_p']) : NULL;  ?>">
                </nav>
                <nav class="flex"><label for="secondchoice">second choice :</label>
                    <input type="text" name="secondchoice" id="" value="<?php isset($results[0]['secondchoice_p']) ? print($results[0]['secondchoice_p']) : NULL;  ?>">
                </nav>
                <nav class="flex"><label for="thirdchoice">third choice :</label>
                    <input type="text" name="thirdchoice" id="" value="<?php isset($results[0]['thirdchoice_p']) ? print($results[0]['thirdchoice_p']) : NULL;  ?>">
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