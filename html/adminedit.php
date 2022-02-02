<html>
<head>
<title> Admin Edit </title>
</head>
<body>

 <form action="adminupdate.php"  class="form" method="POST" >
   <h2  align="center" > <u>My Account</u> </h2>
   
  
  <div>
    <lable><b>ID</b></lable>
    <input type="text" name="Id" placeholder="ID">
  </div><br>

  <div>
    <lable><b>Email</b></lable>
    <input type="text" name="email" placeholder="Email">
  </div><br>
  
  <div>
    <lable><b>Phone Number</b> </lable>
    <input type="text" name="number" placeholder="Phone Number">
  </div>
  <br>
  
 <div>
     <lable><b>User Name</b></lable>
     <input type="text" name="uname" placeholder="User Name">
 </div>
 <br>
 
 
   <div>
     <lable><b>Password</b></lable>
     <input type="password" name="pass" placeholder="Password">
  </div>
  <br>
<input type="submit" name="update" value ="Update"> 


</body>
</html>