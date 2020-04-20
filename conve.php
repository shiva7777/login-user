<html>
<head>
<style>
	#box
	{
		width:350px;
		height:270px;
		margin:0px auto;
		border:2px solid black;
		
	}
	h2{
		text-align: center;
		
	}
	table{
		margin:0px auto;
		padding:0px;
	}
</style>
</head>
 
<body>
 
<form align="center" action="#" method="post">
 
<div id="box">
<h2><center><font color="red">Currency Converter</font></center></h2>
<table>
	<tr>
	<td>
		Enter Amount:<input type="text" name="amount"><br>
	</td>
</tr>
<tr>
<td>
	<br><center>From:<select name='cur1'>
	 <option value="USD" selected>US Dollar(USD)</option>
	 </select>
</td>
</tr>
<tr>
	<td>
	<br><center>To:<select name='cur2'>
	 <option value="INR" selected >Indian Rupee(INR)</option>
	</select>
</td>
</tr>
<tr>
<td><center><br>
<input type='submit' name='submit' value="CovertNow"></center><br><br>
</td>
</tr>
</table>
</form>
<?php
if(isset($_POST['submit']))
{	
$amount = $_POST['amount'];
$cur1 = $_POST['cur1'];
$cur2 = $_POST['cur2']; 
if($cur1=="USD" and $cur2=="INR")
{
echo "<center><b><font color='blue'>Your Converted Amount is:</font></b></center>";
echo "<center>" . $amount* 76.50 . "</center>";
}
}
 
?>
 
</body>
</html>
