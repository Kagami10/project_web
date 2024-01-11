<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Perkumpulan Tiktokers Cibaduyut</title>
</head>
<body>
	<?php
	if(isset($_GET["login_error"])){
		echo "<h2 style='color:red';>Username atau password salah</h2>";
	}
	?>
	<h1>Silahkan Login</h1>
	<form method="post" action="cek_login.php">
		<p><input type="text" name="username" value="" placeholder="Username or Email"></p>
		<p><input type="text" name="password" value="" placeholder="Password"></p>
		<p class="submit"><input type="submit" name="commit" value="Login"></p>
	</form>
</div>
</body>
</html>