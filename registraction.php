<?php 

include('conn.php');

@$name = $_POST['username'];
@$email = $_POST['useremail'];
@$mobile = $_POST['usermobile'];
@$password = $_POST['userpassword'];
$active = 1;

$response = array();

$query = "insert into user (U_name,U_email,U_mobile,U_password,U_active) values ('$name','$email','$mobile','$password','$active')";

if (mysqli_query($conn, $query)) 
{
	echo mysqli_error($conn);
	//$response['status']=1;
	//$response['message']="registraction sucessfull";
	header('location: ./loginform.html');
	//echo json_decode($response);
} 
else 

{
	echo mysqli_error($conn);
	$response['status']=0;
	$response['message']="registraction not sucessfull";
	//echo json_decode($response);
}



?>