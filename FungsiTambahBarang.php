<?php
    
    function tambahbarang(){ //Andri Amirul S 1301164234
        include 'config.php';
    $sql ="INSERT INTO addbarang(idbarang,nama,harga,stock,namagambar,deskripsi) VALUES ('".$_POST["idbarang"]."','".$_POST["nama"]."','".$_POST["harga"]."','".$_POST["stock"]."','".$_POST["namagambar"]."','".$_POST["deskripsi"]."')";
    if($conn->query($sql)===TRUE){
        $message ="Berhasil menambah barang";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header("Location: addbarang.php");
    }
    else{
        $message="Gagal eui";
        echo "<script type='text/javascript'>alert('$message');</script>";
        header('Location: addbarang.php');
    }
    $conn->close();
}

if (isset($_POST['tambahbarang'])){
   
        $target_dir = "Catalog/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                
                $uploadOk = 1;
            } else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
        }
        // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
            $uploadOk = 0;
        }
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            echo "the file you are attempting to upload is larger than the permitted size.";
            $uploadOk = 0;
        }
                // Allow certain file formats
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " Upload berhasil!";
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
    }

    }
     tambahbarang();


?>