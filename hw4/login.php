<?php

if(isset($_COOKIE['loginName'])){

	echo "Welcome back, ".$_COOKIE["loginName"];
}
?>

<head>
    <title>Login</title>
</head>

<h1>Please Login to use the system</h1>

<form action="logincheck.php" method="POST">

	Please input your username : <input type="text" name="loginName"><br>
	Please inout your password : <input type="password" name="loginPwd"><br>
	<input type="submit"><br>

<?php
date_default_timezone_set("Asia/Taipei");
echo time();
echo"<br>";
echo"Time now : ";
echo date("Y-m-d H:i:s"); 
?>

</form>