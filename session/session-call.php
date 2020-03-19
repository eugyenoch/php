<?php
//Session call of previously set session - for educational purposes
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Session 2</title>
</head>
<body>
	<?php
//Echo the session variables that were created in session.php files
	echo "Hello user, your city name is set as ". $_SESSION["city"] . "<br>";
	echo "Your country name is also set as " . $_SESSION["country"] . "<br>";

	//Printing our session values as arrays
	print_r($_SESSION);

//To check the id assigned to a session
	//session_id();
	
//Destroy a session
	//session_destroy();

//Unset a session
	//session_unset();
	?>
</body>
</html>
