<?php  

ob_start();
session_start();
ob_end_clean();

$username=$_POST["username"];
$password=$_POST["password"];

if($username=="komunitas" AND $password=="12345")
{
	$_SESSION["username"]=$username;
	header("location:home2.php");}
	else{
		header("location:index.php?login_error");
}
?>