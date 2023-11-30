<fieldset>

  <?php
  
  include "../../models/applicants/select_applicants_exams_table.php";
  ?>

  <form action="../../models/applicants/dashboard_exams.php" method="POST">
    <p style="text-align: center;"> Click on add to add more subjects.</p>
    <div class="row g-3">
      <div class="col-md-3">
        <select class="form-select" id="examtype" name="examtype" required="">
          <?php isset($results[0]['exams_type']) ? print("<option value=" . $results[0]['exams_type'] . ">" . $results[0]['exams_type'] . "</option>") : NULL;  ?>
          <option <?php isset($results[0]['exams_type']) ? NULL : print("selected=\" \"") ?> disabled="" value="">Exam Type</option>
          <option value="BECE (Ghanaian)">BECE (Ghanaian)</option>
          <option value="BECE (International)">BECE (International)</option>

        </select>
      </div>
      <div class="col-md-3">
        <select class="form-select" id="sittng" name="sittng" required="">
          <?php isset($results[0]['sitting']) ? print("<option value=" . $results[0]['sitting'] . ">" . $results[0]['sitting'] . "</option>") : NULL;  ?>
          <option <?php isset($results[0]['sitting']) ? NULL : print("selected=\" \"") ?> disabled="" value="">Sitting</option>
          <option value="May/June(School)">May/June(School)</option>
          <option value="Nov/Dec (Private)">Nov/Dec (Private)</option>
        </select>
      </div>
      <div class="col-md-3 mb-3">
        <input class="datepicker-here form-control digits" value="<?php isset($results[0]['exams_year']) ? print($results[0]['exams_year']) : NULL;  ?>" type="text" data-language="en" data-min-view="years" data-view="years" data-date-format="yyyy" id="examyear" name="examyear" required="" placeholder="Exam Year">
      </div>
      <div class="col-md-3 mb-3 ">
        <input class="form-control" value="<?php isset($results[0]['index_number']) ? print($results[0]['index_number']) : NULL;  ?>" id="indexnumber" name="indexnumber" type="text" required="" placeholder="Index Number">
      </div>
    </div>
    <div class="row g-3 input-group fieldGroup">
      <div class="col-md-3">
        <?php
        $firstcourse = isset($results[0]['course_one']) ? $results[0]['course_one'] : NULL;
        ?>
        <!-- <input type="text" name="course[]" class="form-control" placeholder="Enter Subject"/> -->
        <?php echo "<input type='text' name='course[]' placeholder='Enter Subject' class='form-control' value='$firstcourse'>";

        echo "</input>";  ?>

      </div>
      <div class="col-md-3">
        <?php
        echo " <select class='form-select'  id='grade' name='grade[]' required=''  >";
        isset($results[0]['grade_one']) ? print("<option value=" . $results[0]['grade_one'] . ">" . $results[0]['grade_one'] . "</option>") : NULL;



        echo " <option  value='' disabled   ";
        isset($results[0]['grade_one']) ? NULL : print(" selected='' ");
        echo ">";
        echo " Grade</option>";
        echo "<option value='1'>1</option>";
        echo "<option value='2'>2</option>";
        echo "<option value='3'>3</option>";
        echo " <option value='4'>4</option>";
        echo " <option value='5'>5</option>";
        echo " <option value='6'>6</option>";
        echo " <option value='7'>7</option>";
        echo " <option value='8'>8</option>";
        echo " <option value='9'>9</option>";




        echo " </select>";



        ?>




      </div>




      <div class="col-md-2 input-group-addon mb-3">
        <a href="javascript:void(0)" class="btn btn-success addMore"> Add</a>
      </div>
    </div>
    <!-- post more -->
    <?php
    $elements = [
      'courses' => array('course_two', 'course_three', 'course_four', 'course_five', 'course_six', 'course_seven', 'course_eight', 'course_nine', 'course_ten'),
      'grades' => array('grade_two', 'grade_three', 'grade_four', 'grade_five', 'grade_six', 'grade_seven', 'grade_eight', 'grade_nine', 'grade_ten')


    ];
    for ($index = 0; $index < sizeof($elements["courses"]); $index++) {

      $course = $elements['courses'][$index];
      $grade = $elements['grades'][$index];
      if (isset($results[0][$course])) {
        $getcourse = isset($results[0][$course]) ? $results[0][$course] : NULL;
        echo "<div class='row g-3 input-group fieldGroup'>";
        echo "<div class='col-md-3'>";
        echo "<input type='text' name='course[]' class='form-control' placeholder='Enter Subject' value='$getcourse '>";



        echo "</div>";
        echo "<div class='col-md-3'>";
        echo " <select class='form-select' id='grade' name='grade[]' required=''>";
        isset($results[0][$grade]) ? print("<option value=" . $results[0][$grade] . ">" . $results[0][$grade] . "</option>") : NULL;
        echo "<option  disabled=''  value=''>";
        isset($results[0][$grade]) ? NULL : print("selected=''");
        echo "Grade</option>";
        echo "<option value='1'>1</option>";
        echo "<option value='2'>2</option>";
        echo "<option value='3'>3</option>";
        echo " <option value='4'>4</option>";
        echo " <option value='5'>5</option>";
        echo " <option value='6'>6</option>";
        echo " <option value='7'>7</option>";
        echo " <option value='8'>8</option>";
        echo " <option value='9'>9</option>";
        echo "  </select>";
        echo " </div>";
        echo "<div class='col-md-2 input-group-addon mb-3'>";
        echo "<a href='javascript:void(0)' class='btn btn-danger remove'> Remove </a>";

        echo "</div>";
        echo "</div>";
      }
    }




    ?>


    <div class="f1-buttons">

      <!-- <button class="btn btn-primary btn-back" type="button" name ="back">Back</button> -->
      <a class="btn btn-primary" href="applicant_dashboard_form.php?content=guardian" type="button" name="save">previous</a>
      <button class="btn btn-primary" name="submit" type="submit">save and continue</button>
    </div>
  </form>
</fieldset>