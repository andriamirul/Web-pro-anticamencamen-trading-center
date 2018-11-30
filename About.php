<!DOCTYPE html>
<html>
<head>
  <title>ACC TRADING CENTRE| About</title>
  <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js\bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="about.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
  <?php 
  //kalau pakai sessiom
  session_start();
  if (isset($_SESSION['user'])) {
    
    include 'headerlogin.php';
    
    # code...
  }
  else{
    
   include 'header.php';
   
    //echo " selamat datang ",$_COOKIE['nama']."<br.>";
  }
  ?>
    <br/>
    <br/>
    <br/>
    <br/>
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide img-responsive" src="about\ACClogo.png" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <div class="left"><h1>ACC</h1></div>
                <div class="left">This is our first and exclusive brand!</div>
                <div class="left"><a class="btn btn-lg btn-primary" href="Homepage UTS.html" role="button">Apa itu ACC?</a></div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide img-responsive" src="about\references.png" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <div class="left"><h1>Inspirasi</h1></div>
                <div class="left">Terinspirasi dari seekor dinosaurus</div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide img-responsive" src="about\buy now.png" alt="Third slide" id="slide3">
            <div class="container">
              <div class="carousel-caption text-right">
                <div class="left"><h1></h1></div>
                <div class="left">Sign up & Order now</div>
                <div class="left"><a class="btn btn-lg btn-primary" href="SignupUTS.html" role="button">Sign up Sekarang!</a></div>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

  <div class="container marketing" id="top">
          <div class="row">
            <div class="col-lg-4">
            <img class="rounded-circle" src="about\jehan.jpg" alt="Generic placeholder image" id="khusus">
            <h2>Jehan Mahsan</h2>
            <p>Seorang kakek dari 2 cucu dan bapak dari 1 anak.</p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="about\standley.jpg" alt="Generic placeholder image" id="khusus">
            <h2>Aditya Standley</h2>
            <p>Seorang Bapak dari 2 anak.</p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="about\johan.jpg" alt="Generic placeholder image" id="khusus">
            <h2>Johan Anton</h2>
            <p>Seorang cina.</p>
          </div>
          <div class="col-lg-4">
            <img class="rounded-circle" src="about\andri.jpg" alt="Generic placeholder image" id="khusus">
            <h2>Andri Amirul</h2>
            <p>Seorang anak dan cucu yang berbakti.</p>
          </div>
        </div>

</body>
</html>