<!DOCTYPE html>
<html>
<head>
	<title>Anggota</title>
</head>
<body>
	<h1>Profil Anda</h1>
	<hr size="width=50%">
Nama Lengkap : <?php echo $_POST['nama'];?><br>
Jenis Kelamin : <?php echo $_POST['jk'];?><br>
Agama : <?php echo $_POST['agama'];?><br>
Tanggal Lahir : <?php echo $_POST['tgl'];?><?php echo $_POST['bln'];?><?php echo $_POST['thn'];?><br>
Telepon : <?php echo $_POST['telepon'];?><br>
Email : <?php echo $_POST['email'];?><br>
Alamat : <?php echo $_POST['alamat'];?><br>
<a href="index.php">Input Data Lagi
</body>
</html>