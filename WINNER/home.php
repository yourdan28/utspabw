<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Farmagic</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
   
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
   
      <!-- swiper css link  -->
      <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
   
      <!-- custom css file link  -->
      <link rel="stylesheet" href="csssss/style.css">
   

      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="#" class="logo"> <i class="fas fa-lightbulb"></i> Farmagic </a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.html">Beranda</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="berita.html">Berita</a>
                              </li>					
                              <li class="nav-item">
                                 <a class="nav-link" href="fakta.html">Fakta Menarik</a>
                              </li>            
                              <li class="nav-item">
                                 <a class="nav-link" href="form.php">Berbagi</a>
                              </li>                                                		  
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">Tentang</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="../index.php"><iconify-icon icon="fa:sign-out"></iconify-icon> </a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="row d_flex">
                           <div class="col-md-6">
                              <div class="text-bg">
                                 <div class="text-banner">
                                 <?php 
                                    include "koneksi.php" ;
                                    $data = mysqli_query($koneksi, "SELECT * FROM tb_slide order by id_slide DESC") ;
                                    while ($row = mysqli_fetch_array($data)) {
                                 ?>
                                 <h1><?php echo $row['judul'] ; ?></h1>
                                 <p><?php echo $row['deskripsi'] ; ?></p>
                                 <a href="edit.php?id=<?php echo $row['id_slide'] ; ?>"class="btn btn-danger mt-4">Edit</a>
                                 <a href="delete.php?id=<?php echo $row['id_slide'] ; ?>"class="btn btn-danger mt-4">Delete</a>
                              </div>
                           </div> </div>
                           <div class="col-md-6">
                              <div class="text_img">
                                 <figure>
                                 <img src="file/<?php echo $row['gambar'] ; ?>" style="width: 500px;">
                                 </figure>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <?php } ?>

            <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-chevron-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-chevron-right" aria-hidden="true"></i>
            </a>
         </div>
         
      </section>
      <!-- end banner -->
      <!--tambah data-->
      <div class="container">
		<div class="col-md-12 row justify-content-center">
			<div class="col-md-8 mt-4">
				<div class="col-md-12 mt-4">
					<center><h1>Fitur Upload Data di Header</h1></center>
				</div>
            <center><a href="form_upload.php" class="btn btn-success mb-4">Upload</a></center>
                  </div>     
                  </div>
               </div>
            </div>
         </div>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                               
      <!---->
      <!--Fusion Chart-->
      <div class="container">
		<div class="col-md-12 row justify-content-center">
			<div class="col-md-8 mt-4">
				<div class="col-md-12 mt-4">
					<center><h1>Fusion Charts</h1></center>
				</div>
            <center><a href="../fc/chartssss.php" class="btn btn-success mb-4">Charts</a></center>
                  </div>     
                  </div>
               </div>
            </div>
         </div>   
      <!--selsai fusion chart-->
      <!--Fitur upload banyak data-->
      <div class="container">
		<div class="col-md-12 row justify-content-center">
      <div class="col-md-12 mt-4">
					<center><h1>Upload Data Massal</h1></center>
				</div>
				<form action="" method="POST" enctype="multipart/form-data">
					<input type="file" name="data">
					<input type="submit" name="input" value="INSERT" class="btn btn-primary mt-3">
				</form>
			</div>
		</div>
		</div>
<script type="text/javascript" src="css/bootstrap.min.js"></script>

