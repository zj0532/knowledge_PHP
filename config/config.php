<?php
	$dbserver    = "127.0.0.1";
	$dbuser	     = "root";
	$dbpassword  = "root";
	$dbatabase   = "knowledge";

	$conn = mysqli_connect($dbserver,$dbuser,$dbpassword,$dbatabase);
	if(!$conn)
	{
		die("连接错误：" . mysqli_connect_error());
	}
	mysqli_query($conn,"SET NAMES utf8");
	
?>
