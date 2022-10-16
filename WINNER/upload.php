<?php 
	include "koneksi.php" ;
	$gambar = $_FILES['gambar']['name'];
	$file_tmp = $_FILES['gambar']['tmp_name'] ;
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];

	$dir = "file/$gambar";
    move_uploaded_file($file_tmp, $dir);
    	$query = "INSERT INTO tb_slide SET 
								    judul = '$judul',
								    deskripsi = '$deskripsi',
                                    gambar = '$gambar'
	";
	mysqli_query($koneksi, $query) 
	or die("SQL Error " .mysqli_error());
	header('location:home.php');
?>