<?php
$title = "Dream Dress";
session_start();
include "setup/konekcija.php";
require 'views/header.php';
include 'views/nav.php';
?>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="images/slider3.jpg" class="d-block w-100" alt="slider1">
          </div>
          <div class="carousel-item">
            <img src="images/slider5.jpg" class="d-block w-100" alt="slider2">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <div class="container">
            <a name="1"></a><div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="pb-3 pt-5">About Dream Dress</h2>
                </div>
            </div>
            <div class="row">
                    <div class="col-lg-12 pt-4 text-center">
                            <p class="text-justify">
                                    Are you ready to take the next step in life and finally get married? If yes then we are happy to show you a verity of beautiful wedding gowns you can find in our store. Our store is located in the center of New York and we welcome you to come and try on your dream dress. On our site you can see all the dresses you can curently find in our store. We here at Dream Dress are ready to help you find your dress and say yes to the dress of your dreams.</p>

                                    </div>
                                    </div>
                                  </div>
                    </div>
</div></div>
<div class="content">
      <div class="container-fluid">
      <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="pb-3 pt-5">Shop</h2>
                </div>
            </div>
            <div class="row">
      <div class="col-lg-12 mb-3 mt-2 pt-1 bg-light sf">
      <form class="form-inline">
              <div class="mr-2 mt-2 col-lg-3">
              <select  id="silho" class="w-100 form-control">
              <option value="0">Choose Silhouette</option>
              <?php $sil = $conn->query("SELECT * FROM silhouette")->fetchAll();
                        foreach($sil as $s) : ?>
              <option value="<?= $s->id_Silhouette ?>">
                            <?= $s->name?>
                          </option>
                      <?php
                        endforeach;
                      ?>
            </select>
            </div>
            <div class="mr-2 mt-2 col-lg-3">
              <select  id="desig" class="w-100 form-control">
              <option value="0">Choose the Designer</option>
              <?php $des = $conn->query("SELECT * FROM designers")->fetchAll();
                        foreach($des as $d) : ?>
              <option value="<?= $d->id_designer ?>">
                            <?= $d->name?>
                          </option>
                      <?php
                        endforeach;
                      ?>
            </select>
            </div>
              <div class="mr-2 mt-2 col-lg-3">
              <input type="text" id="search" class="w-100 form-control" name="search" placeholder="Search.." />
            </div>
            
            </form>
      </div>
  </div>
        <div class="row">
          <div class="col-lg-12 mt-1">
          <div class="row  mb-4  d-flex justify-content-center shop" id="cardbooks" class="text-center">
          <?php 
          $dresses = $conn->query("SELECT d.*, s.name AS sNames, de.name AS designerName, p.alt AS alt, p.src AS src FROM dresses d INNER JOIN silhouette s ON d.id_Silhouette = s.id_Silhouette INNER JOIN designers de ON d.id_designer = de.id_designer INNER JOIN picture p ON d.id_picture = p.id_picture;")->fetchAll();
          foreach($dresses as $dr): ?>
  <div class="col-lg-4 col-md-6 mt-4">
        <div class="card mb-3" style="max-width: 540px;">
          <div class="row no-gutters">
            <div class="col-md-4 col-4">
              <img src="<?= $dr -> src?>" class="card-img" alt="<?=$dr->alt?>">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h6 class="card-title"><?= $dr->name?></h6>
                <p class="card-text">Silhouette:<?= $dr->sNames?></p>
                <p class="card-text"><small class="text-muted"></small></p>
                                 <p>Price: <?=$dr->price?>$</p>
                                 <button class="btn btn-secondary m-3 addItToFavorite" data-idbook="${d.id_dress}"
                              >Add to Favourite ❤</button>
                            </div>
                            </div>
                            </div>
                            </div>
                            </div>

          <?php endforeach; ?>
          </div>
      </div>
    </div>
  </div>
</div>
</div>
<?php

require 'views/footer.php'; 
?>