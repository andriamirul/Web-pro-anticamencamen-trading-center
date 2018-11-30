<!DOCTYPE html>
<html>
<head>
	<title>Keranjang Belanja</title>

	
  <link rel="stylesheet" type="text/css" href="KeranjangBelanja.css">
  <link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
  <script type="text/javascript" src="jquery-3.3.1.min.js"></script>
  <script type="text/javascript" src="js\bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" type="text/css" href="navbar.css">

</head>
<body class="bg-light">
  <?php 
  include 'config.php';
  session_start();
  if (isset($_SESSION['user'])) {    
    include 'headerlogin.php';
  }
  else{
    
   include 'header.php';
  }?>

    <br/>
    <br/>
    <br/>
    <br/>
    <div style="text-align: center" ><h1>Keranjang Belanja<span><img src="cart/cart.png" id="cart" height="60px" width="60px"></span></h1></div>
    <div></div>

    <?php
    include "koneksi.php";
    $query = mysqli_query($conn,"SELECT * FROM cart where username = '".$_SESSION['user']."'");
    ?>
    <form action="" method="post">
    <div class="container">            
      <table id="demo" class="table table-hover">
          <tr>
            <th>No</th>
            <th>ID Barang</th>
            <th>Nama Barang</th>
            <th>Harga Satuan</th>
            <th>Qty.</th>
            <th>Harga Total</th>
            <th>Action</th>
          </tr>
      
        <?php if(mysqli_num_rows($query)>0){ //Johan Antonius Salim 1301164150?>
        <?php
            $no = 1;
            while($data = mysqli_fetch_array($query)){
            $sql = mysqli_query($conn,"SELECT * FROM addbarang where idbarang = '".$data['idbarang']."'");
            $item = mysqli_fetch_array($sql)
        ?>
        <tr>
            <th><?php echo $no?></th>
            <td><?php echo $data["idbarang"]?></td>
            <td><?php echo $item["nama"]?></td>
            <td><?php echo 'Rp ',$item["harga"]?></td>
            <td><?php echo $data["jumlah"]?></td>
            <td><?php echo 'Rp ',$data["total"]?></td>
            <td>
              <form method="post" action="">
                <?php echo "<a type='button' class='btn btn-danger' href='del.php?id=".$data['idbarang']."'>Delete</a></tr>"?>
              </form>
            </td>
        </tr>
        <?php $no++;}?>
        <?php } ?>
        <br/>
      </table>
      <?php
      $query = mysqli_query($conn,"SELECT username, sum(total) AS total_pembayaran FROM cart where username = '".$_SESSION['user']."'");
      ?>
    <form action="" method="post">
    <div class="container">            
      <table id="demo" class="table table-hover">
          <tr>
            <th>Total Pembayaran</th>
            <td></td>
            <td></td>
            <td></td>
            <td>
              <?php if(mysqli_num_rows($query)>0){ ?>
              <?php
              while($data = mysqli_fetch_array($query)){
              ?>
              <?php echo 'Rp ',$data["total_pembayaran"]?>
              <?php } ?>
              <?php } ?></td>
        </table>
      </div>
      <br/>
      <br/>
      <br/>
      <a type="button" class="btn btn-danger" id="cancel" href="CatalogUTS.php">Return to Catalog</a>
      <?php echo "<a type='button' class='btn btn-success' href='confirm.php?user=".$data['username']."' name='confirm' id='confirm'>Confirm</a>" ?>
    </div>
  </form>
  </div> 

<script type="text/javascript">
//Johan Antonius Salim 1301164150
  // function bconfirm() {
  //     <?php 
  //       $sql = "SELECT * FROM cart WHERE username = '".$_SESSION['user']."'";
  //       $result = $conn->query($sql);
  //       if ($result->num_rows >= 1) { 
  //       ?>
  //           var txt;
  //           if (confirm("Apakah data diatas sudah sesuai dengan pesanan anda?")) {
  //                 alert("Pesanan sudah di proses");
  //                 // <?php
  //                 // $sql2 = "DELETE FROM cart WHERE username = '".$_SESSION['user']."'";
  //                 // $result2 = $conn->query($sql2);
  //                 // ?>
  //           } 
  //           else {
  //               header("Location: KeranjangBelanja.php");
  //           }
  //       <?php 
  //       }
  //       else {
  //       ?>
  //       alert("Keranjang masih kosong");
  //       header("refresh : KeranjangBelanja.php");
  //       <?php 
  //       }
  //       ?>
  // }
</script>

</body>
</html>



