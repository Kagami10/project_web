<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 align="center"><a href="?p=home"> SELAMAT DATANG DI KOMUNITAS TIKTOKERS CIBADUYUT</h1>
	</div>
	<div class="main">
		<div class="left">
			<h1 align="center">
				<ul>
					<li><a href="?p=akun">Masuk</li>
					<li><a href="?p=daftar">Anggota</li>
					<li><a href="?p=data">Data Anggota</li>
					<li><a href="?p=about">About</li>
				</ul>
		</div>
		<div class="middle">

			<?php
			if(empty($_GET['p'])){
				$filename="home";
			}
			else{
				$filename=$_GET['p'];
			}
			require $filename.".php"

			?>
			<p align="center"><strong><a href="#"></a></strong></p>
		</div>
		<div class="right">
			<h3 align="center">Berita</h3>

		</div>
	</div>
	<div class="footer">
		<p align="center">Copyright @copy; 2021 Komunitas Hotwheels Cibaduyut </a></p>
	</div>
</div>
</body>
</html>