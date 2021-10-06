<?php
$title = "Sign up | Log in";
 session_start();
 include 'setup/konekcija.php';
 include 'views/header.php';
 include 'views/nav.php';
?>

 <section class="login pt-5 mojlogin" id="login">
 <div class="container">
 <div class="row">
 <div class="col-lg-6 offset-lg-3">
 <h3 class="text-center text-uppercase">Log in</h3>
 <form action="" method="post">
 <div class="form-group">
 <label for="logemail">Email address</label>
 <input type="email" class="form-control" id="logemail" aria-describedby="emailHelp"
name="logemail" placeholder="Enter email">
 <small id="logemailerror" class="error"></small>
 </div>
 <div class="form-group">
 <label for="logpassword">Password</label>
 <input type="password" class="form-control" id="logpass" name="logpass"
placeholder="Password">
 <small id="logpassworderror" class="error"></small>
 </div>
 <button type="submit" id="logsubmit" name="logsubmit" class="btn btn-dark">Log in</button>
 </form>
 <p class="mt-3">If you don't have an account than sign up down below.</p>
 </div>
 </div>
 </div>
</section>










 <section class="pt-5" id="signup">
 <div class="container">
   <div class="row">
   <div class="col-lg-6 offset-lg-3 pb-3">
   <h3 class="text-center text-uppercase">sign up</h3>
   <form action="sign.php" method="POST" onSubmit="return proverasignupa()">
   <div class="form-group">
   <label for="signuser">Username </label>
   <div class="col-sm-10">
   <input type="text" class="form-control" name="username" id="username" placeholder="Username">
   <small id="signusererror" class="error"></small>
   </div>
 </div>
 <div class="form-group">
 <label for="signemail">Email</label>
 <div class="col-sm-10">
 <input type="text" class="form-control" name="email" id="email" placeholder="Email">
 <small id="signemailerror" class="error"></small>
 </div>
 </div>
 <div class="form-group">
 <label for="signpass">Password</label>
 <div class="col-sm-10">
 <input type="password" class="form-control" name="pass" id="password" placeholder="Password">
 <small id="signpassworderror" class="error"></small>
 </div>
 </div>
 <div class="form-group row">
 <div class="col-sm-10">
 <button type="button" class="btn btn-dark" name="signup" id="signupbtn">Sign up</button>
 </div>
 <div id="feedback"></div>
 </div>
 </form>
 </div>
 </div>
 </div>
 </section>
 <?php require 'views/footer.php'; ?>