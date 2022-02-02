<?php
$servername="Localhost";
$username="root";
$password="";
$dbname="User";

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection Failed: ". $conn->connect-error);
}
else{
	$email=$_POST['Email'];
    $number=$_POST['Number'];
    $username=$_POST['Username'];
    $password=$_POST['Password'];

	$sql="Insert into Registration(Email,Number,Username,Password)VALUES('$email',$number,'$username','$password')";
	   if($conn->query($sql)){
		   echo"Registered Sucessfully";
		   header('location:html2.php');
	   }
	   else{
		   echo"Error".$conn->error;
	   }
}
	$conn->close();

?>

