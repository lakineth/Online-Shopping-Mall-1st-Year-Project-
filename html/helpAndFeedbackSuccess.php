<?php
include_once 'config1.php';

?>	


<html>
<head><title>ABC shopping Mall</title>
<link rel="stylesheet" type="text/css" href="..\css\style.css">
<link rel="stylesheet" type="text/css" href="..\css\new3.css">

</head>
<body>
<header>
  <div class="Navigation">
  <img src="..\images\Logo4.png" width="100" height="120" class="logo">    
	<ul class="menu">
         <li><b><a href="#">HOME</a></b></li>
         <li><b><a href="#">Categories</a></b></li>
         <li><b><a href="#">Track my Order</a></b></li>
         <li><b><a href="#">Contact Us</a></b></li>
		 <li><b><a href="#">My Cart</a></b></li>
	</ul>
	  <div class="dropdown">
	   <button class="dropbtn">Account</button>
	    <div class="dropdown-content">
	     <a href="#">Log In</a>
	     <a href="#">Log Out</a>
	     <a href="#">Register</a>
	    </div>	
	   </div>	
	 	
	 <form class="search-form">
	   <input type="text" placeholder="Search">
	   <button> Search</button>
	   </form>
	   <a href="#">
	   <img src="..\images\profile.png" width="70px" height="70px" alt="Profile" class="profile" >
	   </a>
	  </div> 
 </header>
<section>
<p>Submitted Successfully!</p>
<?php
$sql = "SELECT *  FROM messages ORDER BY Feedback_ID  desc";
$result =mysqli_query($conn,$sql);
?>
<table>
<tr>
<th>Date</th>
<th>Name</th>
<th>Email</th>
<th>Feedback Type</th>
<th>Feedback Message</th>
</tr>
<?php
while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
?>
<tr>
<td><?php echo $row["Created_at"]; ?></td>
<td><?php echo $row["Name"]; ?></td>
<td><?php echo $row["email"]; ?></td>
<td><?php echo $row["Feedback_type"]; ?></td>
<td><?php echo $row["Feedback_message"]; ?></td>
</tr>
<?php
}
?>

</table>
 

</section>

 <footer>
 <p align="right" style="font-size:20px">
 <b>Online Shopping Sri Lanka with Home Delivery</b></p>
 <p align="center" style="color:red">
 <b>Quick Links:</b><br><br>
 <b><a href="#">HOME</a></b><br>
 <b><a href="#">Categories</a></b><br>
 <b><a href="#">Terms and Conditions</a></b><br>
 <b><a href="#">Contact Us</a></b></p>
 
 
<p class="follow" align="left"><b> Follow Us On:</b></p>
<div class="social-icons">
        	<a href="#" ><img src="..\images\fb.jpg"></a>
		<a href="#" ><img src="..\images\tw.png"></a>
		<a href="#" ><img src="..\images\goo.png"></a>
</div>

<p class="payment" align="right"><b> Payment Methods: </b></p>
<div class="pay-icons">
        	<a href="#"><img src="..\images\visa.png"></a>
		<a href="#"><img src="..\images\master.png"></a>
		<a href="#"><img src="..\images\paypal.png"></a>
</div>

</footer>
</body>
</html>