<!DOCTYPE html>
<html>
<head>
        <link href="Admin/css/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="Admin/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="Admin/css/jquery.dataTables.min.css" rel="stylesheet">
    <link class="jsbin" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/base/jquery-ui.css" rel="stylesheet" type="text/css" />
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script class="jsbin" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8.0/jquery-ui.min.js"></script>
    <link rel="stylesheet" type="text/css" href="navbaradmin.css">
    <link rel="stylesheet" type="text/css" href="addbarang.css">
</head>
<body>
    <?php
     include "navbaradmin.php";
     ?>
    <br>
    <br>
    <br>
    <br>
    <br>
      <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }
    </script>
    <form class="" action="FungsiTambahBarang.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label ">Id Barang</label>
    <input type="idbarang" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan id barang" name="idbarang" >
  </div>
  <div class="form-group">
    <label >Nama Barang</label>
    <input type="nama" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan nama barang" name="nama">
  </div>
  <div class="form-group">
    <label >Harga</label>
    <input type="harga" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan harga barang" name="harga">
  </div>
    <div class="form-group">
    <label >Stock</label>
    <input type="stock" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan id barang" name="stock">
  </div>
    <div class="form-group">
    <label >Judul image</label>
    <input type="namagambar" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan judul barang" name="namagambar">
  </div>
      <div class="form-group">
    <label >Deskripsi</label>
    <input type="namagambar" class="form-control input-lg" style="width:50%;" " placeholder="Masukkan deskripsi" name="deskripsi">
  </div>
  <div class="form-group">
    <input type="file" name="fileToUpload" id="fileToUpload" onchange="readURL(this);"><br/><br/>
    <img id="blah" src="#" alt="" /> <br/><br/>
  </div>
   <button type="submit" name="tambahbarang"> Tambah </button><br/> <br/>
</form>




</body>
</html>
