<!DOCTYPE html>
<html>
<head>
	<title>Anggota</title>
</head>
<body>
	<h1>Profil Anda</h1>
	<hr size="width=50%">
Nama Depan : <?php echo $_POST['nick'];?><br>
Nama Belakang : <?php echo $_POST['last'];?><br>
Email : <?php echo $_POST['email'];?><br>
Password : <?php echo $_POST['passwd'];?><br>
<a href="home2.php?p=akun">Input Data Lagi
</body>
</html>