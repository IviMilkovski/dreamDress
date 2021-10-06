<nav class="navbar navbar-expand-md navbar-light bg-white">
<?php
 ?>
            <a href="index.php" class="navbar-brand mx-auto pr-5 logo">Dream Dress</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
               </button>         
              <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              
            <ul class="navbar-nav pl-5 mt-2 mt-lg-0">
            <?php
            global $conn;
                $meni = $conn->query("SELECT * FROM meni")->fetchAll();
                foreach($meni as $link):
             ?>
            <li class="nav-item">
              <a class="nav-link" href="<?= $link->href?>"><?= $link->name?></a></li>
              <?php endforeach;?>
<?php
  if(isset($_SESSION['user'])){
    echo "<li class='nav-item'><a class='nav-link' href='logout.php'>Logout</a></li>";
    }else{
    echo "<li class='nav-item'><a class='nav-link' href='signup.php'>Sign up | Log in</a></li>";
    }
?>
</ul>

                            
</div>
</nav>