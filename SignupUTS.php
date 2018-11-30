<<!DOCTYPE html>
<html>
<head>
	<title>ACC TRADING CENTRE| FAQ</title>
	<link rel="stylesheet" type="text/css" href="css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="SignupUts.css">
  <link rel="stylesheet" type="text/css" href="navbar.css">


</head>
<body>
  <?php 
      include "header.php";
  ?>
     <br/>
    <br/>
    <br/>
    <br/>
  	<center>
	<div class="container" id="top">
  	<div class="row">
  	<div class="col-lg-12" >
          
          <form data-toggle="validator" role="form" action="function.php" method="post">
          <fieldset>
            <div class="legend ">
              <legend class="">Sign Up</legend>
            </div>
            <br/>
            <img src="tirek/pixel trex.jpg" class="rounded-circle img-fluid" id="pixx">
            <br/>
            <br/>
            <div class="control-group">
              <label class="control-label">Username</label>
              <div class="controls">
                <input type="text" id="username" name="username" placeholder="Username dapat berisi huruf atau angka , tanpa spasi" class="form-control input-lg" style="width:85%;">
              </div>
            </div>
            <br/>
         
            <div class="form-group ">
              <label class="control-label">E-mail</label>
              <div class="controls">
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" data-error="Email address anda tidak valid" required style="width:85%;">
                <div class="help-block with-errors col-md-12"></div>
              </div>
            </div>
            <br/>
         
            <div class="form-group">
              <label class="control-label" >Password</label>
              <div class="controls">
                <input type="password" name="password" data-minlength="6" class="form-control" id="inputPassword" data-error="Masukkan password minimal 6 karakter" placeholder="Minimum 6 character" required style="width:85%;">
        		<div class="help-block with-errors"></div>
              </div>
            </div>
            <br/>

            <div class="form-group">
              <label class="control-label" >Password (Confirm)</label>
              <div class="controls">
                <input type="password" class="form-control" id="inputPasswordConfirm" data-match="#inputPassword" data-match-error="Password yang anda masukkan salah" data-error="Masukkan konfirmasi password" placeholder="Konfirmasi password" required style="width:85%;">
        		<div class="help-block with-errors"></div>
              </div>
            </div>
            <br/>
         
            <div class="control-group">
              <!-- Button -->
              <div class="controls ">
                <button class="btn btn-success" name="daftar">Sign Up</button>
              </div>
            </div>


          </fieldset>
        </form>
      </div> 
  	</div>
	</div>	
	</center>
</body>


</html>
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="js\bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="js\bootstrap-validator-master/dist/validator.js"></script>
<script type="text/javascript" src="js\bootstrap-validator-master/dist/validator.min.js"></script>