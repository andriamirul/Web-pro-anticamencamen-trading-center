<!DOCTYPE html>
<html>
<head>
	<title>ACC TRADING CENTRE| FAQ</title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js\bootstrap.bundle.min.js"></script>
	<link rel="stylesheet" type="text/css" href="FaqUTS.css">
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
    <img src="Faq\1_9quqCp7TnkWLGkc4OEq9yQ.jpeg" id="FAQ">
    <div id="accordion" class="bg-light" >
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne" id="new-board-btn">
          Metode pembayaran di ACC Trading Centre
        </button>
      </h5>
    </div>
    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
        1. Transfer Bank <img src="Faq\bca.png" id="metode"><img src="Faq\bni.jpg" id="metode" ><img src="Faq\bri.png" id="metode" > <img src="Faq\mandiri.png" id="metode" >
      </div>
      <div class="card-body"> 2. Kartu Visa/Mastercard/JCB <img src="Faq\visa.png" id="metode" ><img src="Faq\mastercard.png" id="metode" ><img src="Faq\jcb.png" id="metode"></div>
      <div class="card-body"> 3. Indomaret/Alfamart <img src="Faq\indomaret.png" id="metode"  ><img src="Faq\alfamart.png" id="metode" ></div>

    </div>
    
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button id="new-board-btn" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          Pesanan Ditolak atau Dibatalkan
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
       ACC Trade Centre memberikan jaminan 100% uang kembali kepada pembeli.
       <div>
       Dana transaksi akan di kembalikan jika :</div>
       <div>1. Barang tidak dikirimkan selama 2x24 jam setelah pembayaran</div>
       <div>2. Kendala dalam Transaksi</div>
       <div>3. Transaksi dibatalkan atas kesepakatan pembeli dan pihak ACC </div>
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button id="new-board-btn" class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          Status pesanan
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
      	Sudah Dibayar: Barang yang telah dibayar, dan siap untuk dikirim ke pembeli
      	<div>Menunggu Pembayaran : Barang belum dibayar. Lakukanlah pembayaran terlebih dahulu.</div>
      </div>
    </div>
  </div>
</div>

</body>