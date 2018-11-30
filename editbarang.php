<!DOCTYPE html>
<html>
<head>
	<title>ACC TRADING CENTRE | ADMIN</title>
    <link href="Admin/css/bootstrap-4.0.0.css" rel="stylesheet">
    <link href="Admin/css/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="Admin/css/jquery.dataTables.min.css" rel="stylesheet">
    <script defer src="Admin/js/all.js" integrity="sha384-8iPTk2s/jMVj81dnzb/iFR2sdA7u06vHJyyLlAd4snFpCl/SnyUjRrbdJsw1pGIl" crossorigin="anonymous"></script>
    	<link rel="stylesheet" type="text/css" href="navbaradmin.css">


</head>
<body>
  	 <?php
  	 include "navbaradmin.php";
  	 ?>
    <br>
    <br>
    <br>
    <br>
	 <div class="row">
      <div class="col-lg-8 ml-auto mr-auto">
       <h3>Edit Barang</h3>
	<table id="example" class="display" style="width:100%">
		<thead>
			<th>No</th>
			<th>idbarang</th>
			<th>nama</th>
			<th>harga</th>
			<th>stock</th>
      <th>nama gambar</th>
      <th>deskripsi</th>
      <th>action</th>
		</thead>
		<tbody>
			    <?php 
                    include "config.php";
                    $no = 1;
                    $sql = "SELECT * FROM addbarang ORDER BY idbarang";
                    $query=$conn->query($sql);
                    
                ?>
                    <?php while ($data= $query->fetch_assoc()) {
                    ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['idbarang'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['harga'] ?></td>
                    <td><?php echo $data['stock'] ?></td>
                    <td><?php echo $data['namagambar']?></td>
                    <td><?php echo $data['deskripsi']?></td>
                    <td>
                 <button type="button" class="btn btn-danger" data-toggle="modal" style="font-size: 12px" data-target="#del<?php echo $data['idbarang'] ?>"><i class="fas fa-trash-alt">D</i></button>
                        <button type="button" class="btn btn-info" data-toggle="modal" style="font-size: 12px" data-target="#edit<?php echo $data['idbarang'] ?>"><i class="fas fa-edit">E</i></button>
                    </td>
                </tr> 
                  <div class="modal fade" id="edit<?php echo $data['idbarang'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <h5 class="modal-title" id="exampleModalLabel">Data <?php echo $data['idbarang'] ?></h5>
                              <!-- Insert Form here -->
                              <form method="POST" action="functioneditbarang.php">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">idbarang</label>
                                    <input type="text" class="form-control" name="idbarang" readonly="readonly" value="<?php echo $data['idbarang'] ?>">


                                      <!-- Create hidden input here to post id Users-->
                                      <input type="text" style="display: none;" name="idbarang" value="<?php echo $data['idbarang'] ?>">
                                    
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">nama</label>
                                   <input type="text" class="form-control" name="nama" value="<?php echo $data['nama'] ?>">
                                  </div>
                                   <div class="form-group">
                                    <label for="exampleInputPassword1">harga</label>
                                   <input type="text" class="form-control" name="harga" value="<?php echo $data['harga'] ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">stock</label>
                                   <input type="text" class="form-control" name="stock" value="<?php echo $data['stock'] ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">nama gambar</label>
                                   <input type="text" class="form-control" name="namagambar" readonly="readonly" value="<?php echo $data['namagambar'] ?>">
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">deskripsi</label>
                                   <input type="text" class="form-control" name="deskripsi" value="<?php echo $data['deskripsi'] ?>">
                                  </div>
                                  <button type="submit" name="edit" class="btn btn-primary btn-block">Submit</button>
                                </form>                        
                            </div>
                    </div>
                  </div>
                </div>
                    <div class="modal fade" id="del<?php echo $data['idbarang'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                         <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin mendelete <?php echo $data['idbarang'] ?> ?</h5>
                      </div>
                      <div class="modal-footer">
                              <form method="POST" action="functioneditbarang.php">
                              <input type="text" style="display: none;" name="idbarang" value="<?php echo $data['idbarang'] ?>">
                                  <!-- Create hidden input here to post id Users-->

                                <button type="submit" name="delete" class="btn btn-danger">YA</a>
                              </form>
                        <button type="button" class="btn btn-primary" data-dismiss="modal">TIDAK</button>
                        
                      </div>
                    </div>
                  </div>
                </div>
                <?php
                   $no = $no+1; }//endforeach;
                ?>
                
              </tbody>
            </table>
          </div>
      </div>
      
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) --> 
    <script src="Admin/js/jquery-3.2.1.min.js"></script>
        <script src="Admin/js/jquery.dataTables.min.js"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed --> 
    <script src="Admin/js/popper.min.js"></script>
  <script src="Admin/js/bootstrap-4.0.0.js"></script>
  <script src="Admin/js/popper.min.js"></script>
      <script>
          $(document).ready(function() {
    $('#example').DataTable({
        "columns": [
            { "width": "1%"},
            null,
            null,
            null,
            null,
            null,
            null,
            { "width": "10%"}
            
            
  ]
    });
} );
      </script>

  </body>
</html>
