
<html>
<head>
<title>Online Flight Booking System</title>
<link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
<link rel="stylesheet" href="style.css">
</head>
<body>
<head>
<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: orange;
}

li {
    float: left;
}

li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover:not(.active) {
    background-color: #111;
}

.active {
    background-color: Indigo;
}
</style>
</head>
<body>
<br>
<img src="" style="float: left;" />
<ul>
  <li><a href="index.php">Home</a></li>
  <li><a href="https://www.ndtv.com/topic/air-india-flight">News</a></li>
  <li><a href="Airlines.html">Shedule</a></li>
  <li style="float:right"><a class="active" href="a12.html">About</a></li>
  <li style="float:right"><a href="logincustomer.php">Login/Register </a></li>
	
</ul>
</head>
</style>
</style>
<font color="orange"><center><h1>Registration Page </h1></center></font>
	<form method="POST" action="">
	<div class="rr">
		<center>
		<table border=0>
			<tr>
				<td  width=200> Id:<br><input type="text" placeholder="Enter ID" class="in" name="Id" required/></td><br>
				<td colspan=2 width=200> Firstname:<br><input type="text" placeholder="Enter Firstname" class="in" name="Firstname" required/></td><br>
				
			</tr>
			<tr>
				<td height=20></td>
			</tr>
			<tr>	
				<td width=200>Lastname:<br><input type="text" placeholder="Enter Lastname" class="in" name="Lastname" required/></td><br>
				<td colspan=2 width=300> Address:<br><input type="text" placeholder="Enter Address" class="in" name="Address"required/></td><br>
			</tr>
			<tr>
				<td height=20></td>
			</tr>			
			<tr>	<td width=200>Contactno:<br><input type="text" placeholder="Enter Contactno" class="in" name="Contactno"required/></td><br>
				<td colspan=2 width=200> Emailid:<br><input type="text" placeholder="Enter Emailid" class="in" name="Emailid"required/></td><br>
			
			</tr>
			<tr>
				<td height=20></td>
			</tr>		
			<tr>	<td width=300>Password:<br><input type="password" placeholder="Enter Password" class="in" name="Password"required/></td><br></tr>
			
			<tr>
				<td height=20></td>
			</tr>	
			<tr>
				<td><a href=""><input type="submit" name="submit" value ="Register"   style="cursor:pointer;border:0px;padding:7px 19px 7px 19px;background-color:#de2a1d;color:#fff;">  <input type="reset"style="cursor:pointer;border:0px;padding:7px 19px 7px 19px;background-color:#de2a1d;color:#fff;"></td>
				<td></td>
				<td width=10px></td>
				<td></td>
			</tr>
		</table>
		</center>
	</div>
	</form>
</body>
</html>
