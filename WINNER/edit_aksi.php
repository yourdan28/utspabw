<?php 
	include "koneksi.php" ;
    $id_slide   = $_POST['id'];
	$gambar     = $_FILES['gambar']['name'];
	$file_tmp   = $_FILES['gambar']['tmp_name'] ;
    $judul      = $_POST['judul'];
    $deskripsi  = $_POST['deskripsi'];
    move_uploaded_file($file_tmp, 'file'.$gambar);
    	$query  = "UPDATE tb_slide SET judul='$judul', deskripsi='$deskripsi', gambar='$gambar' WHERE id_slide='$id_slide'";
	mysqli_query($koneksi, $query) 
	or die("SQL Error " .mysqli_error());
	header('location:home.php');
?>