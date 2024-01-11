<!DOCTYPE html>
<html>
<head>
	<title>Input Profil</title>
</head>
<body>
<h1>Data Anggota</h1>
Silahkan Isi Profil Anda Dengan Benar<br>
<hr size="width=50%">
<table border="0px">
<form action="proses.php" method="post">
<style>
	#daftar{
		background: #transparent;
		border: 2px hoover #ccc;
		margin: auto;
		width: 400px;
		padding: 4px;
		border-radius: 3px;
	}
	.texbox{
		border: 2px hoover #ccc;
		height: 25px;
	}
	.texarea{
		border: 2px hoover #ccc;
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
		border: 2px hoover #099;
		border-radius: 4px;
	}
</style>
<tr><td>Nama Lengkap</td> <td>:</td> <td><input name="nama" size="25"class="texbox"></td></tr>
<tr><td>Jenis Kelamin</td> <td>:</td> <td><select name="jk" class="texbox" value="<?php $_POST['jk']?>">
<option value="pilih">--Pilih--</option>
<option value="Laki-Laki">Laki-Laki</option>
<option value="Perempuan">Perempuan</option>
</select></td></tr>
<tr><td>Agama<td>:</td><td><select name="agama" class="texbox" value="<?php $_POST['agama']?>">
<option value="pilih">--Pilih--</option>
<option value="Islam">Islam</option>
<option value="Kristen">Kristen</option>
<option value="Hindu">Hindu</option>
<option value="Buddha">Buddha</option>
</select></tr></td>

<tr>
	  <td>Tanggal Lahir</td>
	  <td>: </td>

	  </td>
	  <td width="212"> 
	  	<select name="tgl">
	  		<option value="Tanggal">Tanggal</option>
	  		<?php 
	  		for ($t=1;$t<33;$t++) 
	  		 {echo "<option value=$t>$t</option>";}
	  		?>
	  	</select>

	  	<select name="bln">
	  		<option value="Bulan">Bulan</option>
	  		<?php  
	  		$bln=array("Januari","Februari","Maret","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
	  		for ($b=0;$b<13;$b++)
	  		{
	  	    $i=$b+1;
	  	    echo "<option value=$i>$bln[$b]</option>";
	  	    }
	  		?>
	  	</select>
	  	<select name="thn">
	  		<opion value="Tahun">Tahun</opion>
	  		<?php 
	  		for ($t=1940;$t<2005;$t++)
	  		{echo "<option value=$t>$t</option>";}  
	  		?>
	  	</select>

        </td></tr>
<tr><td>Telepon</td> <td>:</td> <td><input name="telepon" size="25" class="textbox"></td></tr>
<tr><td>Alamat</td> <td>:</td> <td><textarea name="alamat" cols="25" rows="3" class="textarea"> </textarea></td></tr>
<tr><td>Email</td> <td>:</td> <td><input name="email" size="25" class="textbox"></td></tr>
<tr><td>Password</td> <td>:</td> <td><input name="passwd" size="25"class="textbox"></td></tr>
<tr><td><input type="submit" value="Simpan" class="btn">
<input type="hidden" name="act" value="add"></td></tr>
</table>
</form>
</body>
</html>