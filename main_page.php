
<html>
<head>
<title>
Agent Portal
</title>
<style>
#body{
	background-image:url(back_main.jpg);

   background-repeat:no-repeat;

   background-size:cover;
}
</style>
</head>
<body id="body">

<header>
    <a href="login_form.php"><h2 align="right">Logout</h2></a>
  </header>
  </body>
  </html>
<?php 
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the session variable for user authentication is set, if not redirect to login page. 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
//include the menu 

echo '<center><h1>Welcome Agent!</h1><br><br> 
<table border="0" width="560" cellpadding="5" cellspacing="1" bordercolor="black" style="border-right-width:0;"> 

<tr><td><a href="show_all_reports.php"><img src="rep.jpg"><td><h2>Show Reports</h2></a> 
</tr> 
<tr><td colspan="2">&nbsp;</td></tr>  
<tr><td><a href="show_pending.php"><img src="pen.jpg" height="155" width="155"><td><h2>Show pending reports</h2></a> 
<tr><td colspan="2">&nbsp;</td></tr> 
<tr><td><a href="show_completed.php"><img src="com.jpg" height="155" width="155"><td><h2>Show completed reports</h2></a> 
<tr><td colspan="2">&nbsp;</td></tr>  
<tr><td><a href="show_fundings.php"><img src="images.png" height="155" width="155"><td><h2>Show fundings</h2></a> 
<tr><td colspan="2">&nbsp;</td></tr> 
 <tr><td><a href="update_form.html"><img src="upd.jpg" height="155" width="155"><h2><td><h2>Update Status</h2></a> 
<tr><td colspan="2">&nbsp;</td></tr> 
</table> 
</center>'; 
exit(); 
} 
else{ 
header('location:login_form.php'); 
exit(); 
} 
?>
