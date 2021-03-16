<?php
$koneksi = new mysqli("sql308.epizy.com", "epiz_27456010", "k6mTdJdqfC", "epiz_27456010_indonesiaadventure");
?>
<!doctype html>
<html lang="en">

<head>
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Informasi Wisata Indonesia">
	<meta name="author" content="Arnold Agusti Pratama">
	<title>Indonesia Adventure</title>

	<!-- Styles -->
	<link rel='stylesheet' href='assets/css/bootstrap.min.css'>
	<link rel='stylesheet' href='assets/css/animate.min.css'>
	<link rel='stylesheet' href="assets/css/font-awesome.min.css" />
	<link rel='stylesheet' href="assets/css/style.css" />

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800' rel='stylesheet' type='text/css'>

	<!-- Favicon -->
	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
</head>

<body>
	<!-- Begin Hero Bg -->
	<div id="parallax">
	</div>
	<!-- End Hero Bg
	================================================== -->
	<!-- Start Header
	================================================== -->
	<header id="header" class="navbar navbar-inverse navbar-fixed-top" role="banner">
		<div class="container">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<!-- Your Logo -->
				<a href="#hero" class="navbar-brand">INDONESIA <span class="lighter">ADVENTURE</span></a>
			</div>
			<!-- Start Navigation -->
			<nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
				<ul class="nav navbar-nav">
					<li>
						<a href="#hero">Home</a>
					</li>
					<li>
						<a href="#gallery">Wisata</a>
					</li>
					<li>
						<a href="#event">Event</a>
					</li>
					<li>
						<a href="#about">Hotel</a>
					</li>
					<li>
						<a href="#contactarea">Contact</a>
					</li>
					<li>
						<a href="./admin/login.php" target="_BLANK">Admin</a>
					</li>
				</ul>
			</nav>
		</div>
	</header>

	<!-- Intro
	================================================== -->
	<section id="hero" class="section">
		<div class="container">
			<div class="row">
				<div class="col-md-5">
					<div class="herotext">
						<h1 class="wow bounceInDown" data-wow-duration="1s" data-wow-delay="0.1s">Hai <span class="lighter">Adventurer !!</span></h1>
						<p class="lead wow zoomIn" data-wow-duration="2s" data-wow-delay="0.5s">
							Temukan Berbagai Informasi Wisata Yang Menarik Untuk Di Kunjungi.
						</p>
						<p>
							<a href="#gallery" class="btn btn-default btn-lg wow fadeInLeft" role="button"> View Wisata </a> &nbsp; <a href="#contactarea" class="btn btn-default btn-lg wow fadeInRight" role="button">Contact</a>
						</p>
					</div>
				</div>
				<div class="col-md-7">
				</div>
			</div>
		</div>
	</section>
	<!-- Random
	================================================== -->
	<section class="parallax section" style="background-image: url('./assets/img/random1.jpg');">
		<div class="wrapsection">
			<div class="parallax-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 sol-sm-12">
						<div class="maintitle">
							<h3 class="section-title justtitle">INDONESIA</h3>
							<p class="lead bottom0 wow bounceInUp">
								Indonesia terkenal di mancanegara sebagai negara dengan alam yang indah. Negara kepulauan seluas 1,91 juta km2 ini memang memiliki bentang alam yang memesona, mulai dari Aceh hingga Papua. Tak heran jika jumlah wisatawan yang datang terus bertambah, baik dari dalam maupun luar negeri untuk melihat langsung ragam keindahan wisata alam yang ada di Indonesia.
								Karena keindahan alam Indonesia yang tak terkira, berlibur pun tak perlu jauh-jauh ke luar negeri. Ada sejumlah destinasi wisata alam Indonesia yang sangat menarik untuk dikunjungi
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Gallery
	================================================== -->
	<section id="gallery" class="parallax section" style="background-image: url('./assets/img/2.jpg');">
		<div class="wrapsection">
			<div class="parallax-overlay" style="background-color:#00c1c1;opacity:0.9;"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12 sol-sm-12">
						<div class="maintitle">
							<h3 class="section-title">Objek Wisata</h3>
							<p class="lead wow flipInX">
								Rekomendasi Tempat-Tempat Objek Wisata Yang Paling Wajib Untuk Kalian Kunjungi Di INDONESIA.
							</p>
						</div>
					</div>
					<?php
					$sql1 = $koneksi->query("SELECT * FROM kota ORDER BY nama_kota ASC");
					while ($data1 = $sql1->fetch_assoc()) {
						$nmkota = $data1["nama_kota"];
					?>
						<marquee behavior="slide" direction="up" height=50px>
							<div class="maintitle">
								<p class="section-title"><?php echo $data1["nama_kota"]; ?></p>
							</div>
						</marquee>
						<?php
						$sql = $koneksi->query("SELECT * FROM objk_wisata WHERE kota='$nmkota' ORDER BY objek_wisata");
						while ($data = $sql->fetch_assoc()) {
						?>
							<div class="col-md-4">
								<a href="./admin/img/wisata/<?php echo $data["gambar"]; ?>" title="<?php echo $data["deskripsi"]; ?>">
									<img src="./admin/img/wisata/<?php echo $data["gambar"]; ?>" alt="<?php echo $data["objek_wisata"]; ?>" class="image-responsive">
									<div class="description">
										<span class="caption"><?php echo $data["objek_wisata"]; ?></span>
										<span class="camera"><i class="fa fa-heart"></i></span>
										<div class="clearfix"></div>
									</div>
								</a>
							</div>
						<?php } ?>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!-- Text Carousel
	================================================== -->
	<section id="event" class="parallax section" style="background-image: url(./assets/img/3.jpg);">
		<div class="wrapsection">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="maintitle">
							<h3 class="section-title"><strong>Event</strong></h3>
							<p class="lead">
								Hidup bergerak sangat cepat. Kalau kamu tak berhenti dan melihat-lihat sebentar, kamu bisa melewatkannya
							</p>
						</div>
						<div id="Carousel" class="carousel slide">
							
								<ol class="carousel-indicators">
								<?php
							$sql = $koneksi->query("SELECT * FROM event WHERE id=1");
							while ($data = $sql->fetch_assoc()) {
								$slide = $data["id"];
							?>
									<li data-target="#Carousel" data-slide-to="<?php 1 - $id ?>" class="active"></li>
									<?php } ?>
									<?php
							$sql = $koneksi->query("SELECT * FROM event WHERE id>1");
							while ($data = $sql->fetch_assoc()) {
								$slide = $data["id"];
							?>
									<li data-target="#Carousel" data-slide-to="<?php 1 - $id ?>"></li>
									<?php } ?>
								</ol>
							
							<div class="carousel-inner">
								<?php
								$sql = $koneksi->query("SELECT * FROM event WHERE id=1 ORDER BY nm_event ASC");
								while ($data = $sql->fetch_assoc()) {
								?>
									<div class="item active">
										<blockquote>
											<p class="lead">
												<img src="./admin/img/event/<?php echo $data["gambar"]; ?>" alt="<?php echo $data["deskripsi"]; ?>" width="645" height="380"><br>
												<?php echo $data["nm_event"]; ?>
											</p>
											<small><?php echo $data["deskripsi"]; ?></small><br><?php echo $data["kota"]; ?>
										</blockquote>
									</div>
								<?php }
								$sql = $koneksi->query("SELECT * FROM event WHERE id>1 ORDER BY nm_event ASC");
								while ($data = $sql->fetch_assoc()) {
								?>
									<div class="item">
										<blockquote>
											<p class="lead">
												<img src="./admin/img/event/<?php echo $data["gambar"]; ?>" alt="<?php echo $data["deskripsi"]; ?>" width="645" height="380"><br>
												<?php echo $data["nm_event"]; ?>
											</p>
											<small><?php echo $data["deskripsi"]; ?></small><br><?php echo $data["kota"]; ?>
										</blockquote>
									</div>
								<?php } ?>
							</div>
							<a class="left carousel-control" href="#Carousel" data-slide="prev">
								<span class="glyphicon glyphicon-chevron-left"></span>
							</a>
							<a class="right carousel-control" href="#Carousel" data-slide="next">
								<span class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- About
	================================================== -->
	<section id="about" class="parallax section" style="background-image: url('./assets/img/4.jpg');">
		<div class="wrapsection">
			<div class="parallax-overlay" style="background-color: #01b0d1;opacity:0.9;"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<!-- Title -->
						<div class="maintitle">
							<h3 class="section-title"><strong>HOTEL</strong></h3>
							<p class="lead">
								Petualangan adalah sebuah liburan panjang untuk kami yang lelah terkurung di dalam suatu tempat.
							</p>
						</div>
					</div>
					<?php
					$sql = $koneksi->query("SELECT * FROM hotel ORDER BY nm_hotel ASC");
					while ($data = $sql->fetch_assoc()) {
					?>
						<div class="col-md-4 col-sm-6">
							<div class="service-box wow flipInY" data-wow-duration="1.5s" data-wow-delay="0.1s">
								<img src="./admin/img/hotel/<?php echo $data["gambar"]; ?>" alt="<?php echo $data["deskripsi"]; ?>">
								<h3><?php echo $data["nm_hotel"]; ?></h3>
								<div class="text-left">
									<p>
										<?php echo $data["deskripsi"]; ?>
									</p>
									<p class="text-center">
										<b><?php echo $data["kota"]; ?></b>
									</p>
								</div>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div>
	</section>
	<!-- Random
	================================================== -->
	<section class="whitecolor parallax section" style="background-image: url(./assets/img/random2.jpg);">
		<div class="wrapsection">
			<div class="container">
				<div class="row">
					<div class="col-md-12 sol-sm-12">
						<div class="maintitle">
							<h3 class="section-title justtitle">Life is short <span class="wow flipInX">&amp; the world is wide</span></h3>
							<p class="lead bottom0">
								Tujuan hidup adalah untuk menjalaninya, untuk merasakan pengalaman sepenuhnya, untuk meraih dengan penuh semangat dan tanpa rasa takut akan pengalaman yang lebih baru dan lebih kaya
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- FAQ
	================================================== -->
	<section id="faq" class="section">
		<div class="wrapsection">
			<div class="container">
				<div class="row">
					<div class="col-md-12 sol-sm-12">
						<div class="maintitle">
							<h3 class="section-title">Question <span class="wow bounceInRight">And Answer</span></h3>
							<p class="lead">
								Terkadang kita membutuhkan travelling dan liburan untuk mendamaikan pikiran dan hati kita.
							</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<div class="faq-block wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0s">
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
												Siapa Pembuat Website Indonesia Adventure ? </a>
										</h4>
									</div>
									<div id="collapseOne" class="panel-collapse collapse">
										<div class="panel-body">
											Pembuat Website Indonesia Adventure adalah Arnold Agusti Pratama.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
												Untuk Apa Website ini ? </a>
										</h4>
									</div>
									<div id="collapseTwo" class="panel-collapse collapse">
										<div class="panel-body">
											Website ini dibuat untuk Para wisatawan yang ingin berpetualangan Di indonesia dengan Objek Wisata yang Mengagumkan. serta sebagai salah satu tugas Pemrograman Web I.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
												Terinpirasi Dari Mana ? </a>
										</h4>
									</div>
									<div id="collapseThree" class="panel-collapse collapse">
										<div class="panel-body">
											Terinsipirasi dari Kurangnya Info Objek Wisata, Event, Serta Hotel yang ada Indonesia agar memberikan kemudahan bagi wisatawan dalam mendapatkan informasi lokasi objek wisata.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="faq-block wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.1s">
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">
												Bagaimana Membuat Website Ini ? </a>
										</h4>
									</div>
									<div id="collapseFour" class="panel-collapse collapse">
										<div class="panel-body">
											Website ini dibuat menggunakan Bahasa PHP, HTML, CSS, Js, dan Database. Software yang Digunakan adalah Visual Code Studio, XAMPP, Web Browser.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">
												Templete Apa Yang Digunakan? </a>
										</h4>
									</div>
									<div id="collapseFive" class="panel-collapse collapse">
										<div class="panel-body">
											Templete yang digunakan berasal dari website FreeCSS. <br> link : <a href="https://www.free-css.com/">https://www.free-css.com/</a>
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseSix">
												Objek Wisata Apa Saja Yang Harus Dikunjungi ? </a>
										</h4>
									</div>
									<div id="collapseSix" class="panel-collapse collapse">
										<div class="panel-body">
											Semua Wisata yang ada di indonesia wajib dikunjungi. Namun beberapa tempat seperti Candi Borobudur, Pantai Kuta, Monumen Nasional, Gunung Bromo dan banyak lagi yang menjadi primadona di Indonesia.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-12">
						<div class="faq-block wow bounceInDown" data-wow-duration="1.5s" data-wow-delay="0.2s">
							<div class="panel-group">
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseSeven">
												Barang Apa Saja Yang Wajib Dibawa Saat Berpetualang? </a>
										</h4>
									</div>
									<div id="collapseSeven" class="panel-collapse collapse">
										<div class="panel-body">
											Barang yang wajib di bawa adalah Peralatan P3K, Air Mineral, Dokumen Perjalanan, Pakaian, Peralatan mandi, Makanan Ringan.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseEight">
												Bagaimana Mengakses Halaman Admin? </a>
										</h4>
									</div>
									<div id="collapseEight" class="panel-collapse collapse">
										<div class="panel-body">
											Mengakses Halaman Admin adalah dengan menghubungi Pembuat Website.
										</div>
									</div>
								</div>
								<div class="panel panel-default">
									<div class="panel-heading">
										<h4 class="panel-title">
											<a data-toggle="collapse" data-parent="#accordion" href="#collapseNine">
												Apakah Kita Bisa Membuat Website Seperti Ini ? </a>
										</h4>
									</div>
									<div id="collapseNine" class="panel-collapse collapse">
										<div class="panel-body">
											Tentu saja bisa jika dibekali dengan Niat dan Usaha serta Tawaqal.
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Contact
	================================================== -->
	<section id="contactarea" class="parallax section" style="background-image: url(./assets/img/map.png);">
		<div class="wrapsection">
			<div class="parallax-overlay" style="background-color: #1cbb9b;opacity:0.95;"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="maintitle">
							<h3 class="section-title">Contact Me</h3>
							<p class="lead">
								Silakan hubungi saya jika ada yang ingin didiskusikan.
							</p>
						</div>
						<form id="contact" name="contact" method="post" class="text-left">
							<fieldset>
								<div class="row">
									<div class="col-md-4 wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="2s">
										<label for="name">Name<span class="required">*</span></label>
										<input type="text" name="name" id="name" size="30" value="" required />
									</div>
									<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
										<label for="email">Email<span class="required">*</span></label>
										<input type="text" name="email" id="email" size="30" value="" required />
									</div>
									<div class="col-md-4 wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="2s">
										<label for="phone">Phone</label>
										<input type="text" name="phone" id="phone" size="30" value="" />
									</div>
								</div>
								<div class="wow fadeIn animated" data-wow-delay="0.3s" data-wow-duration="1.5" style="margin-top:15px;">
									<label for="message">Message<span class="required">*</span></label>
									<textarea name="message" id="message" required></textarea>
								</div>
								<div class="wow fadeIn animated" data-wow-delay="0.3" data-wow-duration="1.5s">
									<a href="mailto:arnoldagusti8@gmail.com"><input id="submit" type="submit" value="Send" /></a>
								</div>
							</fieldset>

						</form>
						<div id="success">
							<p class="contactalert">
								Your message was sent succssfully! I will be in touch as soon as I can.
							</p>
						</div>
						<div id="error">
							<p class="contactalert">
								Something went wrong, try refreshing and submitting the form again.
							</p>
						</div>
						<center><img src="assets/img/photo.jpeg" width="200" height="237" alt="Photo" title="Arnold Agusti Pratama"></center>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Credits 
=============================================== -->
	<section id="credits" class="text-center">
		<span class="social wow zoomIn">
			<a href="mailto:arnoldagusti8@gmail.com"><i class="fa fa-send"></i></a>
			<a href="https://www.instagram.com/arnold_agusti32/"><i class="fa fa-instagram"></i></a>
			<a href="https://github.com/arnoldagusti32"><i class="fa fa-github"></i></a>
			<a href="https://www.linkedin.com/in/arnold-agusti-6a0b281a1/"><i class="fa fa-linkedin"></i></a>
			<a href="https://www.facebook.com/arnol.agusti"><i class="fa fab fa-facebook"></i></a>
			<a href="https://wa.me/+6287771297211"><i class="fa fab fa-whatsapp"></i></a>
		</span><br />
		Copyright &copy; <a href="../">Arnold Agusti Pratama</a>
		<br />181011401732 <i class="fa fa-heart"></i> 05TPLM001
	</section>
	<!-- Bootstrap core JavaScript
	================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/jquery.scrollTo.min.js"></script>
	<script src="assets/js/jquery.localScroll.min.js"></script>
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<script src="assets/js/validate.js"></script>
	<script src="assets/js/common.js"></script>
</body>

</html>