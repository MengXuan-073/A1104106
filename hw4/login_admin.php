<?php
session_start();
?>

<html>
<head>
    <title>Admin</title>
</head>

<body>

<?php
	if(isset($_SESSION["check"])){
		echo "<h3> Welcome Admin! </h3>";
		echo "<br>";
		echo "<a href='logout.php'>Logout</a>";
	}else{
		echo "illegal user!";
		header("Refresh:2; url='login.php'");
	}
?>
</body>
</html>