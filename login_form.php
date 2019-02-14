
 
<?php 
session_start(); 
session_unset(); 
session_destroy(); 
?> 
<html> 
<head>
<style>
#body{
	background-image:url(login1.jpg);

   background-repeat:no-repeat;

   background-size:cover;
}
</style> 
<link rel="stylesheet" href="csstable.css">
<title>Login Page</title> 
</head> 
<body id="body"> 
<header>
    <a href="waste.html"><h2>Home</h2></a>
  </header>
<form name="myloginForm" method="post" action="login_check.php"> 
<br><br><br><br>
<h1 align="center"> - Enter your login Details - </h1> 
<br><br><br>
<div class="login">
    <input name="login" type="text" placeholder="Username" id="username">  
  <input name="password" type="password" placeholder="password" id="password">  
  <input name="submit" type="submit" value="Login">
</div>
<div class="shadow"></div>

</body> 
</html>
