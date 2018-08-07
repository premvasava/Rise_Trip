<?php 
session_start();
include("conn.php");

@$email = $_POST['email'];
@$password = $_POST['password'];
$response = array();


$sqlquery = "select * from user where U_email='$email' and U_password='$password'";



$result = mysqli_query($conn,$sqlquery);
 $row=mysqli_num_rows($result);
    
if ($row==1) 
{
    while($row=mysqli_fetch_array($result))
    {
    echo mysqli_error($conn);
    $response['status']=1;
    
$userdata = array('uid'=> $row['U_id'], 'name'=> $row['U_name']);
}
   $_SESSION['userdisplay']= $userdata;
    
	header('location: ./display.php');
        
	//$response['message']="login sucessfull";
	//echo json_encode($response);
}


else 
{
	header('location: ./loginform.html');
	echo mysqli_error($conn);
	$response['status']=0;
	$response['message']="login not sucessfull";
    	echo json_encode($response);
 }   

?>