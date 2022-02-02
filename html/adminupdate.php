<?php
$conn = mysqli_connect('localhost','root',"");
mysqli_select_db($conn,'User');

if(isset($_POST['update'])){
	$id=$_POST['Id'];

	
	$query = "Update adminreg SET ademail='$_POST[email]',adnumber='$_POST[number]',adname='$_POST[uname]',adpassword='$_POST[pass]' where id='$_POST[Id]'";
	$query_run=mysqli_query($conn,$query);
		if($query_run){
		echo'<script type="text/javascript"> alert("Data Updated")</script>';
		header('location:adminmanage.php');
	}else{
		echo'<script type="text/javascript"> alert("Data not Updated")</script>';
		header('location:adminedit.php');
	}
}



?>