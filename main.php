<?php

function base_url($folder){
	$url = "http://localhost/portofolio/".$folder;

	return $url;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My Portofolio</title>
</head>
<link rel="stylesheet" href="<?= base_url('assets/css/style.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css'); ?>">
<link rel="stylesheet" href="<?= base_url('assets/sss/sss.css'); ?>">
<script type="text/javascript" src="<?= base_url('assets/js/jquery.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/bootstrap.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/sss/sss.js'); ?>"></script>
<script type="text/javascript" src="<?= base_url('assets/js/jquery.malihu.PageScroll2id.min.js'); ?>"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$(window).on("load", function() {
			$("a[rel='m_PageScroll2id']").mPageScroll2id();
		});

		$(".slider-technoshop").sss();
		$(".slider-ppdb").sss();
		$(".slider-absen").sss();
	});
</script>
<style>
	a#btn-to-top{
		position: fixed;
		right: 30px;
		bottom: 30px;
	}
</style>
<body>

<div id="header">
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
			<nav class="navbar navbar-default">
				<ul class="nav navbar-nav">
					<li><a href="">HOMPAGE</a></li>
					<li><a href="#section-products" rel="m_PageScroll2id">PORTOFOLIO</a></li>
					<li><a href="#section-service"  rel="m_PageScroll2id">SERVICE</a></li>
					<li><a href="#section-profile"  rel="m_PageScroll2id">PROFILE</a></li>
					<li><a href="#section-contact"  rel="m_PageScroll2id">CONTACT US</a></li>
				</ul>
			</nav>
		</div>

		<div class="col-md-4 col-md-offset-4" style="margin-top:80px;">
			<h1>Hi! How Are You ?</h1>
			<br>
			<a href="#section-products" class="btn btn-lg btn-default" rel="m_PageScroll2id">Let's Start!</a>
		</div>
	</div>
</div>

<div id="section-products">
	<div class="container">
		<div class="col-md-12">
			<h2>OUR PRODUCTS</h2>
		</div>

		<div class="col-md-4">
			<figure>
				<img alt="" src="<?= base_url('images/technoshop/pre-technoshop.jpg'); ?>" class="img img-responsive per-product">
				<figcaption>
					<h3 class="title-prod">Technoshop</h3>

					<p class="desc-prod">
						Technoshop adalah aplikasi e-commerce berbasis web. Technoshop ini menjual barang-barang
						elektronik gadget, seperti Laptop, Komputer, Deskbook, Handphone, Smartphone, dll.
					</p>

					<a href="#" data-toggle="modal" data-target="#technoshop" class="btn btn-danger">Preview</a>
				</figcaption>
			</figure>
		</div>

		<div class="col-md-4">
			<figure>
				<img alt="" src="<?= base_url('images/ppdb/pre-ppdb-01.jpg'); ?>" class="img img-responsive  per-product">
				<figcaption>
					<h3 class="title-prod">PPDB</h3>

					<p class="desc-prod">
						Aplikasi PPDB atau yang lebih dikenal dengan Aplikasi Pendaftaran Peserta Didik Baru.
						Aplikasi ini digunakan ketika adanya suatu pendaftaran ke sekolah. Aplikasi ini dapat
						membantu pekerjaan agar lebih mudah dan cepat.
					</p>

					<a href="#" data-toggle="modal" data-target="#ppdb" class="btn btn-danger">Preview</a>
				</figcaption>
			</figure>
		</div>

		<div class="col-md-4">
			<figure>
				<img alt="" src="<?= base_url('images/absen/pre-absen-01.jpg'); ?>" class="img img-responsive  per-product">
				<figcaption>
					<h3 class="title-prod">Aplikasi Absen</h3>

					<p class="desc-prod">
						Aplikasi sistem informasi yang digunakan untuk mengelola absensi di suatu sekolah, aplikasi
						ini dapat merekap data, mengirim nilai, mengecek kehadiran, dan lain sebagainya.
					</p>

					<a href="#" data-toggle="modal" data-target="#absen" class="btn btn-danger">Preview</a>
				</figcaption>
			</figure>
		</div>

	</div> <!-- end of class container -->
</div> <!-- end of id section-products -->

