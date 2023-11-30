

<?php
include "../../../connection.php";

$transaction_id = $_GET['transact_id'] ?? NULL;
$student_id = $_GET['id'] ?? null;

$sql = 'select * from  fee_payment_list where payment_accepted = 1 AND transaction_id=:transaction_id AND student_id=:student_id ';

$stmt = $connection->prepare($sql);
$p = [
    ':transaction_id' => $transaction_id,
    ':student_id' => $student_id,


];

$stmt->execute($p);

if ($students = $stmt->fetchAll(\PDO::FETCH_OBJ)) {
    $student = $students[0];
}




?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PRINT RECEIPT</title>
    <link rel="stylesheet" href="../../../assets/css/print_recipt.css">

</head>

<body>

    <div class="container">

        <div class="content">
            <div class="hero pad ">
                <span class="float float_1"> </span>
                <span class="float float_2"> </span>
                <div class="flex-2-between hero-head addfont">
                    <span class="inscript">
                        OFFICIAL RECIEPT

                    </span>
                    <span>
                        <div class="flex-50 flex"><span class="img"><img src="../../../images/pclogo.jpg" alt="logo"></span> <span class="margin-l-5"> PREMPEH COLLEGE</span> </div>
                        <div> official student fees reciept</div>
                    </span>


                </div>

                <div class="w-50 description addfont">
                    <div class="flex-2-between mb-5">
                        <span>DATE</span>
                        <span>RECEIPT NUMBER</span>
                    </div>
                    <div class="flex-2-between mb-45">
                        <span>
                            <?php
                            $date = date_create($student->paid_at ?? NULL);

                            $date = date_format($date, 'jS F Y');
                            echo $date;


                            ?>


                        </span>
                        <span><?php echo "cls_";
                                print(str_pad($student->id ?? NULL, 4, '0', STR_PAD_LEFT)); ?></span>
                    </div>


                    <div class='mb-5'>RECEIPT FOR </div>
                    <div><span style="text-transform: uppercase;">
                            <?php

                            print($student->firstname ?? NULL);
                            echo " ";
                            print($student->lastname ?? NULL);
                            ?>
                        </span>
                        as full payment of school fess for 2021 Academic year </div>

                </div>




            </div>

            <div class="pad">
                <div class="mb-25 addfont">
                    <div class="flex-2-between thead mb-5 ">
                        <span>DESCRIPTION</span>
                        <span>AMOUNT</span>
                    </div>
                    <div class="flex-2-between mb-5">
                        <span>sport dues</span>
                        <span class="amount">&#8373 50.00</span>
                    </div>
                    <div class="flex-2-between mb-5">
                        <span>tuition</span>
                        <span class="amount ">&#8373 18,00.00</span>
                    </div>
                    <div class="flex-2-between mb-5">
                        <span>src due</span>
                        <span class="amount">&#8373 50.00</span>
                    </div>


                </div>
                <div class="w-100 grid-center h-60 adbg addfont">
                    <span class="total-amount h-60  p-10 flex-2-between flex" style="width: 200px;">
                        <span>Total Paid</span>
                        <span>GH&#8373 <?php
                                        echo $student->amount ?? NULL;
                                        ?></span>

                    </span>
                </div>


            </div>

            <div class="pad">
                <div class="w-100 flex-right ">
                    <span class="transaction-foot">
                        <div class="theadnotfont mb-5 text-center">
                            BANK TRANSACTION

                        </div>
                        <div class="flex-2-between mrl-5">
                            <span class="margin-r-5">transaction id: </span>
                            <span><?php
                                    echo $student->transaction_id ?? " nothing here ";
                                    ?></span>

                        </div>
                        <div class="flex-2-between mrl-5">
                            <span class="margin-r-5">Reg no.: </span>
                            <span><?php
                                    echo $student->index_number ?? "nothing";
                                    ?></span>

                        </div>
                    </span>

                </div>



            </div>





        </div>


    </div>
    <!-- <button id="print" value='Print' onclick="printpage()">print</button> -->

    <script>
        function printpage() {

            var title = document.title;
            var divElements = document.querySelector('.container').innerHTML;
            var printWindow = window.open("", "_blank", "");

            printWindow.document.open();

            printWindow.document.write('<html><head><title>' + title + '</title><link rel="stylesheet" type="text/css" href="../../../assets/css/print_recipt.css"></head><body>');
            printWindow.document.write(divElements);
            printWindow.document.write('</body></html>');
            printWindow.document.close();
            printWindow.focus();

            setTimeout(function() {
                printWindow.print();
                printWindow.close();
            }, 100);
        }

        // printpage();
    </script>
</body>

</html>