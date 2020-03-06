<?php
	include "koneksi.php";
	
	$nama 	= $_POST['nama'];
	$alamat = $_POST['alamat'];
	
	class emp{}
	
	if (empty($nama) || empty($alamat)) { 
		$response = new emp();
		$response->success = 0;
		$response->message = "Kolom isian tidak boleh kosong"; 
		die(json_encode($response));
	} else {
		$query = mysqli_query($GLOBALS["___mysqli_ston"], "INSERT INTO biodata (id,nama,alamat) VALUES(0,'".$nama."','".$alamat."')");
		
		if ($query) {
			$response = new emp();
			$response->success = 1;
			$response->message = "Data berhasil di simpan";
			die(json_encode($response));
		} else{ 
			$response = new emp();
			$response->success = 0;
			$response->message = "Error simpan Data";
			die(json_encode($response)); 
		}	
	}
?>