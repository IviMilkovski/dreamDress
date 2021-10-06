<?php
$title = "About me";
 session_start();
 include 'setup/konekcija.php';
 include 'views/header.php';
 include 'views/nav.php';
?>
<div class="container">
    <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="pb-3 pt-5">About me</h2>
            </div>
        </div>
        <div class="row">
                <div class="col-lg-5 col-sm-10 text-center">
                        <figure class="figure">
                                <img src="images/prof.jpg" class="figure-img img-fluid rounded" height="200px" alt="Me">
                              </figure>
                </div>
                <div class="col-lg-7 text-right">
                    <p class="text-justify">Hi! My name is Iva Milkovski and I'm a student and also a web designer. I'm 20 years old and I'm currently studying at ICT. I'm originally from Bor, which is located in eastern Serbia, but right now I'm living in Belgrade. I graduated from a tourism oriented high school and decided that I definitely want to do programing instead of being a tour guide. I'm still a beginner at designing but I'm ready to learn and improve so that I can become a professional web designer.</p>
                    <p class="text-justify">Also if you want to contact me be free to write me an email. My email adress is <a id="link">ivamilkovski44@gmail.com.</a></p>
                    <p class="text-justify">Hope you enjoy this site! 🖤</p>
                </div>
        </div>
        </div>
</div>

<?php require 'views/footer.php'; ?>