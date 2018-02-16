<?php
  // display error reporting
  ini_Set('display_errors',1);
  error_reporting(E_ALL);
  require_once('phpscripts/config.php');
  confirmed_logged_in();
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Aministrative Portal</title>
</head>
<body>
    <h1>Welcome Company Name to your admin page</h1>
    <?php echo "<h2>Hi-{$_SESSION['user_name']}</h2>" ?>
</body>
</html>
