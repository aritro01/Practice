<?php 
if (isset($_REQUEST['login'])) {
	$email=$_REQUEST['ei'];
	$pass=$_REQUEST['pwd'];
	$conn=mysql_connect("localhost", "root", "");
	mysql_select_db("test");
	$sql="select Uname from usercreds where Email='$email' and pwd='$pass'";
	$result=mysql_query($sql,$conn);
	$flag=FALSE;
	if($row=mysql_fetch_array($result,MYSQL_BOTH)) {
		$flag=TRUE;
	}
	mysql_close($conn);
	
	if($flag==TRUE) {
		echo "VALID!!";
	}
	else {
		echo "INVALID";
	}
}
?>



<html>
<head>
<title> This is Login Page</title>
</head>
<body bgcolor=cyan>
<form name =signup method= post action="">

Email ID : <input type=email size=20 name=ei placeholder='enter email here'><br>
Password: <input type="password" name=pwd size=20><br>
<input type=submit name=login value=Login> 
</form>
<a href=login.php>Sign Up?</a>
</body>
</html>