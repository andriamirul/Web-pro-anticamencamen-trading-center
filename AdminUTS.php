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
       <h3>Data Pengguna</h3>
	<table id="example" class="display" style="width:100%">
		<thead>
			<th>No</th>
			<th>username</th>
			<th>email</th>
			<th>password</th>
			<th>Action</th>
		</thead>
		<tbody>
			    <?php //jehan mahsan 1301160441
                    include "config.php";
                    $no = 1;
                    $sql = "SELECT * FROM user ORDER BY username";
                    $query=$conn->query($sql);
                    
                ?>
                    <?php while ($data= $query->fetch_assoc()) {
                    ?>
                <tr>
                    <td><?php echo $no ?></td>
                    <td><?php echo $data['username'] ?></td>
                    <td><?php echo $data['email'] ?></td>
                    <td><?php echo $data['password'] ?></td>
                    <td>
                 <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#del<?php echo $data['username'] ?>"><i class="fas fa-trash-alt">D</i></button>
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#edit<?php echo $data['username'] ?>"><i class="fas fa-edit">E</i></button>
                    </td>
                </tr> 
                  <div class="modal fade" id="edit<?php echo $data['username'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <h5 class="modal-title" id="exampleModalLabel">Data <?php echo $data['username'] ?></h5>
                              <!-- Insert Form here -->
                              <form method="POST" action="function.php">
                                  <div class="form-group">
                                    <label for="exampleInputEmail1">username</label>
                                    <input type="text" class="form-control" name="username" readonly="readonly" value="<?php echo $data['username'] ?>">


                                      <!-- Create hidden input here to post id Users-->
                                      <input type="text" style="display: none;" name="username" value="<?php echo $data['username'] ?>">
                                    
                                  </div>
                                  <div class="form-group">
                                    <label for="exampleInputPassword1">E-mail</label>
                                   <input type="text" class="form-control" name="email" value="<?php echo $data['email'] ?>">
                                  </div>
                                   <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                   <input type="text" class="form-control" name="password" value="<?php echo $data['password'] ?>">
                                  </div>
                                  <button type="submit" name="edit" class="btn btn-primary btn-block">Submit</button>
                                </form>                        
                            </div>
                    </div>
                  </div>
                </div>
                    <div class="modal fade" id="del<?php echo $data['username'] ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                         <h5 class="modal-title" id="exampleModalLabel">Anda yakin ingin mendelete <?php echo $data['username'] ?> ?</h5>
                      </div>
                      <div class="modal-footer">
                              <form method="POST" action="function.php">
                              <input type="text" style="display: none;" name="username" value="<?php echo $data['username'] ?>">
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
            { "width": "10%"}
            
            
  ]
    });
} );
      </script>
  </body>
</html>
