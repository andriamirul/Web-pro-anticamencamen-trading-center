<!DOCTYPE html>
<html>
<head>
  <title>ACC TRADING CENTRE | CATALOG</title>
  <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">
  <style type="text/css">
    body{
      background-color: lightsteelblue;
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

  $sql = "SELECT * FROM addbarang WHERE idbarang=".$_GET['idbarang'];

  $items = $conn->query($sql);  


  
?>
    <br>
    <br>
    <br>
    <br>
    <div class="container_fluid" style="margin: 20px 0px; background-color: dimgrey; color: white; padding: 5px 0px; ">
      <h1 style="back">Check Out</h1>
    </div>  
  <div class="container">
    <div class="row" style="background-color: lightgrey; padding: 70px 30px; border-radius: 10px">
      <?php foreach($items as $item) : ?>
      <div class="col-md-6" style="background-color: white; padding-top: 40px; border-radius: 50px; box-shadow: 4px 4px slategrey;">
          <center><img src=<?php echo "Catalog/".$item['namagambar'];  ?> style="width: 50%"></center>
      </div>
      <div class="col-md-6">
          <center><h3><?php echo $item['nama'] ?></h3>
          <h4 class="text-muted"><?php echo "Price : Rp ".$item['harga'].",-" ?></h4>
          <form action="" method="POST">
            <div class="form-group">
              <label>Quantity</label>
              <input type="number" name="quantity" min="1" max="<?php echo $item['stock'] ?>" class="form-control" style="width: 50%">
            </div>
            <div class="form-group">
              <label >Address</label>
              <textarea class="form-control" name="address" placeholder="Your Address" style="width: 50%"></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Add to Cart +</button>
          </form></center>
      </div>
      </div>
      <div class="row" style="margin-top: 30px; background-color: lightgrey; padding: 70px 30px; border-radius: 10px">
        <div class="col-md-12">
            <h4>Description</h4>
            <text><?php echo $item['deskripsi']; ?></text>
        </div>
      </div>     
    <?php endforeach; ?>
    <?php //aditya standley 1301160138
        if (isset($_POST['submit'])){
            if (isset($_SESSION['user']) == FALSE) {    
              header('Location: loginUTS.php');
            }
            else {
                include "koneksi.php";
                $total = $_POST['quantity']*$item['harga'];
                $sql = "INSERT INTO cart VALUES ('{$_SESSION['user']}', '{$_GET['idbarang']}', '{$_POST['quantity']}', '{$total}', '{$_POST['address']}' )";
                $conn->query($sql);
                $num = "SELECT stock from addbarang where idbarang ={$_GET['idbarang']}";
                $query=$conn->query($num);
                $data= $query->fetch_assoc();
                $sql = "UPDATE addbarang set stock = ({$data['stock']}-{$_POST['quantity']}) where idbarang = {$_GET['idbarang']} ";
                $conn->query($sql);
                header('Location: KeranjangBelanja.php');
                $conn->close();               
            }
          }
    ?>
    
  </div>
</body>
</html>