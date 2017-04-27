<?php

$usname = $_REQUEST['usname'];
$phone = $_REQUEST['phone'];
$email=$_POST['email'];
$jobid=$_POST['JobName'];
$businessid=$_POST['BusinessName'];

include '../config/config.php';

$sql = "INSERT into userinfo(usname,phone,email,jobid,businessid) VALUE ('$usname','$phone','$email','$jobid','$businessid');";
$result = mysqli_query($conn,$sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>