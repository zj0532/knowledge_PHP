<?php
	include('../config/config.php');
	
	$result = array();
	$i=1;
	$rs = mysqli_query($conn,"select JobID,JobName from job");
	$rows = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($rows, $row);
	}
	
	echo json_encode($rows);
	
?>