<!DOCTYPE HTML>
<!--
	Editorial by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>

		<style>

		.img-fit {
    		max-width: 100%;
    		max-height: 100%;
			}

		.centerit {
			width: 100px;
    		height: 100px;
    		position: absolute;
    		top:0;
    		bottom: 0;
    		left: 0;
    		right: 0;
    
    		margin: auto;
}


	

</style>
		<title>Judul</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.css');?>" />
		<link rel="stylesheet" href="<?php echo base_url('assets/css/main.css');?>" />

	
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Main -->
					<div id="main">
						<div class="inner">

							<!-- Header -->
							<header id="header">
									<h2><?php foreach ($product as $row) { echo $row->nama_barang;}?></h2>
									
								</header>
							<!-- Content -->
							<section>
							
							<?php foreach ($product as $row) { ?>	
							<span class="image fit"><img src="<?= base_url('images/animasi_5.gif');?>" alt="" /></span>
							<div>
							<p style="font-size: 150%;font-family: helvetica;">
							<strong>Name : </strong><?= $row->nama_barang;?><br>
							<strong>Category : </strong><?= $row->nama_kategori;?><br>
							<strong>Price : </strong><?="IDR ".number_format($row->harga,0,',','.'); ?><br>
							<strong>Brand : </strong><?= $row->nama_merek;?><br>
							<strong>Stock : </strong><?= $row->stok;?></p>
							</div>
									
							<?php } ?>		
									
							</section>
							
								

						</div>
					</div>

				<!-- Sidebar -->
					<div id="sidebar">
						<div class="inner">

							<!-- Search -->
								<section id="search" class="alt">

								<div>
									<img class="img-fit" src="<?= base_url('images/sidebar.png');?>">
										
								</div>
								<br>
							
								
								<div>
									<form method="GET" action="<?= base_url('Home/Search');?>">
									
										<input type="text" name="query" id="query" placeholder="Search" />
										
									</form>
								</div>
								</section>

							<!-- Menu -->
								<nav id="menu">
									<header class="major">
										<h2>Menu</h2>
									</header>
									<ul>
										<li><a href="<?= base_url('Home');?>">Homepage</a></li>
										<?php foreach ($kategori as $row) {
											if(is_null($row->parent_kategori1) && is_null($row->id_kategori1)) { ?>
										   <li>
											<span class="opener"><?php echo $row->nama_kategori;?></span>
											<ul>
											<?php foreach ($kategori as $row1) { 
												if($row1->id_kategori1 == $row->id_kategori) { ?>
												<li><a href="#"><?php echo $row1->nama_kategori;	?></a></li>
												
											<?php }} ?>	
											</ul>
											
										</li>
										<?php }} ?>
										
									</ul>
								</nav>

							<!-- Section -->


							<!-- Section -->
							
								<section>
									<header class="major">
										<h2>Contact Us</h2>
									</header>
									<?php foreach ($kontak as $row) { ?>
									<p><b><?php echo $row->nama;?></b></p>
									<ul class="contact">
										<li class="icon solid fa-envelope"> <?= safe_mailto($row->email, $row->email);?></li>
										<li class="icon solid fa-phone"><?php echo $row->nomor_hp;?></li>
										<li class="icon solid fa-home"><?php echo $row->alamat;?></li>
									</ul>
									<?php } ?>
									</section>

								<section>
									<header class="major">
										<h2>Partnerships</h2>
									</header>
									
									</section>
							<!-- Footer -->
							

						</div>
					</div>

			</div>

		<!-- Scripts -->
		<script src="<?php echo base_url('assets/js/bootstrap.bundle.min.js');?>"></script>
		<script src="<?php echo base_url('assets/js/bootstrap.bundle.js');?>"></script>
			<script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script>


			<script src="<?php echo base_url('assets/js/browser.min.js');?>"></script>
			<script src="<?php echo base_url('assets/js/breakpoints.min.js');?>"></script>
			<script src="<?php echo base_url('assets/js/util.js');?>"></script>
			<script src="<?php echo base_url('assets/js/main.js');?>"></script>

	</body>
</html>
