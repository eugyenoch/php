<?php
//define error message variables and set them to empty values
/*
$fnameErr="";
$lnameErr="";
$emailErr="";
$websiteErr="";
*/
//Second way of declaring these empty variables
//$fnameErr = $lnameErr = $emailErr = $websiteErr= "";

//define second set of variables for user input and set to empty
/*
$fname="";
$lname="";
$email="";
$website="";
*/
//Second way of declaring these empty variables
//$fname = $lname = $email = $website= "";

//Checking if form was submitted
if ($_SERVER["REQUEST_METHOD"]=="POST"){
	if (empty($_POST["fname"])){
	    $fnameErr="Firstname is required";
	}
	else{
		$fname=purify_input($_POST["fname"]);
	}
	if(empty($_POST["lname"])){
	 $lnameErr="Lastname is required";
	}
	else{
	 $lname=purify_input($_POST["lname"]);
	}
	if(empty($_POST["email"])){
	 $emailErr="Email address is required";
	}
	else{
	 $email=purify_input($_POST["email"]);
	}
	if(empty($_POST["website"])){
	 $websiteErr="";
	}
	else{
	 $website=purify_input($_POST["website"]);
	}
};

//Function created to secure user input via form
function purify_input($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlentities($data);
	return $data
};
?>
<!DOCTYPE html>
<html>
<head>
	<title>PHP form validation example</title>
	<style>
		.error{color:red;}
	</style>
	</head>

	<body>
		<p><span class="error">* required field</span></p>
		<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" novalidate>
			<label>First Name:</label><br>
			<input type="text" name="fname" required><br>
			<span class="error"><?php echo $fnameErr;?></span>
			<br><br>
			<label>Last Name</label><br>
			<input type="text" name="lname" required><br>
			<span class="error"><?php echo $lnameErr;?></span>
			<br><br>
			<label>Email address</label><br>
			<input type="text" name="email" required><br>
			<span class="error"><?php echo $emailErr;?></span>
			<br><br>
			<label>Website</label><br>
			<input type="text" name="website"><br>
			<span class="error"><?php echo $websiteErr;?></span>
			<br><br>
			<input type="submit" name="submit" value="send">
		</form>
	</body>
</html>
