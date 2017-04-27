<?php

$usid = intval($_REQUEST['UsID']);
$usname = $_POST['usname'];
$phone = $_POST['phone'];
$email=$_POST['email'];
$JobID=$_POST['JobName'];
$BusinessID=$_POST['BusinessName'];


include('../config/config.php');

$sql = "update userinfo set usname='$usname',phone='$phone',email='$email',JobID='$JobID',BusinessID='$BusinessID' where UsID='$usid'";
$result = mysqli_query($conn,$sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>