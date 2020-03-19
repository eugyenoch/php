<?php
//Session management in PHP - for educational purposes
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session file</title>
</head>
<body>
	<?php 
	//Set session variables
	$_SESSION["city"] = "Lagos";
	$_SESSION["country"] = "Nigeria";
	//echo "Session variables are set.";
	?>
</body>
</html>
