<?php

$name = $_REQUEST['name'];
$uspwd=$_POST['uspwd'];
$phone = $_REQUEST['phone'];
$email=$_POST['email'];
$job=$_POST['job'];
$business=$_POST['business'];

include '../config/config.php';

$sql = "INSERT into userinfo(usname,uspwd,phone,email,jobid,businessid) VALUE ('$name','$uspwd','$phone','$email','$job','$business');";
$result = mysqli_query($conn,$sql);
if ($result){
	echo json_encode(array('success'=>true));
} else {
	echo json_encode(array('msg'=>'Some errors occured.'));
}
?>