<div id="section-service">
	<div class="container">
		<div class="col-md-12">
			<h2>SERVICE</h2>
		</div>

		<div class="col-md-6">
			<div class="col-sm-2">
				<span class="fa fa-3x fa-paper-plane" align="center"></span>
			</div>
			<div class="col-sm-10" style="padding-top:20px;">
				<div class="sect-title">Pengerjaan Project yang cepat!</div>
				<p style="margin-top:20px;">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, beatae atque dolorum impedit provident, veritatis inventore similique, deserunt suscipit quae quas nobis temporibus tenetur. Odit voluptatibus vel cumque, voluptate nemo.
				</p>
			</div>
		</div>

		<div class="col-md-6">
			<div class="col-sm-2">
				<span class="fa fa-3x fa-check" align="center"></span>
			</div>
			<div class="col-sm-10" style="padding-top:20px;">
				<div class="sect-title">Mudah dipercaya!</div>
				<p style="margin-top:20px;">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, beatae atque dolorum impedit provident, veritatis inventore similique, deserunt suscipit quae quas nobis temporibus tenetur. Odit voluptatibus vel cumque, voluptate nemo.
				</p>
			</div>
		</div>

		<div class="batas" style="margin-top:320px;"></div>

		<div class="col-md-6">
			<div class="col-sm-2">
				<span class="fa fa-3x fa-thumbs-o-up" align="center"></span>
			</div>
			<div class="col-sm-10" style="padding-top:20px;">
				<div class="sect-title">Pelayanan yang baik!</div>
				<p style="margin-top:20px;">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, beatae atque dolorum impedit provident, veritatis inventore similique, deserunt suscipit quae quas nobis temporibus tenetur. Odit voluptatibus vel cumque, voluptate nemo.
				</p>
			</div>
		</div>

		<div class="col-md-6">
			<div class="col-sm-2">
				<span class="fa fa-3x fa-heart" align="center"></span>
			</div>
			<div class="col-sm-10" style="padding-top:20px;">
				<div class="sect-title">Dikerjakan dengan kasih sayang!</div>
				<p style="margin-top:20px;">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Unde, beatae atque dolorum impedit provident, veritatis inventore similique, deserunt suscipit quae quas nobis temporibus tenetur. Odit voluptatibus vel cumque, voluptate nemo.
				</p>
			</div>
		</div>

	</div> <!-- end of class container -->
</div>

<div id="section-profile">
	<div class="container">
		<div class="col-md-12">
			<h2>MY PROFILE</h2>
		</div>
		<div class="col-md-4 col-md-offset-4">
			<figure>
				<img src="<?= base_url('images/auth/circle.png'); ?>" alt="" class="img img-responsive img-circle">
				<figcaption style="text-align:center !important;">
					<h2>Ahmad Hanafi</h2>
					<p>
						<b><i>Student at SMK Negeri 1 Kedawung Kab. Cirebon</i></b> <br>
						Like programming, logically, create a website, and another about technology!
					</p>
				</figcaption>			
			</figure>
		</div>
		<div class="col-md-4 col-md-offset-4" align="center">
			<h3>Follow me at</h3>
			<br>
			<a href="http://www.facebook.com/ahmaddhanavie" target="_blank" class="btn btn-primary"><span class="fa fa-lg fa-facebook"></span></a>
			<a href="#" class="btn btn-info"><span class="fa fa-lg fa-twitter"></span></a>
			<a href="#" class="btn btn-danger"><span class="fa fa-lg fa-google-plus"></span></a>
			<a href="#" class="btn btn-black"><span class="fa fa-lg fa-github"></span></a>
		</div>
	</div>
</div>

<div id="section-contact">
	<div class="container">
		<div class="col-md-12">
			<h2>CONTACT US</h2>
		</div>
		<div class="col-md-8 col-md-offset-2">
			<form action="" method="post" class="form-group">
				<input type="text" class="form-control" name="name" placeholder="Your name" autocomplete="off" required>
				<br>
				<input type="email" class="form-control" name="email" placeholder="Your E-mail" autocomplete="off" required>
				<br>
				<input type="number" class="form-control" name="phone" placeholder="Number phone" autocomplete="off" required>
				<br>
				<textarea name="text" class="form-control" cols="30" rows="5" placeholder="Your Text" style="resize: none;" autocomplete="off" required></textarea>
				<br>
				<button type="submit" name="submit" class="btn btn-primary">SEND   &nbsp; <span class="fa fa-paper-plane"></span></button> &nbsp; &nbsp;  &nbsp;  &nbsp;
				<button type="reset" name="reset" class="btn btn-danger">RESET   &nbsp; <span class="fa fa-undo"></span></button>
			</form>
		</div>
	</div>
</div>

<!-- modal for aplication technosop -->
<div class="modal fade" id="technoshop" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="tecnoshoplabel">Preview : Technoshop</h4>
			</div>
			<div class="modal-body">
		        <div class="slider-technoshop">
					<img src="<?= base_url('images/technoshop/pre-technoshop.jpg');?>" alt="pre-technoshop">
					<img src="<?= base_url('images/technoshop/pre-technoshop-02.jpg');?>" alt="pre-technoshop-02">
					<img src="<?= base_url('images/technoshop/pre-technoshop-03.jpg');?>" alt="pre-technoshop-03">
					<img src="<?= base_url('images/technoshop/pre-technoshop-04.jpg');?>" alt="pre-technoshop-04">
					<img src="<?= base_url('images/technoshop/pre-technoshop-05.jpg');?>" alt="pre-technoshop-05">
					<img src="<?= base_url('images/technoshop/pre-technoshop-06.jpg');?>" alt="pre-technoshop-06">
					<img src="<?= base_url('images/technoshop/pre-technoshop-07.jpg');?>" alt="pre-technoshop-07">
				</div>
			</div>
			<div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div> <!-- end of modal-footer -->
		</div> <!-- end of modal-content -->
	</div> <!-- end of modal dialog -->
