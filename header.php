<header>
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <div class="left"><a href="Homepage UTS.php"><img src="tirek\trex.png" id="trexx"></a></div>
        <button class="navbar-toggler" type="btn-outline-successon" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="left navbar-nav">
             <a href="FaqUTS.php" class="linko">FAQ</a></span></a>
            </div>
           <div class="left navbar-nav">
              <a href="CatalogUTS.php" class="linko">Catalog</a>
           </div>
           <div class="left navbar-nav"> 
              <a href="about.php" class="linko">About</a>
            </div>
          <div class="left navbar-nav  mr-auto">
            <?php
            if (isset($_SESSION['user'])) {    
              $cart = "KeranjangBelanja.php";
            }
            else{
              $cart = "LoginUTS.php";
            }
            ?>
              <a href="<?php echo $cart; ?>" ><img src="cart/cart2.png" id="cart3"></a>
           </div>
       
         <div class="right"><a href="LoginUTS.php" class="link1">Log in</a></div>
         <div class="right"><a href="SignupUTS.php" class="link1">Sign up</a></div>
        </div>
      </nav>
    </header>