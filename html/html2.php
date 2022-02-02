<?php
    $servername="Localhost";
    $username="root";
    $password="";
    $dbname="User";

  $conn=new mysqli($servername,$username,$password,$dbname);
  if($conn->connect_error){
	 die("Connection Failed: ". $conn->connect-error);
  }
  
	
?>
<html>
<head>
   <title>Buy Lanka Shopping Mall</title>
   <link rel="stylesheet" type="text/css" href="../css/css.css">
   <script type="text/javascript" src="../js/script.js"></script>
</head>

<body>
<header>
  <div class="Navigation">
  <img src="..\images\Logo4.png" width="100" height="120" class="logo">    
	<ul class="menu">
         <li><a href="../html/Home page2.html">HOME</a></li>
         <li><a href="#">Categories</a></li>
         <li><a href="#">Track my Order</a></li>
         <li><a href="../html/ContactUs.html">Contact Us</a></li>
		 <li><a href="../html/cart_page.html">My Cart</a></li>
	</ul>
	  <div class="dropdown">
	   <button class="dropbtn">Account</button>
	    <div class="dropdown-content">
	     <a href="../html/Log and Reg.html">Log In</a>
	     <a href="../html/Log and Reg.html">Log Out</a>
	     <a href="../html/Log and Reg.html">Register</a>
	    </div>	
	   </div>	
	 	
	 <form class="search-form">
	   <input type="text" placeholder="Search">
	   <button onclick="myFunction()"> Search</button>
	   </form>
	   <a href="../html/html2.php">
	   <img src="..\images\profile.png" width="70px" height="70px" alt="Profile" class="profile" >
	   </a>
	  </div> 
 </header>
  <section>
  

 <div class="content" >
 <form action="log.php"  class="form" method="POST" >
   <h2  align="center" > <u>My Account</u> </h2>
  <br>
  
  
  <label><b>ID:</b></label><br><br>
  <label><b>Email:</b></label><br><br>
  <label><b>Number:</b></label><br><br>
  <label><b>Username:</b></label><br><br>
  <label><b>Password:</b></label><br><br>
  <label><b>Firstname:</b></label><br><br>
  <label><b>Lastname:</b></label><br><br>
  <label><b>Address:</b></label><br><br>
  <label><b>Ciyt:</b></label><br><br>
  <label><b>Postalcode:</b></label>
   

	
	
  
 </form>
 
 </div>
 
       <!--sidebar---->

   <div class="sidebar">
	
	  <ul>
	      <li><u><a href="../html/html2.php">My Account</a></u></li>
		  <li><u><a href="../html/helpAndFeedback.html">Help and Feedback</a></u></li>
		  <li><u><a href="../html/html.html">Edit Profile</a></u></li>
		  <li><u><a href="#">Settings</a></u></li>
	  </ul>	  
   </div>  


       <!---close-->

</section>
 <footer>
 <p align="right" style="font-size:20px">
 <b>Online Shopping Sri Lanka with Home Delivery</b></p>
 <p align="center" style="color:red">
 <b>Quick Links:</b><br><br>
 <b><a href="../html/Home page2.html">HOME</a></b><br>
 <b><a href="#">Categories</a></b><br>
 <b><a href="#">Terms and Conditions</a></b><br>
 <b><a href="../html/ContactUs.html">Contact Us</a></b></p>
 
 <div class="store-icons">
 <img src="..\images\stores.jpg">
 </div>
 
<p class="follow" align="left"><b> Follow Us On:</b></p>
<div class="social-icons">
        <a href="#" ><img src="..\images\fb1.png"></a>
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