<?php

$name = $_POST['name']; 
$mobile = $_POST['phone']; 
$address = $_POST['address']; 
$pincode = $_POST['pincode']; 
$city = $_POST['city']; 
$amount = $_POST['amount'];
$mode = $_POST['mode']; 

  
$link = mysqli_connect('localhost', 'root', ''); 

if(!$link){ 
die('Failed to connect to server: ' . mysqli_error()); 
} 
//Select database 
$db = mysqli_select_db($link,'waste'); 
if(!$db){ 
die("Unable to select database"); 
} 
//Create Insert query 
$query = "INSERT INTO fund (Name,Mobile,Address,City,Pincode,Amount,PaymentMode) VALUES ('$name','$mobile','$address','$city','$pincode','$amount','$mode')"; 
//Execute query 
$results = mysqli_query($link,$query); 
 
//Check if query executes successfully 
if($results == FALSE) 
echo mysqli_error($link) . '<br>'; 
else 
echo 'Submitted successfully:-Thank you! '; 

?>
