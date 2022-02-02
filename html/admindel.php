<?php
$conn = mysqli_connect('localhost','root',"");
mysqli_select_db($conn,'User');

if(isset($_POST['delete_btn']))
{
	$id=$_POST['delete_id'];
	$query= "Delete from adminreg where ID='$id'";
	$query_run=mysqli_query($conn,$query);
	if($query_run){
		$session['success']="Your Data is Deleted";
		header('location:adminmanage.php');
	}
	else{
		$session['status']="Your Data is Not Deleted";
		header('location:adminmanage.php');
	}
}



?>