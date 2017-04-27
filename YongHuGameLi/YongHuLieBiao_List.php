<?php
	include('../config/config.php');

	$page = isset($_POST['page']) ? intval($_POST['page']) : 1;
	$rows = isset($_POST['rows']) ? intval($_POST['rows']) : 10;
	$offset = ($page-1)*$rows;
	
	$result = array();
	
	
	$rs = mysqli_query($conn,"select count(1) from userinfo a ,job b,business c where a.jobid=b.jobid and a.businessid=c.businessid;");
	$row = mysqli_fetch_row($rs);
	$result["total"] = $row[0];
	$rs = mysqli_query($conn,"select a.usid,a.usname,a.phone,a.email,b.JobName,c.BusinessName from userinfo a ,job b,business c where a.jobid=b.jobid and a.businessid=c.businessid ORDER BY usid limit  $offset,$rows");
	$rows = array();
	while($row = mysqli_fetch_object($rs)){
		array_push($rows, $row);
	}
	$result["rows"] = $rows;
	
	echo json_encode($result);
?>