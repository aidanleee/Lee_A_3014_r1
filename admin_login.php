<?php
	// Turn on error reporting
	ini_set('display_errors',1);
	error_reporting(E_ALL);

	// Connect to config file
	require_once('phpscripts/config.php');

	// Track ip address
	$ip = $_SERVER['REMOTE_ADDR'];
	if(isset($_POST['submit'])){
		$username = trim($_POST['username']); //Trim looks for white space and removes it (e.g. hidden spaces)
		$password = trim($_POST['password']);
		// Check to see if all forms are filled in
		if($username !== "" && $password !== "") { //check if usrnme and psswrd are both empty strings (!== not identical && "and")
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill in the required fields";
		}
	}

	// Greeting message
	date_default_timezone_set('America/Toronto');
	$time = date ("H");
	if($time < "12"){
		echo "Good morning, Please login below";
	}else
	if($time >= "12" && $time <"17"){
		echo "Good afternoon, Please login below";
	}else
	if($time >= "17" && $time < "19"){
			echo "Good evening, Please login below";
	}
?>
<!DOCTYPE html>
<html>
<head>
<title>Administrative Portal Login</title>
</head>
<body>
	<br>
	<?php if(!empty($message)){echo $message;} ?>
		<form action="admin_login.php" method="post">
			<label>Username:</label>
			<input type="text" name="username" value="">
			<br>
			<label>Password:</label>
			<input type="password" name="password" value="">
			<br>
			<input type="submit" name="submit" value="Login">
		</form>
</body>
</html>
