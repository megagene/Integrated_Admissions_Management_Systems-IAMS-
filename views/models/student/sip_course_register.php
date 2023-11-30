<?php 

session_start();
require_once "../../../connection.php";

if (isset($_POST['submit'])) {
   
    $firstname = $_SESSION['auth_student']['firstname'];
    $lastname = $_SESSION['auth_student']['lastname'];
    $course_one = isset($_POST['course'][0]) ? trim($_POST['course'][0]) : NULL;
    $course_two = isset($_POST['course'][1]) ? trim($_POST['course'][1]) : NULL;
    $course_three = isset($_POST['course'][2]) ? trim($_POST['course'][2]) : NULL;
    $course_four = isset($_POST['course'][3]) ? trim($_POST['course'][3]) : NULL;
    $course_five = isset($_POST['course'][4]) ? trim($_POST['course'][4]) : NULL;
    $course_six = isset($_POST['course'][5]) ? trim($_POST['course'][5]) : NULL;
    $course_seven = isset($_POST['course'][6]) ? trim($_POST['course'][6]) : NULL;
    $course_eight = isset($_POST['course'][7]) ? trim($_POST['course'][7]) : NULL;
    $course_nine = isset($_POST['course'][8]) ? trim($_POST['course'][8]) : NULL;
    $course_ten = isset($_POST['course'][9]) ? trim($_POST['course'][9]) : NULL;
    // die($course_one);

    $sql = 'select * from course_enroll_list where student_id = :student_id';
    $stmt = $connection->prepare($sql);
    $p = [':student_id' => $_SESSION['auth_student']['id']];
    $stmt->execute($p);


    if ($stmt->rowCount() == 0) {


        $sql = "INSERT INTO course_enroll_list ( student_id,firstname, lastname,course_one,course_two,course_three,course_four,course_five,
course_six,course_seven,course_eight,course_nine)
 VALUES ( :student_id ,:firstname, :lastname,
 :course_one,:course_two,:course_three,:course_four,
 :course_five,:course_six ,:course_seven,:course_eight,:course_nine)";


        try {
            $handler = $connection->prepare($sql);
            $params = [
                ':student_id' => $_SESSION['auth_student']['id'],
                ':course_one' => $course_one,
                ':firstname' =>$firstname,
                ':lastname' => $lastname,
                ':course_two' => $course_two,
                ':course_three' => $course_three,
                ':course_four' => $course_four,
                ':course_five' => $course_five,
                ':course_six' => $course_six,
                ':course_seven' => $course_seven,
                ':course_eight' => $course_eight,
                ':course_nine' => $course_nine,


            ];
            $handler->execute($params);
            header('location: /IAMS/views/forms/student/sip_course.php');
        } catch (PDOException $e) {
            $errors = $e->getMessage();
            echo ($errors);
        }
    } else {

        $sql = "UPDATE  course_enroll_list SET 
     course_one=:course_one,course_two=:course_two,firstname=:firstname, lastname=:lastname,course_three=:course_three,course_four=:course_four,course_five=:course_five,
        course_six=:course_six,course_seven=:course_seven,course_eight=:course_eight,course_nine=:course_nine
            WHERE student_id=:student_id";


        try {
            $handler = $connection->prepare($sql);
            $params = [
                ':student_id' => $_SESSION['auth_student']['id'],
                ':firstname' => $firstname,
                ':lastname' => $lastname,
                ':course_one' => $course_one,
                ':course_two' => $course_two,
                ':course_three' => $course_three,
                ':course_four' => $course_four,
                ':course_five' => $course_five,
                ':course_six' => $course_six,
                ':course_seven' => $course_seven,
                ':course_eight' => $course_eight,
                ':course_nine' => $course_nine,

            ];
            $handler->execute($params);
            header('location: /IAMS/views/forms/student/sip_course.php');
        } catch (PDOException $e) {
            $errors = $e->getMessage();
            echo ($errors);
        }
    }
}
