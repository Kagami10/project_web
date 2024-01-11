<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
	<title>Entry Anggota</title>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
	<form action="simpan-data-mahasiswa.php" method="post" enctype="multipart/form-data" name="FMHS">
	<table width="452" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#666666">
		<tr>
			<td height="40" align="center" bgcolor="#009999"><strong><font color="#FFFFFF">FORM INPUT DATA</font></strong></td>
		</tr>
		<tr>
			<td bgcolor="#ff6400"><table width="452" border="0" align="center" cellpadding="5" cellspacing="0">
				<tr>
					<td>Nama</td>
					<td>:</td>
					<td><input name="nim" type="text" id="nim" size="30" maxlength="30"></td>
				</tr>
				<tr>
					<td>Tempat Lahir</td>
					<td>:</td>
					<td><input name="tempat_lahir" type="text" id="tempat_lahir" size="30" maxlength="30"></td>
				</tr>
				<tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><select name="tgl" size="1" id="tgl">
		<?php  
		for ($i=1;$i<=31;$i++)
		{
			echo "<option value=".$i.">".$i."</option>";
		}
		?>
		        </select>
		        <select name="bln" size="1" id="bln">
		<?php
		$bulan=array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
		for ($i=0;$i<=13;$i++) 
		{ 
			echo "<option value=".$i.">".$bulan[$i]."</option>";
		}
		?>
		        </select>
		        <select name="thn" size="1" id="th">
		<?php  
		for ($i=1900;$i<=2000;$i++)
		{
			echo "<option value=".$i.">".$i."</option>";
		}
		?>
                </select></td>
            </tr>
            <tr>
            	<td>Alamat</td>
            	<td>:</td>
            	<td><texarea name="alamat" cols="30" rows="5" id="alamat"></textarea></td>
            </tr>
            <tr>
            	<td>Jenis Kelamin</td>
            	<td>:</td>
            	<td><input name="jenis_kelamin" type="radio" rows="5" value="L" checked>
            		Laki-Laki
            		<input name="jenis_kelamin" type="radio" rows="5" value="P">
            	    Perempuan</td>
            </tr>
            <tr>
            	<td>Photo</td>
            	<td>:</td>
            	<td> <input type="file" name="photo" id="photo"></td>
            </tr>
            <tr>
            	<td colspan="3" align="center"><input name="fok" type="submit" id="fok" value="OK">
            		<input name="fulang" type="reset" id="fulang" value="Ulangi">
            		<input name="fulang2" type="button" id="fulang2" value="batal" onClick="javascript:history.back()"></td>
            </tr>
        </table></td>
    </tr>
</table>
</form>
</body>
</html>