<fieldset>
  <form action="../../models/applicants/dashboard_declaration.php" method="POST">
    <div class="mb-2 p-b-20">
      <p>I <span class="text-uppercase font-weight-bold"><?php print($_SESSION['auth']['username']); ?></span> hereby declare that the information provided is true and correct. I also understand that any willful
        dishonesty may render for refusal of this application.
      </p>
    </div>
    <div class="f1-buttons">
      <a class="btn btn-primary " type="button" href="applicant_dashboard_form.php?content=documents" name="back">Back</a>

      <button class="btn btn-primary" name="submit" type="submit">accept continue</button>
    </div>


  </form>
</fieldset>