<?php
    $id_slide = $_GET['id'];
    include "koneksi.php" ;

    $resultAll = mysqli_query($koneksi, "SELECT * FROM tb_slide WHERE id_slide='$id_slide'");

    if(!$resultAll){
        die(mysqli_error($koneksi));
    }
    

        $rowCatData = mysqli_fetch_array($resultAll);
              //echo $rowCatData["judul"];

?>


<!DOCTYPE html>
<html>
<head>
	<title>Update</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="conteiner">
		<div class="col-md-12 row justify-content-center">
			<div class="col-md-6 mt-5">
				<div class="col-md-12 text-center">
					<h2>Update</h2>
				</div>
				<div class="col-md-12 mt-5">
					<form enctype="multipart/form-data" method="post" action="edit_aksi.php">
                        <div class="mb-3">
						  <input type="hidden" name="id" value="<?php echo $rowCatData["id_slide"];?>" >
						</div>			
						<div class="mb-3">
						  <label class="form-label">Judul</label>
						  <input type="text" name="judul" class="form-control" value="<?php echo $rowCatData["judul"];?>" >
						</div>
						<div class="mb-3">
						  <label class="form-label">Deskripsi</label>
						  <input type="text" name="deskripsi" class="form-control"   value="<?php echo $rowCatData["deskripsi"];?>">
						</div>
						<div class="mb-3">
						  <label class="form-label">Foto</label>
                          <div class="image-wrapper"> 
                                <img src="file/<?php echo $rowCatData["gambar"];?>">
                          </div>
						  <input type="file" name="gambar" class="form-control" >
						</div>

						<div class="mb-3 text-end">
                            <a href="home.php"class="btn btn-danger ">Kembali</a>
							<button type="submit" class="btn btn-success">Kirim</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>
</html>