<?php
	include('../config/config.php');	
	$result = array();
	$rs = mysqli_query($conn,"select BusinessID,BusinessName from business");
	$rows = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($rows, $row);
	}
	
	echo json_encode($rows);
	
?>