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
		background: #transparent;
		border: 1px solid #ccc;
		margin: auto;
		width: 400px;
		padding: 4px;
		border-radius: 3px;
	}
	.textbox{
		border: 1px solid #ccc;
		height: 25px;
	}
	.textarea{
		border: 1px solid #ccc;
	}
	.btn{
		width: 85px;
		height: 30px;
		color: #099;
		font-weight: bold;
		margin-bottom: 3px;
	}
	.btn:hoover{
		background: #333;
		color: #fff;
		font-weight: bold;
		cursor: pointer;
		border: 2px solid #099;
		border-radius: 4px;
	}
</style>
<tr><td>Nama Depan</td> <td>:</td> <td><input name="nick" size="25"class="textbox"></td></tr>
<tr><td>Nama Belakang</td> <td>:</td> <td><input name="last" size="25"class="textbox"></td></tr>
<tr><td>Email</td> <td>:</td> <td><input name="email" size="25"class="textbox"></td></tr>
<tr><td>Password</td> <td>:</td> <td><input type="password" name="passwd" value="" placeholder="....."></td></tr>
<tr><td><input type="submit" value="simpan" class="btn">
<input type="hidden" name="act" value="add"></td></tr>
</form>
</table>
</body>
</html>