<?php
$servername='Localhost';
$username='root';
$password="";
$dbname='User';

$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("Connection Failed: ". $conn->connect-error);
}
else{
	$ademail=$_POST['adEmail'];
    $adnumber=$_POST['adNumber'];
    $adname=$_POST['adName'];
    $adpassword=$_POST['adPassword'];

	$sql="Insert into adminreg(adEmail,adNumber,adName,adPassword)VALUES('$ademail',$adnumber,'$adname','$adpassword')";
	   if($conn->query($sql)){
		   echo"Registered Sucessfully";
		   header('location:index.php');
	   }
	   else{
		   echo"Error".$conn->error;
	   }
}
	$conn->close();

?>
