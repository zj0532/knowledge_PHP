<?php

$usid = intval($_REQUEST['usid']);

include('../config/config.php');
$sql = "delete from userinfo where UsID='$usid'";
$result = mysqli_query($conn,$sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>