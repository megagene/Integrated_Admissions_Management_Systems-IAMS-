<?php
session_start();


include "../../../connection.php";
include "../../../util.php";


if (!isset($_SESSION['admin_auth'])) {

    header("location: /IAMS/index.html");
}


$sql = 'select applicants_data_id from students_table where id=:id';
$stmt = $connection->prepare($sql);
$p = [':id' => $_GET['id']];
$stmt->execute($p);

if ($id = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {
    $id = $id[0]['applicants_data_id'];
    $sql = 'select firstchoice_p from applicants_data where id=:id';
    $stmt = $connection->prepare($sql);
    $p = [':id' => $id];
    $stmt->execute($p);

    if ($Program = $stmt->fetchAll(\PDO::FETCH_ASSOC)) {
        $Program = $Program[0]['firstchoice_p'];
    }
}



$sql = 'select * from students_table where id=:id';
$stmt = $connection->prepare($sql);
$p = [':id' => $_GET['id']];
$stmt->execute($p);

if ($students = $stmt->fetchAll(\PDO::FETCH_OBJ)) {
    $student = $students[0];
    $date = date_create($student->created_at);
    $date = date_format($date, 'Y');
    $valid = $date + 4;
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ID CARD</title>
    <link rel="stylesheet" href="../../../assets/css/print_id_card.css">
</head>

<body>


    <div class="container">

        <div class="front-end">
            <nav class="grid-3">
                <img src="
                    <?php
                    $img = "../../../public/images/passport/$student->passport";
                    print($img);
                    ?>
                
                " alt="">

                <nav class="inforamtive_holder"> <span> Name </span> <span class="informative"> <?php echo "$student->firstname $student->lastname"   ?></span> </nav>

                <nav class="inforamtive_holder"> <span> Index number </span> <span class="informative"> <?php echo "$student->index_number"   ?></span> </nav>
                <nav class="inforamtive_holder"> <span> valid until </span> <span class="informative"> <?php echo $valid; ?></span> </nav>




            </nav>
            <div class="missing_details">
                <p> <span class="informative"><?php echo "$Program" ?></span></p>
                <p>This is a property of a student from Prempeh College if found please call </p>
                <p>0300559877</p>

            </div>

        </div>


    </div>





</body>

</html>