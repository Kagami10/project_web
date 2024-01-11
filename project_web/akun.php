<!DOCTYPE html>
<html>
<head>
	<title>Input Profil</title>
</head>
<body>
<h1>Daftar Anggota</h1>
Silahkan Isi Profil Anda Dengan Benar
<hr size="width=50%">
<table border="0px">
<form action="pro_akun.php" method="post">
<style>
	#daftar{
		background: #ffc600;
		border: 2px groove #ff6400;
		margin: auto;
		width: 400px;
		padding: 4px;
		border-radius: 3px;
	}
	.textbox{
		border: 3px groove #ff6400;
		height: 25px;
	}
	.textarea{
		border: 2px groove #ff6400;
	}
	.btn{
		width: 85px;
		height: 30px;
		color: #099;
		font-weight: bold;
		margin-bottom: 3px;
	}
	.btn:hoover{
		background: #ffc600;
		color: #ff6400;
		font-weight: bold;
		cursor: pointer;
		border: 2px groove #ff6400;
		border-radius: 4px;
	}
</style>
<tr><td>Nama Depan</td> <td>:</td> <td><input name="nick" size="25"class="texbox"></td></tr>
<tr><td>Nama Belakang</td> <td>:</td> <td><input name="last" size="25"class="texbox"></td></tr>
<tr><td>Email</td> <td>:</td> <td><input name="email" size="25"class="texbox"></td></tr>
<tr><td>Password</td> <td>:</td> <td><input type="password" name="passwd" value="" placeholder="....."></td></tr>
<tr><td><input type="submit" value="simpan" class="btn">
<input type="hidden" name="act" value="add"></td></tr>
</form>
</table>
</body>
</html>							