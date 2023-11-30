<fieldset>


  <?php

  include "../../models/applicants/select_applicants_table.php";

  ?>



  <form action="../../models/applicants/dashboard_personal.php" method="POST">

    <div class="row g-3">
      <div class="col-md-4">
        <select class="form-select" id="salutation" name="salutation" required="">
          <?php isset($results[0]['salutation']) ? print("<option value=" . $results[0]['salutation'] . ">" . $results[0]['salutation'] . "</option>") : NULL;  ?>
          <option <?php isset($results[0]['salutation']) ? NULL : print("selected=\" \"") ?> disabled="" value="">Salutation</option>
          <option value="Mr.">Mr.</option>
          <option value="Mrs.">Mrs</option>
          <option value="Miss">Miss</option>
        </select>
      </div>
      <div class="col-md-4">
        <input class="form-control" value="<?php isset($results[0]['firstname']) ? print($results[0]['firstname']) : NULL;  ?>" id="firstname" name="firstname" type="text" required="" placeholder="First Name">
      </div>
      <div class="col-md-4 mb-3">
        <input class="form-control" value="<?php isset($results[0]['lastname']) ? print($results[0]['lastname']) : NULL;  ?>" id="lastname" name="lastname" type="text" required="" placeholder="Last Name">
      </div>
    </div>
    <div class="mb-2">
      <input class="datepicker-here form-control digits" value="<?php isset($results[0]['dateofbirth']) ? print($results[0]['dateofbirth']) : NULL;  ?>" type="text" data-language="en" id="dob" name="dob" required="" placeholder="Date of Birth">
    </div>
    <div class="mb-1 p-b-20">
      <select class="form-select" id="gender" name="gender" required="">
        <?php isset($results[0]['gender']) ? print("<option value=" . $results[0]['gender'] . ">" . $results[0]['gender'] . "</option>") : NULL;  ?>
        <option <?php isset($results[0]['gender']) ? NULL : print("selected=\" \"") ?> disabled="" value=""> gender</option>
        <option value="Male">Male</option>
        <option value="Female">Female</option>
      
      </select>
    </div>
    <div class="mb-1 p-b-10">
      <select class="form-select" id="marital" name="marital" required="">
        <?php isset($results[0]['martialstatus']) ? print("<option value=" . $results[0]['martialstatus'] . ">" . $results[0]['martialstatus'] . "</option>") : NULL;  ?>
        <option <?php isset($results[0]['martialstatus']) ? NULL : print("selected=\" \"") ?> disabled="" value="">Marital Status</option>
        <option value="Single">Single</option>
        <option value="Married">Married</option>
        <option value="Divorced">Divorced</option>
      </select>
    </div>


    <div class="row g-3">
      <div class="col-md-4">
        <input class="form-control" value="<?php isset($results[0]['homeregion']) ? print($results[0]['homeregion']) : NULL;  ?>" id="homeregion" name="homeregion" type="text" required="" placeholder="Home Region">
      </div>
      <div class="col-md-4">
        <input class="form-control" value="<?php isset($results[0]['street']) ? print($results[0]['street']) : NULL;  ?>" id="street" name="street" type="text" required="" placeholder="Street">
      </div>
      <div class="col-md-4 mb-3">
        <input class="form-control" value="<?php isset($results[0]['residentialaddr']) ? print($results[0]['residentialaddr']) : NULL;  ?>" id="address" name="address" type="text" required="" placeholder="Residential Address">
      </div>
    </div>
    <div class="row g-3">
      <div class="col-md-4">
        <input class="form-control" value="<?php isset($results[0]['postaddr']) ? print($results[0]['postaddr']) : NULL;  ?>" id="postal" name="postal" type="text" required="" placeholder="Postal Address">
      </div>
      <div class="col-md-4">
        <input class="form-control" value="<?php isset($results[0]['city']) ? print($results[0]['city']) : NULL;  ?>" id="city" name="city" type="text" required="" placeholder="City">
      </div>
      <div class="col-md-4 mb-3">
        <input class="form-control" value="<?php isset($results[0]['country']) ? print($results[0]['country']) : NULL;  ?>" id="country" name="country" type="text" required="" placeholder="Country">
      </div>
    </div>
    <div class="row g-3">
      <div class="col-md-4">
        <input class="form-control" id="religion" value="<?php isset($results[0]['religion']) ? print($results[0]['religion']) : NULL;  ?>" name="religion" type="text" required="" placeholder="Religion">
      </div>
      <div class="col-md-4">
        <input class="form-control" id="occupation" value="<?php isset($results[0]['occupation']) ? print($results[0]['occupation']) : NULL;  ?>" name="occupation" type="text" required="" placeholder="Present Occupation (if any)">
      </div>
      <div class="col-md-4 mb-3">
        <input class="form-control" id="challenged" value="<?php isset($results[0]['disability']) ? print($results[0]['disability']) : NULL;  ?>" name="challenged" type="text" required="" placeholder="Physically Challenged?">
      </div>
    </div>
    <div class="row g-3">
      <div class="col-md-4">
        <input class="form-control" value="<?php isset($results[0]['contact']) ? print($results[0]['contact']) : NULL;  ?>" id="phone" name="phone" type="text" required="" placeholder="Phone Number">
      </div>
      <div class="col-md-4">
        <input class="form-control" value="<?php isset($results[0]['email']) ? print($results[0]['email']) : NULL;  ?>" id="email" name="email" type="text" required="" placeholder="Email Address">
      </div>
      <div class="col-md-4 mb-2 p-b-20">
              <?php
                $applicationset = isset($results[0]['application']) ? $results[0]['application'] : NULL;
              ?>
       
    </div>
    <div class="f1-buttons">

      <button class="btn btn-primary " type="submit" name="submit">save and continue</button>
    </div>

  </form>


</fieldset>