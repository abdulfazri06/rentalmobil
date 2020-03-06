<?php 
	include "koneksi.php";
	
	$query = mysqli_query($GLOBALS["___mysqli_ston"], "SELECT * FROM biodata ORDER BY nama ASC");
	
	$json = array();
	
	while($row = mysqli_fetch_assoc($query)){
		$json[] = $row;
	}
	
	echo json_encode($json);
	
	((is_null($___mysqli_res = mysqli_close($connect))) ? false : $___mysqli_res);
	
?>