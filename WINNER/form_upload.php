<!DOCTYPE html>
<html>
<head>
	<title>Create</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
	<div class="conteiner">
		<div class="col-md-12 row justify-content-center">
			<div class="col-md-6 mt-5">
				<div class="col-md-12 text-center">
					<h2>Create</h2>
				</div>
				<div class="col-md-12 mt-5">
					<form enctype="multipart/form-data" method="post" action="upload.php">
						
						<div class="mb-3">
						  <label class="form-label">Judul</label>
						  <input type="text" name="judul" class="form-control" >
						</div>
						<div class="mb-3">
						  <label class="form-label">Deskripsi</label>
						  <input type="text" name="deskripsi" class="form-control" >
						</div>
						<div class="mb-3">
						  <label class="form-label">Foto</label>
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