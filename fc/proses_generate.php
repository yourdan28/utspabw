<?php
include("koneksi.php");

//Subject Hama
$query = 'SELECT id from tb_slide WHERE judul="Patut dicoba popok bayi jadi pupuk"';
$data = mysqli_query($koneksi, $query);
$total = mysqli_num_rows($data);


//Subject Kompos
$query = 'SELECT id from tb_slide WHERE judul="Kotoran Manusia Bisa Jadi Pupuk"';
$data = mysqli_query($koneksi, $query);
$total = mysqli_num_rows($data);


 ?>
