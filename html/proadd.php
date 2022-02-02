<?php
$conn= mysqli_connect('localhost','root',"");
mysqli_select_db($conn,'User');

if(isset($_POST['Add'])){
	
	$name=$_POST['name'];
	$price=(float)$_POST['price'];
	$desc=$_POST['desc'];
	$filename=$_FILES['image']['name'];
	$filetmpname=$_FILES['image']['tmp_name'];
	$folder = 'upimage/';
	move_uploaded_file($filetmpname,$folder.$filename);
	
	$sql="Insert into product(pname,pprice,pdesc,image)VALUES('$name',$price,'$desc','$filename')";
	$qry=mysqli_query($conn,$sql);
	if($qry){
		echo "Product Added";
		header('location:product.php');
	}
}
$conn->close();
?>
<html>
<head>
<title> Add Product </title>
</head>
<body>
<form action="proadd.php"  class="form" method="POST" enctype="multipart/form-data">
   <h2  align="center" > <u>Add Products</u> </h2>
   

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
 <input type="submit" name="Add" value ="Add"> 
 </body>
 </html>