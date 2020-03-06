<?php
	
	$server		= "localhost"; // sesuaikan alamat server anda
	$user		= "root"; // sesuaikan user web server anda
	$password	= ""; // sesuaikan password web server anda
	$database	= "rental_mobil"; // sesuaikan database web server anda
	
	$connect = ($GLOBALS["___mysqli_ston"] = mysqli_connect($server,  $user,  $password)) or die ("Koneksi gagal!");
	mysqli_select_db($GLOBALS["___mysqli_ston"], $database) or die ("Database belum siap!");
?>