
 
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
$qry = 'SELECT * FROM reportus'; 

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
	<title>All Reports</title>
	<link rel="stylesheet" href="csstable.css">
</head>
<body>
<header>
    <a href="main_page.php"><h2 align="right">Back</h2></a>
  </header>

		<?php
		echo '<h1>All Reports:- </h1>.<br>.<br>';

 /*Draw the table for Players*/ 
echo '<table border="1" class="data-table"> 
<thead>
<th> Report_id </th> 
<th> Name </th> 
<th> Mobile no. </th>
 <th>Address  </th>
<th>City</th>
<th>Pincode</th> 
<th>Party Type</th> 
</thead>';
/*Show the rows in the fetched result set one by one*/ 
while ($row = mysqli_fetch_assoc($result))
{ 
echo '<tr> 

<td>'.$row['Report_id'].'</td>
<td>'.$row['Name'].'</td>
<td>'.$row['Mobile'].'</td>
<td>'.$row['Address'].'</td>
<td>'.$row['City'].'</td>
<td>'.$row['Pincode'].'</td>
<td>'.$row['Ocassion'].'</td>    
</tr>'; 
}

echo '</table>';


exit(); 
		?>
		
</body>
</html>



