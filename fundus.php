
<html> 
<head> 
<style>
#body{
	background-image:url(funds2.jpeg);

   background-repeat:no-repeat;

   background-size:cover;
}
</style>
<title>Fund us</title> 
</head> 
<body id="body"> 
<header>
    <a href="waste.html"><h2>Home</h2></a>
  </header>
<h3 align="center"> - Enter required Details - </h3> 
<form name="myloginForm" method="post" action="edit_fund.php"> 
<table width="300" border="1" align="center" cellpadding="5" cellspacing="0"> 
<tr> 
<td style="color:rgb(6,59,118)"><b>Name:-</b></td> 
<td><input name="name" type="text" /></td> 
</tr> 
<tr><td style="color:rgb(6,59,118)">Mobile no:</td>
	 <td> 
	   <select><option>+91</option>
	        </select>
	
	<input type= "integer" name ="phone"size="12">
	</td>
	    </tr>  

<tr>
<td style="color:rgb(6,59,118)"><b>Address:-</b></td> 
<td>
	<textarea name="address" rows="3" cols="20"></textarea></br>
 &nbsp;&nbsp;&nbsp;   &nbsp;&nbsp;&nbsp;
 </td>
</tr>

<tr>
<td style="color:rgb(6,59,118)"><b>City:-</b></td> 
<td><input name="city" type="text" /></td> 
</tr>

<tr>
<td style="color:rgb(6,59,118)"><b>PinCode:-</b></td> 
<td><input name="pincode" type="integer" /></td> 
</tr>

<tr>
<td style="color:rgb(6,59,118)"><b>Amount:-</b></td> 
<td><input name="amount" type="number" min="0"/></td> 
</tr>
<tr>
<td style="color:rgb(6,59,118)"><b>Mode of Pay:-</b></td> 
<td><input name="mode" type="text" /></td> 
</tr>
<tr> 
<td colspan="2" align="center"> 
<input type="submit" name="submit" value="Submit Details" /></td> 
</tr> 
</table> 
</body> 
</html>