<?php
	if(isset($_POST['input'])){
		$urut   = 1;
		$datanama  =  $_FILES['data']['name'];
		$datatmp   =  $_FILES['data']['tmp_name'];	
		$exe       =  pathinfo($datanama, PATHINFO_EXTENSION);
		$folder    = 'file/';
         
		if($exe=='xlsx'){
			$upload = move_uploaded_file($datatmp, $folder.$datanama);
			if($upload){
				$open = fopen($folder.$datanama, 'r');
				while (($row = fgetxlsx($open, 1000, ','))!==FALSE ) {
					    $sql = mysqli_query($koneksi,"INSERT INTO cerita
					    VALUES('','".$row[0]."','".$row[1]."','".$row[2]."','".$row[3]."') ")or die('Error: ' . mysqli_error($koneksi));;

				}

			}else{
				echo "Gagal diupload";
			}
		}else{
			echo "Bukan File CSV";
		}

	}
?>


      <!---->
      <!-- team -->
      <div class="team">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="team_img">
                     <iframe width="460" height="350" src="https://www.youtube.com/embed/42LVobVyxL8" title="Perkenalan Website Farmagic" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>
               </div>
               <div class="col-md-6 offset-md-1">
                  <div class="titlepage">
                     <h2>Apa itu Farmagic?</h2>
                     <p>Farmagic adalah sebuah situs yang menampung berita, fakta menarik dan tutorial terkait pertanian. Selain itu, Farmagic juga menyediakan ruang untuk berbagi cerita pengalaman selama menjadi petani milenial dan nantinya cerita yang paling menarik akan dipublish. Farmagic merupakan situs untuk pengembangan diri melalui pengetahuan-pengetahuan yang dibagikan dari satu orang ke orang lainnya.</p>
                  </div>
               </div>
            </div>
         </div>

         <script> 
            window.onload = function ignielYtube() {
              var youtube = $('iframe[src*="youtube.com"]');
              youtube.each(function() {
                $(this).attr('aspectRatio', this.height / this.width).attr('style', 'width:100%');
              });
              $(window).resize(function() {
                youtube.each(function() {
                  $(this).attr('height', $(this).width() * $(this).attr('aspectRatio'));
                });
              }).resize();
            };
            //]]> </script>
         <!-- team -->
         <!-- services -->
         <div  class="services">
            <div class="container">
               <div class="row">
                  <div class="col-md-10 offset-md-1">
                     <div class="titlepage">
                        <center> <h2>Fitur Kami</h2> </center><br>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-4">
                     <div id="serv_hover"  class="services_box">
                        <i><img src="images/service1.png" alt="#"/></i>
                        <h3>Berita</h3>
                        <a class="right_irro" href="berita.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div id="serv_hover" class="services_box">
                        <i><img src="images/service2.png" alt="#"/></i>
                        <h3>Fakta Menarik</h3>
                        <a class="right_irro" href="#"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div id="serv_hover" class="services_box">
                        <i><img src="images/service3.png" alt="#"/></i>
                        <h3>Berbagi</h3>
                        <a class="right_irro" href="form.html"><i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end services -->

      <!-- testimonial -->
      <div class="testimonial">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Berbagi Cerita</h2>
                     <p>labore et dolore magna aliqua. Ut enim ad minim veniam, quis </p>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-6 ">
                  <div class="test_box margin_bottom">
                     <p>psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                     <div class="test_icon">
                        <i><img src="images/cos.png" alt="#"/></i>
                        <h4>Joans Mark <br> <span class="yellow">Call</span></h4>
                     </div>
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="test_box">
                     <p>psum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum </p>
                     <div class="test_icon">
                        <i><img src="images/cos.png" alt="#"/></i>
                        <h4>Joans Mark <br> <span class="yellow">Call</span></h4>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end testimonial -->
     <!--  footer -->
     <footer>
		<div class="footer">
		   <div class="container">
			  <div class="row">
				<div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
					<h3> <i class="fas fa-lightbulb"></i> Farmagic </h3>
					<ul class="about_us">
					   <li>Petani Milenial  Kunci Ketahanan Pangan Indonesia</li>
					</ul>
				 </div>

				 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
					<h3>Sitemap</h3>
					<ul class="link_menu">
					   <li><a href="index.html">Beranda</a></li>
					   <li><a href="berita.html">Berita</a></li>
					   <li><a href="fakta.html">Fakta Menarik</a></li>
					   <li><a href="berbagi.html">Berbagi</a></li>
					   <li><a href="about.html">Tentang</a></li>
					</ul>
				 </div>
				 <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
					<h3>Media Sosial</h3>
					<ul class="social_icon">
						<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					 </ul>
				 </div>				 
			  </div>
		   </div>
		   <div class="copyright">
			  <div class="container">
				 <div class="row">
					<div class="col-md-10 offset-md-1">
					   <p>© 2022 All Rights Reserved. Design by <a href=about.html>Farmagic</a></p>
					</div>
				 </div>
			  </div>
		   </div>
		</div>
	 </footer>
	 <!-- end footer -->






<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>

      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>

