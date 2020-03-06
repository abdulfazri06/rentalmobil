<?php

 /*
 

 
 */

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$name = $_POST['name'];
		$desg = $_POST['desg'];
		$sal = $_POST['salary'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO mobil (nama,posisi,kondisi) VALUES ('$name','$desg','$sal')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Mobil';
		}else{
			echo 'Gagal Menambahkan Mobil';
		}
		
		mysqli_close($con);
	}
?>