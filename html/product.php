<?php
    $servername="Localhost";
    $username="root";
    $password="";
    $dbname="User";

  $conn=new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
	 die("Connection Failed: ". $conn->connect-error);
  }

	$sql="select*from product";
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
    <h2 class="title">Manage Product Details</h2><br>
	
	<a href="proadd.php"><button type="submit" class="add">Add</button></a><br>
	
	<table border="1px"><br>
	  <thead>
	    <th> ID </th>
	    <th>Name</th>
		<th>Description</th>
		<th>Price</th>
		<th>Image</th>
		
		<th> Edit </th>
		<th> Delete </th>
      </thead>
	  
	  <?php
	    
		   while($rows=mysqli_fetch_array($result))
		   { 
		 ?>
		 <tr>
		     <td><?php echo $rows['id'];?></td>
		     <td><?php echo $rows['pname'];?></td>
		     <td><?php echo $rows['pdesc'];?></td>
		     <td><?php echo $rows['pprice'];?></td>
		     <td><?php echo '<img src="data:upimage/;base64,'.base64_encode($rows['image']).'"alt="Image" style ="width:100px; height=100px;">';?></td>
			 <td>
			    <a href="proedit.php"><button type="submit" class="edit">Edit</button></a>
			 </td>
			 <td>
			    <form action="prodel.php" method="POST">
			   <input type="hidden" name="delete_id" value="<?php echo $rows['id'];?>">
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