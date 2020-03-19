<?php
$cookie_name = "user";
$cookie_value = "Mark John";
setcookie($cookie_name,$cookie_value, time()+(86400*30), "/");
?>

<!DOCTYPE html>
<html>
<head><title>Testing PHP Cookie</title></head>
<body>
<?php
if(isset($_COOKIE[$cookie_name])){
	echo "The cookie named " . $cookie_name . " is set sucessfully wih the value of ". $cookie_value;
	echo "<br>";
}
else {
	echo "Please set a cookie";
}
?>
</body>
</html>
