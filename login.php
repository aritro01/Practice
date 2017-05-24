<?php 
	if(isset($_REQUEST['signup'])) {
	$name=$_POST['un'];
	$email=$_REQUEST['ei'];
	$pass=$_REQUEST['pwd'];
	$conn=mysql_connect("localhost", "root", "");
	
	if (!$conn) {
		die('CONNECTION FAILED!!');
	}
	mysql_select_db('test');
	$sql="insert into usercreds values('$name', '$email', '$pass')";
	$rows=mysql_query($sql, $conn);
	if($rows==0) {
		echo '<font color=red size=6>INSERT UNSUCCESSFUL</font>';
	}
	else {
		echo '<font color=green size=6>INSERT SUCCESSFUL</font>';
	}
	} 
?>

<html>
<head>
<title> This is registration Page</title>
</head>
<body bgcolor=grey>
<form name =signup method= post action="">
UserName : <input type=text size = 20 name =un placeholder="Enter Name"><br>
Email ID : <input type=email size=20 name=ei><br>
Password: <input type="password" name=pwd size=20><br>
Confirm Password: <input type="password" size=20><br>
<input type=submit name=signup value=Signup> 
</form>
</body>
</html>