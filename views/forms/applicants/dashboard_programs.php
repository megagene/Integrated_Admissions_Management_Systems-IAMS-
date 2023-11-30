<fieldset>

  <?php

  include "../../models/applicants/select_applicants_table.php";

  ?>

  <form action="../../models/applicants/dashboard_programs.php" method="POST">

    <div class="mb-2 p-b-20">
      <p>Choose programs you wish to pursue in order of preference. For every program, choose the Time Model that is most favourable to you.</p>
    </div>
    <div class="row g-3">
      <div class="col-md-4">
        <?php
        $firstchoice = $results[0]['firstchoice_p'];
        $secondchoice = $results[0]['secondchoice_p'];
        $thirdchoice = $results[0]['thirdchoice_p'];

        ?>
        <select class="form-select" id="firstchoice" name="firstchoice" required="">
          <?php isset($results[0]['firstchoice_p']) ? print("<option value='$firstchoice'>" . $results[0]['firstchoice_p'] . "</option>") : NULL;  ?>

          <option <?php isset($results[0]['firstchoice_p']) ? NULL : print("selected=\" \"") ?> disabled="" value="">First Choice Program</option>
          <option value="BUSINESS">BUSINESS</option>
          <option value="TECHNICAL STUDIES ">TECHNICAL STUDIES</option>
          <option value="INFORMATION COMMUNICATION TECHNOLOGY">INFORMATION COMMUNICATION TECHNOLOGY</option>
          <option value="GENERAL ARTS">GENERAL ARTS</option>
          <option value="HOME ECONOMICS">HOME ECONOMICS</option>
          <option value="GENERAL SCIENCE ">GENERAL SCIENCE</option>
          <option value="BUSINESS">BUSINESS</option>
          <option value="GENERAL SCIENCE">GENERAL SCIENCE</option>
          <option value="GENERAL SCIENCE">GENERAL SCIENCE</option>
          <option value="GENERAL SCIENCE">GENERAL SCIENCE</option>
          <option value="GENERAL SCIENCE">GENERAL SCIENCE</option>
          <option value="INFORMATION COMMUNICATION TECHNOLOGY">INFORMATION COMMUNICATION TECHNOLOGY</option>
          <option value="GENERAL ARTS">GENERAL ARTS</option>
          <option value="TECHNICAL STUDIES">TECHNICAL STUDIES</option>
          <option value="BUSINESS">BUSINESS</option>
          <option value="BUSINESS">BUSINESS</option>
          <option value="GENERAL ARTS ">GENERAL ARTS </option>
          <option value="BUSINESS">BUSINESS</option>
          <option value="TECHNICAL STUDIES">TECHNICAL STUDIES</option>
          <option value="HOME ECONOMICS">HOME ECONOMICS</option>
          <option value="GENERAL ARTS ">GENERAL ARTS </option>
          <option value="HOME ECONOMICS">HOME ECONOMICS</option>
          <option value="TECHNICAL STUDIES ">TECHNICAL STUDIES </option>
        </select>
      </div>
      <div class="col-md-4">
        <select class="form-select" id="secondtchoice" name="secondchoice" required="">
          <?php isset($results[0]['secondchoice_p']) ? print("<option value=' $secondchoice'>" . $results[0]['secondchoice_p'] . "</option>") : NULL;  ?>
          <option <?php isset($results[0]['secondchoice_p']) ? NULL : print("selected=\" \"") ?> disabled="" value="">Second Choice Program</option>
          <option value="BUSINESS">BUSINESS</option>
          <option value="TECHNICAL STUDIES ">TECHNICAL STUDIES </option>
          <option value="INFORMATION COMMUNICATION TECHNOLOGY">INFORMATION COMMUNICATION TECHNOLOGY</option>
          <option value="GENERAL ARTS">GENERAL ARTS</option>
          <option value="HOME ECONOMICS">HOME ECONOMICS</option>
          <option value="GENERAL SCIENCE ">GENERAL SCIENCE</option>
          <option value="BUSINESS">BUSINESS</option>
          <option value="GENERAL SCIENCE ">GENERAL SCIENCE</option>
          <option value="GENERAL SCIENCE ">GENERAL SCIENCE</option>
          <option value="GENERAL SCIENCE ">GENERAL SCIENCE</option>
          <option value="GENERAL SCIENCE ">GENERAL SCIENCE</option>
          <option value="INFORMATION COMMUNICATION TECHNOLOGY">INFORMATION COMMUNICATION TECHNOLOGY</option>
          <option value="GENERAL ARTS">GENERAL ARTS</option>
          <option value="TECHNICAL STUDIES">TECHNICAL STUDIES </option>
          <option value="BUSINESS">BUSINESS</option>
          <option value="BUSINESS">BUSINESS</option>
          <option value="GENERAL ARTS ">GENERAL ARTS </option>
          <option value="BUSINESS">BUSINESS</option>
          <option value="TECHNICAL STUDIES">TECHNICAL STUDIES</option>
          <option value="HOME ECONOMICS">HOME ECONOMICS</option>
          <option value="GENERAL ARTS ">GENERAL ARTS </option>
          <option value="HOME ECONOMICS">HOME ECONOMICS</option>
          <option value="TECHNICAL STUDIES ">TECHNICAL STUDIES </option>
        </select>
      </div>
      <div class="col-md-4 mb-3">
        <select class="form-select" id="thirdchoice" name="thirdchoice" required="">
          <?php isset($results[0]['thirdchoice_p']) ? print("<option value= '$thirdchoice'>" . $results[0]['thirdchoice_p'] . "</option>") : NULL;  ?>
          <option <?php isset($results[0]['thirdchoice_p']) ? NULL : print("selected=\" \"") ?> disabled="" value="">Third Choice Program</option>
          <option value="BUSINESS">BUSINESS</option>
          <option value="TECHNICAL STUDIES ">TECHNICAL STUDIES </option>
          <option value="INFORMATION COMMUNICATION TECHNOLOGY">INFORMATION COMMUNICATION TECHNOLOGY</option>
          <option value="GENERAL ARTS">GENERAL ARTS</option>
          <option value="HOME ECONOMICS">HOME ECONOMICS</option>
          <option value="GENERAL SCIENCE ">GENERAL SCIENCE </option>
          <option value="BUSINESS">BUSINESS</option>
          <option value="GENERAL SCIENCE ">GENERAL SCIENCE </option>
          <option value="GENERAL SCIENCE ">GENERAL SCIENCE </option>
          <option value="GENERAL SCIENCE ">GENERAL SCIENCE </option>
          <option value="GENERAL SCIENCE ">GENERAL SCIENCE </option>
          <option value="INFORMATION COMMUNICATION TECHNOLOGY">INFORMATION COMMUNICATION TECHNOLOGY</option>
          <option value="GENERAL ARTS">GENERAL ARTS</option>
          <option value="TECHNICAL STUDIESG">TECHNICAL STUDIES </option>
          <option value="BUSINESS">BUSINESS</option>
          <option value="BUSINESS">BUSINESS</option>
          <option value="GENERAL ARTS ">GENERAL ARTS </option>
          <option value="BUSINESS">BUSINESS</option>
          <option value="TECHNICAL STUDIES">TECHNICAL STUDIES</option>
          <option value="HOME ECONOMICS">HOME ECONOMICS</option>
          <option value="GENERAL ARTS ">GENERAL ARTS </option>
          <option value="HOME ECONOMICS">HOME ECONOMICS</option>
          <option value="TECHNICAL STUDIES ">TECHNICAL STUDIES </option>
        </select>
      </div>
      <!--  <div class="col-md-4 mb-3">
                            <input class="form-control" id="stream" name="stream" type="text" required="" placeholder="Stream">
                          </div> -->
    </div>
  
      <div class="col-md-4">
        <select class="form-select" id="intake" name="intake" required="">
          <?php isset($results[0]['intake_p']) ? print("<option value=" . $results[0]['intake_p'] . ">" . $results[0]['intake_p'] . "</option>") : NULL;  ?>
          <option <?php isset($results[0]['intake_p']) ? NULL : print("selected=\" \"") ?> disabled="" value="">Select Preferred Intake</option>
          <option value="May">May</option>
          <option value="September">September</option>
        </select>
      </div>
      <div class="col-md-4 mb-3">
        <select class="form-select" id="session" name="session" required="">
          <?php isset($results[0]['session_p']) ? print("<option value=" . $results[0]['session_p'] . ">" . $results[0]['session_p'] . "</option>") : NULL;  ?>
          <option <?php isset($results[0]['session_p']) ? NULL : print("selected=\" \"") ?> disabled="" value="">Select Preferred Session</option>
          <option value="Morning">Morning</option>
          <option value="Evening">Evening</option>
          <option value="Weekend">Weekend</option>
        </select>
      </div>
    </div>
    <div class="f1-buttons">
      <a class="btn btn-primary" href="applicant_dashboard_form.php?content=exams" type="button" name="save">previous</a>

      <button class="btn btn-primary " type="submit" name="submit">save and continue</button>
    </div>

  </form>
</fieldset>