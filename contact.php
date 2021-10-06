<?php
$title = "Contact us";
 session_start();
 include 'setup/konekcija.php';
 include 'views/header.php';
 include 'views/nav.php';
?>
<div class="container-fluid">
  <a name="3"></a><div class="row">
    <div class="col-lg-8 col-md-10 col-sm-12 offset-lg-2 my-5 pt-5">
      <h2 class="text-center mb-5 naslov">Contact</h2>
        <form action="contactcheck.php" method="POST">
          <div class="form-row mb-3 contact-form  d-flex justify-content-center contact">
              <div class="form mb-3  d-flex justify-content-center col-12">
                  <input type="email" class="form-control mail" id="mail" name="mail"  placeholder="Email">
                  <p id='mailError' class='greska'></p>
                  </div>
              <div class="form-group  d-flex justify-content-center col-12">
              <textarea name="areaMes" id="areaMes"  class="form-control" placeholder="Your Message"></textarea>
              <p id='areaError' class='greska'></p>
              </div>
          <button type="button" id="dugme"class="btn btn-block btn-dark">Submit</button>
</br>
          <p id='uspeh'></p>
      </form>
    </div>
</div>
<?php require 'views/footer.php'; ?>