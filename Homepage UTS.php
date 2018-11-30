<!DOCTYPE html>
<html>
<head>
	<title>ACC TRADING CENTRE| Homepage</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<script type="text/javascript" src="js\bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="homecssUTS.css">
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
   	<br/>
	<center>
		<div id="middle" class="container">
		<h1 id="header1">Welcome to Anti Chamen Chamen Club Trading Centre</h1>
		</div>
		<img class="img-responsive" src="tirek/trex44.png" id="trex2" >
		<div class="container" id="middle">
			<p id="intro">
				Anti Chamen Chamen Club is our brand, Chamen is just a name for a person that always do
				silly and funny act everytime. And on this website Chamen person is allowed to order our brand !. ARE YOU CHAMEN??!
				let's join and be our customer brothers and sisters!
			</p>
			<text id="cpr">Copyright &copy; 2018 - All Right reserved &#9679; Design by ACC</text>
		</div>
	</center>
</body>
</html>