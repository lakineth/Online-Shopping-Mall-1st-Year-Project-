<?php
    $servername="Localhost";
    $username="root";
    $password="";
    $dbname="User";

  $conn=new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
	 die("Connection Failed: ". $conn->connect-error);
  }

	$sql="select*from registration";
	$result=mysqli_query($conn,$sql);
?>
<html>
<head>
   <title>Buy Lanka</title>
   <link rel="stylesheet" type="text/css" href="..\CSS\styles4.css">
</head>

<body>
<header>

  <div class="Navigation">
  <img src="..\images\Logo4.png" width="100" height="120" class="logo">    
	<ul class="menu">
        
         <li><b><a href="../html/index.php">Manage User</a></b></li>
         <li><b><a href="../html/product.php">Manage Products</a></b></li>
         <li><b><a href="../html/adminmanage.php">Manage Admin Details</a></b></li>
		 
	</ul>
	<h2> Admin Panel</h2>
	<div class="dropdown">
	   <button class="dropbtn">Account</button>
	    <div class="dropdown-content">
	     <a href="../html/adminlog.html">Log In</a>
	     <a href="../html/adminlog.html">Log Out</a>
	   
	    </div>	
	   </div>	

	  
</header>

<section>
 <div class="admin">
 
  <div class="content">
    <h2 class="title">Manage User Details</h2>
	<?php
	  if(isset($_session['success'])&& $_session['success']!='')
	  {
		  echo '<h2 class="bg_primary">'.$_session['success'].'</h2>';
		  unset($_session['success']);
	  }
	  if(isset($_session['status'])&& $_session['status']!='')
	  {
		  echo'<h2 class="bg_danger">'.$_session['status'].'</h2>';
		  unset($_session['status']);
	  }
	
	?>
	<table border="1px">
	  <thead>
	    <th> ID </th>
	    <th>E-mail</th>
		<th>Phone Number</th>
		<th>User Name</th>
		<th>Password</th>
		<th>Firstname</th>
		<th>Lastname</th>
		<th>Address</th>
		<th>PostalCode</th>
		<th>City</th>
		<th> Edit </th>
		<th> Delete </th>
      </thead>
	  
	  <?php
	    
		   while($rows=mysqli_fetch_array($result))
		   { 
		 ?>
		 <tr>
		     <td><?php echo $rows['ID'];?></td>
		     <td><?php echo $rows['email'];?></td>
		     <td><?php echo $rows['number'];?></td>
		     <td><?php echo $rows['username'];?></td>
		     <td><?php echo $rows['password'];?></td>
		     <td><?php echo $rows['Firstname'];?></td>
		     <td><?php echo $rows['Lastname'];?></td>
		     <td><?php echo $rows['Address'];?></td>
		     <td><?php echo $rows['City'];?></td>
		     <td><?php echo $rows['Postalcode'];?></td>
			 <td>
			    <button type="submit" class="edit">Edit</button>
			 </td>
			 <td>
			   <form action="delete.php" method="POST">
			   <input type="hidden" name="delete_id" value="<?php echo $rows['ID'];?>">
			     <button type="submit" name="delete_btn" class="delete">Delete</button>
			   </form>
			 </td>
		  </tr>
		<?php
		    }
		?>
    </table>
  </div>	
 </div>
</section>
</body>
</html>