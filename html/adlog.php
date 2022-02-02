<?php
session_start();

$conn = mysqli_connect('localhost','root',"");
mysqli_select_db($conn,'User');

 $adname= $_POST['adName'];
 $adpassword= $_POST['adPassword'];
 
 $sql="select*from adminreg where adName = '$adname' && adPassword = '$adpassword'";
 
 $result = mysqli_query($conn,$sql);
 
 $num = mysqli_num_rows($result);
 
 if($num == 1){
	 $_session['Password']=$password;
	 header('location:index.php');
 }else{
	 $_session['message']="Incorrect User name or Password";
	 header('location:adminlog.html');
 }
 $conn->close();
 ?>
 