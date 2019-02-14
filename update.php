<?php

if ($_POST['submit'] == 'update'){ 
$id= $_POST['report_id'];
 
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
$query = "UPDATE reportus SET reportus.status='yes' where reportus.Report_id='$id'"; 
//Execute query 
$results = mysqli_query($link,$query); 
 
//Check if query executes successfully 
if($results == FALSE) 
echo mysqli_error($link) . '<br>'; 
else 
echo 'Data updated successfully! '; 
}
?>