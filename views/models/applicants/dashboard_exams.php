<?php
session_start();
require_once "../../../connection.php";

if (isset($_POST['submit'])) {
    $examtype = trim($_POST['examtype']);
    $sitting = trim($_POST['sittng']);
    $examyear = trim($_POST['examyear']);
    $indexnumber = trim($_POST['indexnumber']);
    $course_one = isset($_POST['course'][0]) ? trim($_POST['course'][0]) : NULL;
    $grade_one = isset($_POST['grade'][0]) ? trim($_POST['grade'][0]) : NULL;
    $course_two = isset($_POST['course'][1]) ? trim($_POST['course'][1]) : NULL;
    $grade_two = isset($_POST['grade'][1]) ? trim($_POST['grade'][1]) : NULL;
    $course_three = isset($_POST['course'][2]) ? trim($_POST['course'][2]) : NULL;
    $grade_three = isset($_POST['grade'][2]) ? trim($_POST['grade'][2]) : NULL;
    $course_four = isset($_POST['course'][3]) ? trim($_POST['course'][3]) : NULL;
    $grade_four = isset($_POST['grade'][3]) ? trim($_POST['grade'][3]) : NULL;
    $course_five = isset($_POST['course'][4]) ? trim($_POST['course'][4]) : NULL;
    $grade_five = isset($_POST['grade'][4]) ? trim($_POST['grade'][4]) : NULL;
    $course_six = isset($_POST['course'][5]) ? trim($_POST['course'][5]) : NULL;
    $grade_six = isset($_POST['grade'][5]) ? trim($_POST['grade'][5]) : NULL;
    $course_seven = isset($_POST['course'][6]) ? trim($_POST['course'][6]) : NULL;
    $grade_seven = isset($_POST['grade'][6]) ? trim($_POST['grade'][6]) : NULL;
    $course_eight = isset($_POST['course'][7]) ? trim($_POST['course'][7]) : NULL;
    $grade_eight = isset($_POST['grade'][7]) ? trim($_POST['grade'][7]) : NULL;
    $course_nine = isset($_POST['course'][8]) ? trim($_POST['course'][8]) : NULL;
    $grade_nine = isset($_POST['grade'][8]) ? trim($_POST['grade'][8]) : NULL;
    $course_ten = isset($_POST['course'][9]) ? trim($_POST['course'][9]) : NULL;
    $grade_ten = isset($_POST['grade'][9]) ? trim($_POST['grade'][9]) : NULL;

    $sql = 'select * from applicants_exams where applicants_id = :applicants_id';
    $stmt = $connection->prepare($sql);
    $p = [':applicants_id' => $_SESSION['auth']['id']];
    $stmt->execute($p);


    if ($stmt->rowCount() == 0) {


        $sql = "INSERT INTO applicants_exams ( applicants_id, exams_type, sitting, exams_year,index_number,course_one,grade_one,course_two,grade_two,course_three,grade_three,course_four,grade_four,course_five,grade_five,
course_six,grade_six,course_seven,grade_seven,course_eight,grade_eight,course_nine,grade_nine,course_ten,grade_ten)
 VALUES ( :applicants_id,:exams_type,:sitting,:exams_year,:index_number,
 :course_one,:grade_one,:course_two,:grade_two,:course_three,:grade_three,:course_four,
 :grade_four,:course_five,:grade_five,:course_six ,:grade_six,:course_seven,:grade_seven,:course_eight,:grade_eight,:course_nine,:grade_nine,
 :course_ten,:grade_ten)";


        try {
            $handler = $connection->prepare($sql);
            $params = [
                ':applicants_id' => $_SESSION['auth']['id'],
                ':exams_type' => $examtype,
                ':sitting' => $sitting,
                ':exams_year' => $examyear,
                ':index_number' => $indexnumber,
                ':course_one' => $course_one,
                ':grade_one' => $grade_one,
                ':course_two' => $course_two,
                ':grade_two' => $grade_two,
                ':course_three' => $course_three,
                ':grade_three' => $grade_three,
                ':course_four' => $course_four,
                ':grade_four' => $grade_four,
                ':course_five' => $course_five,
                ':grade_five' => $grade_five,
                ':course_six' => $course_six,
                ':grade_six' => $grade_six,
                ':course_seven' => $course_seven,
                ':grade_seven' => $grade_seven,
                ':course_eight' => $course_eight,
                ':grade_eight' => $grade_eight,
                ':course_nine' => $course_nine,
                ':grade_nine' => $grade_nine,
                ':course_ten' => $course_ten,
                ':grade_ten' => $grade_ten,


            ];
            $handler->execute($params);
            header('location: /IAMS/views/forms/applicants/applicant_dashboard_form.php?content=programs');
        } catch (PDOException $e) {
            $errors = $e->getMessage();
            echo ($errors);
        }
    } else {

        $sql = "UPDATE  applicants_exams SET 
       exams_type=:exams_type, sitting=:sitting, exams_year=:exams_year,index_number=:index_number,course_one=:course_one,grade_one=:grade_one,course_two=:course_two,grade_two=:grade_two,course_three=:course_three,grade_three=:grade_three,course_four=:course_four,grade_four=:grade_four,course_five=:course_five,grade_five=:grade_five,
course_six=:course_six,grade_six=:grade_six,course_seven=:course_seven,grade_seven=:grade_seven,course_eight=:course_eight,grade_eight=:grade_eight,course_nine=:course_nine,grade_nine=:grade_nine,course_ten=:course_ten,grade_ten=:grade_ten
            WHERE applicants_id=:applicants_id";


        try {
            $handler = $connection->prepare($sql);
            $params = [
                ':applicants_id' => $_SESSION['auth']['id'],
                ':exams_type' => $examtype,
                ':sitting' => $sitting,
                ':exams_year' => $examyear,
                ':index_number' => $indexnumber,
                ':course_one' => $course_one,
                ':grade_one' => $grade_one,
                ':course_two' => $course_two,
                ':grade_two' => $grade_two,
                ':course_three' => $course_three,
                ':grade_three' => $grade_three,
                ':course_four' => $course_four,
                ':grade_four' => $grade_four,
                ':course_five' => $course_five,
                ':grade_five' => $grade_five,
                ':course_six' => $course_six,
                ':grade_six' => $grade_six,
                ':course_seven' => $course_seven,
                ':grade_seven' => $grade_seven,
                ':course_eight' => $course_eight,
                ':grade_eight' => $grade_eight,
                ':course_nine' => $course_nine,
                ':grade_nine' => $grade_nine,
                ':course_ten' => $course_ten,
                ':grade_ten' => $grade_ten,


            ];
            $handler->execute($params);
            header('location: /IAMS/views/forms/applicants/applicant_dashboard_form.php?content=programs');
        } catch (PDOException $e) {
            $errors = $e->getMessage();
            echo ($errors);
        }
    }
}
