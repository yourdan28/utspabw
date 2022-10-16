<?php 
	include "koneksi.php" ;
	$data = mysqli_query ($koneksi, "SELECT * FROM tb_slide WHERE id_slide= '$_GET[id]' ") ;
	$row = mysqli_fetch_array($data) ;

	$gambar = $row['gambar'] ;
	if(file_exists('file/'.$gambar))
	{
		unlink('file/'.$gambar) ;
	}
	$query = "DELETE FROM tb_slide WHERE id_slide = '$_GET[id]' ";
	mysqli_query($koneksi, $query) or die ("SQL Error ".mysqli_error()) ;
	header('location:home.php')
?>