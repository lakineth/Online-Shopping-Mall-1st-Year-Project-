<?php
$conn = mysqli_connect('localhost','root',"");
mysqli_select_db($conn,'User');

if(isset($_POST['save']))
{
	$id=$_POST['id'];
	
	
	$query = "Update Registration SET Firstname='$_POST[fname]',Lastname='$_POST[lname]',email='$_POST[Email]',password='$_POST[Password]',Address='$_POST[address]',City='$_POST[city]',Postalcode='$_POST[postalcode]',number='$_POST[Number]' where id='$_POST[id]'";
	$query_run=mysqli_query($conn,$query);
	
	if($query_run){
		echo'<script type="text/javascript"> alert("Data Updated")</script>';
		header('location:html2.php');
	}else{
		echo'<script type="text/javascript"> alert("Data not Updated")</script>';
		header('location:html.html');
	}
}



?>