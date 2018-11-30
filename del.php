<?php //Johan Antonius Salim 1301164150
	include "koneksi.php";
	session_start();
	$num = "SELECT * from addbarang where idbarang ={$_GET['id']}";
    $query=$conn->query($num);
    $data= $query->fetch_assoc();


    $numcart = "SELECT * from cart where idbarang ={$_GET['id']} and username='{$_SESSION['user']}'";
    $query=$conn->query($numcart);
    $datacart= $query->fetch_assoc();

    $sql = "UPDATE addbarang set stock = ({$data['stock']}+{$datacart['jumlah']}) where idbarang = {$_GET['id']} ";
	$conn->query($sql);

	$query = mysqli_query($conn, "DELETE FROM cart WHERE idbarang = '{$_GET['id']}' and username='{$_SESSION['user']}' ");

	header("Location: KeranjangBelanja.php");
		die();
?>