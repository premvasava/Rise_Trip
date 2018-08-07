<?php 
session_start();
//only see //$userdata= $_SESSION['userdisplay'];

include('conn.php');
@$userid = $userdata['uid'];

@$tname=$_POST['tripname'];
@$tstart=$_POST['tripstart'];
@$tend=$_POST['tripend'];
@$timg=$_POST['tripimage'];
//@$tcreate=$_POST['uid'];

$response= array();

//$dataselect= "select trip.T_createuid, user.U_email from user inner join trip on user.U_id=trip.T_createuid";
  
$tcreate = $_SESSION['userdisplay']['uid'];
$query= "insert into trip1(T_name, T_start, T_end, T_image,T_crateuid) values ('$tname','$tstart','$tend','$timg','$tcreate')";

	

if (mysqli_query($conn, $query)) 
{
	echo mysqli_error($conn);
	$response['status']=1;
	$response['message']="trip sucessfull";
	//echo json_decode($response);

} 
else 

{
	echo mysqli_error($conn);
	$response['status']=0;
	$response['message']="trip not sucessfull";
	//echo json_decode($response);
}




	
	if(isset($_POST['framework'])){

		$lastid=mysqli_insert_id($conn);

    foreach($_POST['framework'] as $select) 
  {	
  //	print_r($_POST['U_email']);
  	//exit();
  	$memberadd="insert into traveller(T_id,T_createuid) values('$lastid','$select')";

	if(mysqli_query($conn, $memberadd))
		{
		echo "added". $select;
		}
	else
	{
		echo "error traveller";
		exit();
	}
	
  }

@$t=$_SESSION['userdisplay']['uid'];
  $memberadd1="insert into traveller(T_id,T_createuid) values('$lastid','$t')";
	if(mysqli_query($conn, $memberadd1))
	{
		echo "added". $select;
	}

  if(result)
   {
  	header("Location: ./welcomeform.php");
   }
  else
  {
  	echo "Error occured";
  	exit();
  }

}
?>