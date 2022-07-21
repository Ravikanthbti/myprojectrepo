<?php
session_start();

if (!isset($_SESSION['uname'])) {

if (isset($_REQUEST['uname'])) {

$uname=$_REQUEST['uname'];
$pass=$_REQUEST['pass'];
$_SESSION['uname']=$uname;
$_SESSION['pass']=$pass;

echo 'yours session variable is set '.'this is yours session variable <br><br>'.$_SESSION['name'].'<br>'.$_SESSION['pass'].'<br><br><br>';
echo "<script> location.href='welcome.php'</script>";
	
}
}

else{

echo "<script> location.href='welcome.php'</script>";
	
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>login system with core php</title>
</head>
<body>
	<div>
	<form action="" method="get" autocomplete="off">
	Name:<input type="text" name="uname" value="">
	Password:<input type="password" name="pass" value="">
	<input type="submit" name="login" value="login">

	</form>
	</div>  


</body>
</html>