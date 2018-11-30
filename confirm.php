
<?php
	//Johan Antonius Salim 1301164150
 	include "koneksi.php";
    session_start();
    $sql = "SELECT * FROM cart WHERE username = '".$_SESSION['user']."'";

 		$result = $conn->query($sql);
 		
    	if ($result->num_rows > 0) {
     	
     	$sql = "DELETE FROM cart WHERE username = '".$_SESSION['user']."'";
    	$result = $conn->query($sql);
    	$message = "Pesanan Anda Sudah di Proses. Mohon Ditunggu";
    	echo "<script type='text/javascript'>alert('$message');</script>";
    	header('Refresh: ; url=KeranjangBelanja.php');
		die();
    	} 
    	else{
 		$message = "Keranjang Belanja Masih kosong";
    	echo "<script type='text/javascript'>alert('$message');</script>";
    	header('Refresh: ; url=KeranjangBelanja.php');
    	}
 		
    	
?>