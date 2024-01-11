<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Home</title>
	<meta name="viewport" content="width=device-width, intial-scale=1.0">
	<link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<h1 align="center"><a href="?p=home"> SELAMAT DATANG DI KOMUNITAS DIECASTER CIBADUYUT</h1>
	</div>
	<div class="main">
		<div class="left">
				<h3 align="center">MENU</h3>
				<ul>
					<li><a href="?p=akun">Masuk</a></li>
					<li><a href="?p=daftar">Anggota</a></li>
					<li><a href="?p=data">Data Anggota</a></li>
					<li><a href="?p=about">About</a></li>
					<li><a href="?p=koleksi">Koleksi</a></li>
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
			require $filename.".php";

			?>
			<p align="center"><strong><a href="#"></a></strong></p>
		</div>
		<div class="right">
			<h3 align="center">Berita</h3>
			<ul>
		        <li><a href="?p=Berita">Komunitas Diecaster Yogyakarta</a></li>
		        <li><a href="?p=Berita2">Kustom Battle, Komunitas Unik Miniatur Mobil Pertama di Dunia</a></li>
		    </ul>

		</div>
	</div>
	<div class="footer">
		<p align="center"> Komunitas Diecaster Cibaduyut </a></p>
	</div>
</div>
</body>
</html>