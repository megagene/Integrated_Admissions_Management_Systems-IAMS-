<?php 
session_start();
include "../../../connection.php";
// die($_SESSION['auth_student']['firstname']);
if (isset($_POST['submit'])) {
    $student_id = $_SESSION['auth_student']['id'];
    $paid_at = date('Y-m-d H:i:s');
    $firstname = $_SESSION['auth_student']['firstname'];
    $lastname = $_SESSION['auth_student']['lastname'];
    $index_number = $_SESSION['auth_student']['index_number'];
    $transaction_id = trim($_POST['transaction_id']);
    $amount = 1900;

        if(!empty($_POST['index_number']) && !empty($_POST['transaction_id'])){

        $sql = 'select * from fee_payment_list where transaction_id = :transaction_id';
        $stmt = $connection->prepare($sql);
        $p = [':transaction_id' => $transaction_id];
        $stmt->execute($p);


        if ($stmt->rowCount() == 0) {
        $sql = "INSERT INTO fee_payment_list(student_id,firstname,lastname, index_number,transaction_id, amount, paid_at) VALUES (:student_id,:firstname,
        :lastname,:index_number,:transaction_id,:amount,:paid_at)";


            try {
                $handler = $connection->prepare($sql);
                $params = [
                    ':student_id' => $student_id,
                    ':firstname' => $firstname,
                    ':lastname' => $lastname,
                    ':index_number' => $index_number,
                    ':transaction_id' => $transaction_id,
                    ':amount' => $amount,
                    ':paid_at' => $paid_at,


                ];
                $handler->execute($params);
                header('location: /IAMS/views/forms/student/fee-payment.php');
            } catch (PDOException $e) {
                $errors = $e->getMessage();
                echo ($errors);
            }


        } else {
            $_SESSION['required'] = 'transaction id already used';
            header("location: /IAMS/views/forms/student/bank-details.php");
        }




       




        }else{
            $_SESSION['required'] = 'all fields are required *';
        header("location: /IAMS/views/forms/student/bank-details.php");

        }






    
}else{

    header("location: /IAMS/views/forms/student/bank-details.php");

    

}