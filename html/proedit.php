<html>
<head>
<title> Add Product </title>
</head>
<body>
<form action="proedit.php"  class="form" method="POST" enctype="multipart/form-data">
   <h2  align="center" > <u>Add Products</u> </h2>
   
     
  <div>
    <lable><b>ID</b></lable>
    <input type="text" name="Id" placeholder="ID">
  </div><br>

  <div>
    <lable><b>Product Name</b></lable>
    <input type="text" name="name" placeholder="Product Name">
  </div><br>
  
  <div>
    <lable><b>Price</b> </lable>
    <input type="text" name="price" placeholder="Price">
  </div>
  <br>
  
 <div>
     <lable><b>Description</b></lable>
     <input type="text" name="desc" placeholder="Description">
 </div>
 <br> 
 <div>
     <lable><b>Image</b></lable>
     <input type="file" name="image" placeholder="User Name">
 </div>
 <br>
 <input type="submit" name="update" value ="Update"> 
 </body>
 </html>
 
 <?php
$conn = mysqli_connect('localhost','root',"");
mysqli_select_db($conn,'User');

if(isset($_POST['update'])){
	$id=$_POST['Id'];
    
	
	$query = "Update Product SET pname='$_POST[name]',pprice='$_POST[price]',pdesc='$_POST[desc]',image='$_POST[filename]' where id='$_POST[Id]'";
	$query_run=mysqli_query($conn,$query);
		if($query_run){
		echo'<script type="text/javascript"> alert("Data Updated")</script>';
		header('location:product.php');
	}else{
		echo'<script type="text/javascript"> alert("Data not Updated")</script>';
		header('location:product.php');
	}
}



?>