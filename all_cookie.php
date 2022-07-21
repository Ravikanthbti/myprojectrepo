
<?php
$cookie_name="user";
$cookie_value="welcome";
 
 setcookie($cookie_name,$cookie_value, time()+(86400*30),"/");


?>


<!DOCTYPE html>
<html>
<head>
	<title>this all about cookie</title>
</head>
<body>
<?php

if(isset($_COOKIE[$cookie_name])){
	
	echo  $_COOKIE[$cookie_name];
}else{
	
	echo "cookie not set";
}

?>
</body>
</html>
