<?php
session_start();

$conn = mysqli_connect('localhost','root',"");
mysqli_select_db($conn,'User');

 $username= $_POST['Username'];
 $password= $_POST['Password'];
 
 $sql="select*from Registration where Username = '$username' && Password = '$password'";
 
 $result = mysqli_query($conn,$sql);
 
 $num = mysqli_num_rows($result);
 
 if($num == 1){
	 $_session['Password']=$password;
	 echo'<script type="text/javascript"> alert("Logged Successfully!")</script>';
	 header('location:html2.php');
 }else{
	 $_session['message']="Incorrect User name or Password";
	 header('location:Log and Reg.html');
 }
 $conn->close();
 ?>
 