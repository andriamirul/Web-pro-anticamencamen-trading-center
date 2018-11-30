<?php
include 'config.php';

  /* Insert Your Query to Edit and Delete User*/


function tambahdata() {//jehan mahsan 1301160441
		include "koneksi.php";
		$sql = "INSERT INTO user (username,email,password) VALUES ('{$_POST['username']}', '{$_POST['email']}', '{$_POST['password']}')";
		if ($conn->query($sql) === TRUE) {
			$message = "Berhasil daftar , silahkan login";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('Refresh: ; url=loginUTS.php');
		} else {
			$message = "Gagal daftar . Username sudah terdaftar,silahkan daftar ulang";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('Refresh: ; url=SignupUTS.php');
			}
		$conn->close();
		
	}
	function forgetpass(){ //jehan mahsan 1301160441
		include "koneksi.php";
		$sql = "SELECT username FROM user WHERE username = '{$_POST['username']}'";
		$result = $conn->query($sql);
		if ($result->num_rows == 1) {
					$sql = "UPDATE user SET password ='123456' WHERE username ='{$_POST['username']}' ";
				if ($conn->query($sql) === TRUE) {
					$message = "Password anda sudah di reset";
					echo "<script type='text/javascript'>alert('$message');</script>";
					header('Refresh: ; url=loginUTS.php');
				} else {
					$message = "username anda tidak terdaftar";
					echo "<script type='text/javascript'>alert('$message');</script>";
					header('Refresh: ; url=SignupUTS.php');
					}
     	
    	} 
    	else if ($result->num_rows != 1)  {
    		$message = "username anda tidak terdatar";
			echo "<script type='text/javascript'>alert('$message');</script>";
			header('Refresh: ; url=forgetpass.php');
     	

   	 	}

 		$conn->close();

		
		
	}
	function login(){ //jehan mahsan 1301160441

 		include "koneksi.php";

 		$sql = "SELECT username, password FROM user WHERE username = '{$_POST['uname']}' AND password = '{$_POST['pwd']}'";

 		$result = $conn->query($sql);
 		
    	if ($result->num_rows == 1) {
     	session_start();
     	$_SESSION['user'] = $_POST['uname'];
     	header("Location: CatalogUTS.php");
    	} 
    	else if(($_POST['uname']=='admin') AND ($_POST['pwd']=='admin')){
 			header("Location: AdminUTS.php");
 		}
    	else if ($result->num_rows != 1)  {
     	$message = "Username atau password salah";
		echo "<script type='text/javascript'>alert('$message');</script>";
     	header('Refresh: ; url=LoginUTS.php');
   	 	}


 		$conn->close();

	}

    function edt($conn){
    	$sql = "UPDATE user SET email ='{$_POST['email']}' , password = '{$_POST['password']}' WHERE username = '{$_POST['username']}'";
         /*Insert Your Query to Edit User*/
         if ($conn->query($sql) === TRUE) {
		    header("Location: AdminUTS.php");
				die();
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
       
    }

    function del($conn){

    	$sql = "DELETE FROM user WHERE username = '{$_POST['username']}'";
        /* Insert Your Query to Delete User*/
        if ($conn->query($sql) === TRUE) {
		    header("Location: AdminUTS.php");
				die();
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}
        
    }

	if (isset($_POST['daftar'])) {
		tambahdata();
	}
	if (isset($_POST['submit'])) {
		forgetpass();
	}
	if (isset($_POST['submitlogin'])) {
		login();
	}
    if (isset($_POST['edit'])) {
		edt($conn);
	}

	if (isset($_POST['delete'])) {
		del($conn);
	}
	
  ?>