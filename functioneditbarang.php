<?php
include 'config.php';

  /* Insert Your Query to Edit and Delete User*/
 if (isset($_POST['edit'])) {
		edt($conn);
	}

	if (isset($_POST['delete'])) {
		del($conn);
	}

    function edt($conn) //andri amirul sonjaya 1301164234
    {
    	$sql = "UPDATE addbarang SET nama ='{$_POST['nama']}',harga = '{$_POST['harga']}',stock='{$_POST['stock']}',deskripsi='{$_POST['deskripsi']}'WHERE idbarang = '{$_POST['idbarang']}'";
         /*Insert Your Query to Edit User*/
         if ($conn->query($sql) === TRUE) {
		    header("Location: editbarang.php");
				die();
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
       
    }

    function del($conn){

    	$sql = "DELETE FROM addbarang WHERE idbarang = '{$_POST['idbarang']}'";
        /* Insert Your Query to Delete User*/
        if ($conn->query($sql) === TRUE) {
		    header("Location: editbarang.php");
				die();
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
        
    }

   
	
  ?>