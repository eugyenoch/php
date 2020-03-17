<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" prefix="og:http://ogp.me/ns#" lang="en" dir="ltr">
<!--<![endif]-->
<html>
<head>
<title>Loan calculator</title>
<meta charset="UTF-8" />
<meta name="title" content="Loan calculator" />
<meta name="Description" content="PHP loan check application script" />
<meta name="keywords" content="web application,php,php script,free script,MIT scripts" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <![endif]-->
<meta http-equiv="Cache-control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<meta name="author" content="Eugy Enoch" />
<meta property="og:type" content="application" />
<meta property="og:title" content="Loan calculator" />
<meta property="og:description" content="PHP loan check application script" />
<meta property="og:image" content="debitcards.jpg" />
<meta property="og:author" content="Eugy Enoch" />
<link rel="shortcut icon" href="pie_css.png" />
<link rel="stylesheet" type="text/css" href="loan-calculator.css" />
</head>

<body>
	<h1>Loan Check</h1>
	<p>At 5% per annum flat rate<br /><a href="#">Reach us</a> anytime for custom rates and duration.</p>
<form method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
	<table>
		<tr>
			<td>
			<label>Currency<span>*</span></label><br /> 
	<select name="currency" required="required">
		<option name="currency">&#8358;</option>
		<option name="currency">&#36;</option>
		<option name="currency">&#163;</option>
		<option name="currency">&#165;</option>
		<option name="currency">&euro;</option>
		<option name="currency">&#8373;</option>
		<option name="currency">&#8377;</option>
		<option name="currency">&#8378;</option>
		<option name="currency">&#8361;</option>

	</select><br />	
			</td>
			<td>
	<label for="loan">Loan Amount<span>*</span></label><br /> 
	<input type="text" name="loan" id="loan" required="required" /><br />
</td>
<td>
	<label>Duration<span>*</span></label><br /> 
	<select name="selector" required="required">
		<option name="selector">12 months</option>
		<option name="selector">24 months</option>
	</select><br />
</td>
</tr>
<tr>
	<td colspan="3">
	<input type="submit" name="submit" value="Check Loan" /><br />
</td>
</tr>
</table>
</form>
<footer>
	<p>&copy;2020 :: Developed by <span title="Reach me for custom made solutions">Eugy Enoch</span> - All rights reserved. Reach me on <a title="Reach me on Github" href="https://github.com/eugyenoch">Github</a>, <a title="Reach me on Linkedin" href="https://linkedin.com/in/eugyenoch">Linkedin</a> and <a title="Reach me on Facebook" href="https://facebook.com/eugyenoch">Facebook</a> for issues and jobs.</p>
</footer>
</body>
</html>

<?php
if(isset($_POST['submit'])){
	$loanAmount=$_POST['loan'];
    $interest=5;
    $loanSelect=$_POST['selector'];
    $currencySelect=$_POST['currency'];
    $loanDuration;

	if($loanAmount>100000){
	$loanDuration=2;
	$loanPayback=(intval($loanAmount)*($interest/100)*$loanDuration)+$loanAmount;
	echo "<h3><br>Your requested loan is " .$currencySelect. $loanAmount." for ".$loanSelect."<br>Interest rate is charged at " . $interest . "%<br>"."You payback " .$currencySelect. $loanPayback . " on or before the completion of 24 months</h3>";}
if($loanAmount<=100000 AND $loanSelect=='24 months'){
	echo "<br><span>Your selected loan of " .$currencySelect.$loanAmount. " has a duration of 12months allowed.<br>Change loan amount or selection to continue.</span>";}
else{
	$loanDuration=1;
	$loanPayback=(intval($loanAmount)*($interest/100)*$loanDuration)+$loanAmount;
	echo "<br><h3>Your requested loan is " . $currencySelect. $loanAmount." for ".$loanSelect."<br>Interest rate is charged at " . $interest ."%<br>" ."You payback " .$currencySelect. $loanPayback . " on or before the completion of 12 months</h3>";}
}
?>
