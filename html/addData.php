<?php
	
    $servername="Localhost";
    $username="root";
    $password="";
    $dbname="User";

  $conn=new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
	 die("Connection Failed: ". $conn->connect-error);
  }
	
	if(isset($_POST['submit'])){	
		$type     = $_POST['type'];
		$feedback = $_POST['feedback'];
		$name     = $_POST['name'];
		$email    = $_POST['email'];
		$date     = date('Y-m-d H:i:s');
		
		//save data db		
		$sql      = "Insert into messages(Feedback_type,Feedback_message,Name,email,Created_at)VALUES('$type','$feedback','$name','$email','$date')";
		
		//if success
		if(mysqli_query($conn,$sql))
		{
			mysqli_close($conn);
			header("Location: helpAndFeedbackSuccess.php");
			exit();
		}
		else
		{
			
			header("Location: helpAndFeedback.html");
			exit();
		}
		
	}	

		
	?>