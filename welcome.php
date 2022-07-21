<?php
session_start();

if (isset($_SESSION['uname'])) {
echo " Welcome ". $_SESSION['uname'];
echo "<script> location.href='welcome.php'</script>";	
}
else{
	echo "<script> location.href='session_fetch.php'</script>";	

}

if (isset($_REQUEST['logout'])) {
	session_unset();
	session_destroy();
	echo "<script> location.href='session_fetch.php'</script>";	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>this is your welcome page</title>
</head>
<body>
	<form method="post" action="">
		<input type="submit" name="logout" value="logout">
	</form>
</body>
</html>