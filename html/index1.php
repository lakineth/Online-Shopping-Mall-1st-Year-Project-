<!--DOCTYPE html-->
<html>
<head>
   <title>Buy Lanka Shopping Mall</title>
   <link rel="stylesheet" type="text/css" href="../css/track.css">
</head>

<body>
<header>
  <div class="Navigation">
  <img src="../images/Logo4.png" width="100" height="120" class="logo">    
	<ul class="menu">
         <li><a href="#">HOME</a></li>
         <li><a href="#">Categories</a></li>
         <li><a href="#">Track my Order</a></li>
         <li><a href="#">Contact Us</a></li>
		 <li><a href="#">My Cart</a></li>
	</ul>
	  <div class="dropdown">
	   <button class="dropbtn">Account</button>
	    <div class="dropdown-content">
	     <a href="#">Log In</a>
	     <a href="#">Log Out</a>
	     <a href="#">Register</a>
	    </div>	
	  </div>	
	   
	   
<form>
    <input type="text"  name="search" placeholder="Search" class="search-form">
	<button type="submit" name="submit-search">Search</button>

</form>

   <a href="#">
   <img src="..\images\profile.png" width="70px" height="70px" alt="Profile" class="profile" >
   </a>
</div> 
 </header>


  <section>
      <div class="container">
	  <form class="fr" action="insert.php" method="POST">
	      <h2 align="center"><b>Track My Order</b></h2>
	      <label> Order Number:</label><br>
		  <input type="text" name="$Order_id" align="center">
		   <br><br>
		  <label> Order ID:</label><br>
		  <input type="text" name="Tracking_id" align="center">
		   <button name="submit" class="submit-btn">Submit</button>
		</form>
	 </div>
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