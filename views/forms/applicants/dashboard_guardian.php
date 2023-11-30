  <fieldset>
    <?php


    include "../../models/applicants/select_applicants_table.php";

    ?>


    <form action="../../models/applicants/dashboard_guardian.php" method="POST">
      <div class="row g-3">
        <div class="col-md-4">
          <select class="form-select" id="salutation_g" name="salutation_g" required="">
            <?php isset($results[0]['salutation_g']) ? print("<option value=" . $results[0]['salutation_g'] . ">" . $results[0]['salutation_g'] . "</option>") : NULL;  ?>
            <option <?php isset($results[0]['salutation_g']) ? NULL : print("selected=\" \"") ?> disabled="" value="">Salutation</option>
            <option value="Mr.">Mr.</option>
            <option value="Mrs.">Mrs</option>
            <option value="Miss">Miss</option>
          </select>
        </div>
        <div class="col-md-4">
          <input class="form-control" value="<?php isset($results[0]['firstname_g']) ? print($results[0]['firstname_g']) : NULL;  ?>" id="gfirstname" name="gfirstname" type="text" required="" placeholder="First Name">
        </div>
        <div class="col-md-4 mb-3">
          <input class="form-control" value="<?php isset($results[0]['lastname_g']) ? print($results[0]['lastname_g']) : NULL;  ?>" id="glastname" name="glastname" type="text" required="" placeholder="Last Name">
        </div>
      </div>
      <div class="row g-3">
        <div class="col-md-4">
          <input class="form-control" value="<?php isset($results[0]['relation_g']) ? print($results[0]['relation_g']) : NULL;  ?>" id="relation" name="relation" type="text" required="" placeholder="Relation to Applicant">
        </div>
        <div class="col-md-4">
          <input class="form-control" value="<?php isset($results[0]['occupation_g']) ? print($results[0]['occupation_g']) : NULL;  ?>" id="goccupation" name="goccupation" type="text" required="" placeholder="Occupation">
        </div>
        <div class="col-md-4 mb-3">
          <input class="form-control" value="<?php isset($results[0]['Address_g']) ? print($results[0]['Address_g']) : NULL;  ?>" id="gaddress" name="gaddress" type="text" required="" placeholder="Address">
        </div>
      </div>
      <div class="row g-3">
        <div class="col-md-4">
          <input class="form-control" value="<?php isset($results[0]['contact_g']) ? print("0" . $results[0]['contact_g']) : NULL;  ?>" id="gphone" name="gphone" type="text" required="" placeholder="Phone Number">
        </div>
        <div class="col-md-4">
          <input class="form-control" value="<?php isset($results[0]['email_g']) ? print($results[0]['email_g']) : NULL;  ?>" id="gemail" name="gemail" type="text" required="" placeholder="Email Address">
        </div>
      </div>
      <div class="f1-buttons">
        <a class="btn btn-primary" href="applicant_dashboard_form.php?content=personal" type="button" name="save">previous</a>
        <button class="btn btn-primary" name="submit" type="submit">save and continue</button>
      </div>


    </form>
  </fieldset>