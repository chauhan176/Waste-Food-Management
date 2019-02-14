
 
<?php 
//Start the session to see if the user is authencticated user. 
session_start(); 
//Check if the user is authenticated first. Or else redirect to login page 
if(isset($_SESSION['IS_AUTHENTICATED']) && $_SESSION['IS_AUTHENTICATED'] == 1){ 
 
 /*Connect to mysql server*/ 
$link = mysqli_connect('localhost', 'root', '');  

/*Check link to the mysql server*/ 
if(!$link)
{ 
die('Failed to connect to server: ' . mysqli_error($link));
 } 

/*Select database*/ 
$db = mysqli_select_db($link,'waste'); 
if(!$db)
{
 die("Unable to select database"); 
}


 /*Create query*/ 
$qry = 'SELECT * FROM fund'; 

/*Execute query*/ 
$result = mysqli_query($link,$qry);

}
else{ 
header('location:login_form.php'); 
exit();
}
?>
 

<html>
<head>
	<title>Our Fundings</title>
	<link rel="stylesheet" href="csstable.css">
</head>
<body>
<header>
    <a href="main_page.php"><h2 align="right">Back</h2></a>
  </header>

		<?php
		echo '<h1>Funding Details:- </h1>.<br>.<br>';

 /*Draw the table for Players*/ 
echo '<table border="1" class="data-table"> 

<th> Name </th> 
<th> Mobile no. </th>
 <th>Address  </th>
<th>City</th>
<th>Pincode</th> 
<th>Amount</th>
<th>Payment Mode</th> ';
$sum=0;
/*Show the rows in the fetched result set one by one*/ 
while ($row = mysqli_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['Name'].'</td>
<td>'.$row['Mobile'].'</td>
<td>'.$row['Address'].'</td>
<td>'.$row['City'].'</td>
<td>'.$row['Pincode'].'</td>
<td>'.$row['Amount'].'</td>
<td>'.$row['PaymentMode'].'</td>    
</tr>'; 
$sum=$sum+$row['Amount'];
}

echo '</table>.<br>.<br>';
echo '<center>Total Fundings:</center>';
print "<CENTER>$sum</CENTER>";
exit(); 
		?>
		
</body>
</html>