</div> <!-- end of class modal -->

<!-- modal for aplication ppdb -->
<div class="modal fade" id="ppdb" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="ppdblabel">Preview : Aplikasi PPDB</h4>
			</div>
			<div class="modal-body">
		        <div class="slider-ppdb">
					<img src="<?= base_url('images/ppdb/pre-ppdb-01.jpg'); ?>" alt="pre-ppdb-01">
					<img src="<?= base_url('images/ppdb/pre-ppdb-02.jpg'); ?>" alt="pre-ppdb-02">
					<img src="<?= base_url('images/ppdb/pre-ppdb-03.jpg'); ?>" alt="pre-ppdb-03">
					<img src="<?= base_url('images/ppdb/pre-ppdb-04.jpg'); ?>" alt="pre-ppdb-04">
					<img src="<?= base_url('images/ppdb/pre-ppdb-05.jpg'); ?>" alt="pre-ppdb-05">
					<img src="<?= base_url('images/ppdb/pre-ppdb-06.jpg'); ?>" alt="pre-ppdb-06">
					<img src="<?= base_url('images/ppdb/pre-ppdb-07.jpg'); ?>" alt="pre-ppdb-07">
					<img src="<?= base_url('images/ppdb/pre-ppdb-08.jpg'); ?>" alt="pre-ppdb-08">
					<img src="<?= base_url('images/ppdb/pre-ppdb-09.jpg'); ?>" alt="pre-ppdb-09">
					<img src="<?= base_url('images/ppdb/pre-ppdb-10.jpg'); ?>" alt="pre-ppdb-10">
					<img src="<?= base_url('images/ppdb/pre-ppdb-11.jpg'); ?>" alt="pre-ppdb-11">
					<img src="<?= base_url('images/ppdb/pre-ppdb-12.jpg'); ?>" alt="pre-ppdb-12">
					<img src="<?= base_url('images/ppdb/pre-ppdb-13.jpg'); ?>" alt="pre-ppdb-13">
					<img src="<?= base_url('images/ppdb/pre-ppdb-14.jpg'); ?>" alt="pre-ppdb-14">
					<img src="<?= base_url('images/ppdb/pre-ppdb-15.jpg'); ?>" alt="pre-ppdb-15">
				</div>
			</div>
			<div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div> <!-- end of modal-footer -->
		</div> <!-- end of modal-content -->
	</div> <!-- end of modal dialog -->
</div> <!-- end of class modal -->

<!-- modal for aplication asben -->
<div class="modal fade" id="absen" tabindex="-1" role="dialog">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				<h4 class="modal-title" id="absenlabel">Preview : Aplikasi Absen</h4>
			</div>
			<div class="modal-body">
		        <div class="slider-absen">
					<img src="<?= base_url('images/absen/pre-absen-01.jpg'); ?>" alt="pre-absen-01">
					<img src="<?= base_url('images/absen/pre-absen-02.jpg'); ?>" alt="pre-absen-02">
					<img src="<?= base_url('images/absen/pre-absen-03.jpg'); ?>" alt="pre-absen-03">
					<img src="<?= base_url('images/absen/pre-absen-04.jpg'); ?>" alt="pre-absen-04">
					<img src="<?= base_url('images/absen/pre-absen-05.jpg'); ?>" alt="pre-absen-05">
					<img src="<?= base_url('images/absen/pre-absen-06.jpg'); ?>" alt="pre-absen-06">
					<img src="<?= base_url('images/absen/pre-absen-07.jpg'); ?>" alt="pre-absen-07">
					<img src="<?= base_url('images/absen/pre-absen-08.jpg'); ?>" alt="pre-absen-08">
					<img src="<?= base_url('images/absen/pre-absen-09.jpg'); ?>" alt="pre-absen-09">
					<img src="<?= base_url('images/absen/pre-absen-10.jpg'); ?>" alt="pre-absen-10">
					<img src="<?= base_url('images/absen/pre-absen-11.jpg'); ?>" alt="pre-absen-11">
					<img src="<?= base_url('images/absen/pre-absen-12.jpg'); ?>" alt="pre-absen-12">
				</div>
			</div>
			<div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div> <!-- end of modal-footer -->
		</div> <!-- end of modal-content -->
	</div> <!-- end of modal dialog -->
</div> <!-- end of class modal -->

<div class="footer">
	<span>Copyright &copy; <?= date('Y'); ?> All Right Reserved . Design by Ahmad Hanafi</span>
</div>
	<a href="#header" class="btn btn-primary" id="btn-to-top" rel="m_PageScroll2id"><span class="glyphicon glyphicon-chevron-up"></span></a>
</body>
</html>
