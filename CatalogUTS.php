<!DOCTYPE html>
<html>
<head>
  <title>ACC TRADING CENTRE | CATALOG</title>
  
  <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <style type="text/css">
    body {
      background-color: cornsilk;
    }
    .card {
      border-radius: 10px;
    }
  </style>
</head>
<body>
  <?php 
  include 'config.php';
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

  $sql = "SELECT * FROM addbarang";

  $items = $conn->query($sql);
  
?>
    <br/>
    <br/>
    <br/>
  <div class="album py-5 ">
    <div class="container"  >
      <div class="row">
        <?php foreach($items as $item) : //aditya standley 1301160138 showCatalog?> 
            <div class="col-md-4">
              <div class="card mb-4 box-shadow">
                <center><a href="#"><img class="card-img-top" src=<?php echo "Catalog/".$item['namagambar'];  ?> alt="Card image cap" style="height: 250px; width: 250px; margin-top: 25px"></a></center>
                <div class="card-body">
                  <center><p class="card-text"><?php echo $item['nama']; ?><br>Rp <?php echo $item['harga']; ?>,-
                    <button style="background-color: lightgrey; color: grey; border: none;" class="rounded-circle" type="button" data-toggle="collapse" data-target="#coll<?php echo $item['idbarang'] ?>" aria-expanded="false" aria-controls="collapseExample">
               !
            </button>
          <div class="collapse" id="coll<?php echo $item['idbarang'] ?>">
              <div class="card card-body">
                <?php echo $item['deskripsi']; ?>
              </div>
          </div></p></center>
                  <div class="d-flex justify-content-between align-items-center" style="margin-top: 20px">
                    <div class="btn-group">
                      <button type="button" class="btn btn-sm btn-outline-secondary">Add to cart</button>
                      <a href=<?php echo "itemPage.php?idbarang=".$item['idbarang'] ?>><button type="button" class="btn btn-sm btn-outline-secondary">+</button></a>
                    </div>
                    <small class="text-muted">Stock : <?php echo $item['stock']; ?></small>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>

            <nav style="margin-top: 25px; margin-left: 75%">
              <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
              </ul>
            </nav>
    </div>    
  </div>
</div>
</body>
</html>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js\popper.min.js"></script>
<script type="text/javascript" src="js\bootstrap.bundle.min.js"></script>  