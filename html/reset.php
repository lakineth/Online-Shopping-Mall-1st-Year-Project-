<?php
$conn = mysqli_connect('localhost','root',"");
mysqli_select_db($conn,'User');
if(isset($_POST['reset'])){
	
   if(mysqli_query($conn,"UPDATE Registration SET password='$_POST[conpass]' WHERE email='$_POST[Email]'"))
   {
	   ?>
	   
		<?php
		header('location:Log and Reg.html');
   }
}
?>