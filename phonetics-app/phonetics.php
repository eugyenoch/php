<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html xmlns="http://www.w3.org/1999/xhtml" prefix="og:http://ogp.me/ns#" lang="en" dir="ltr">
<!--<![endif]-->

<head>
<title>Homonym | Phonetics</title>
<meta charset="UTF-8" />
<meta name="title" content="Phonetics" />
<meta name="Description" content="Test words of same and different sounds" />
<meta name="keywords" content="phonetics,phonogram,words with meaning,same meaning,different sounds,same sounds,homonym,homophone,homophone,same spelling" />
<meta name="viewport" content="width=device-width,initial-scale=1.0" />
<!--[if IE]>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <![endif]-->
<meta http-equiv="Cache-control" content="no-cache" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />
<meta name="author" content="Eugy Enoch" />
<meta property="og:type" content="application" />
<meta property="og:title" content="Phonetics" />
<meta property="og:description" content="Test words of same and different sounds" />
<meta property="og:image" content="images/pie_css.png" />
<meta property="og:author" content="Eugy Enoch" />
<link rel="shortcut icon" href="pie_css.png" />
<link rel="stylesheet" href="phonetics.css" />
</head>

<body>
	<h1>Test sounds of various proportions</h1>
	<p>This aplication will test for entered words for sameness in sound and spelling<br>Words of same sound will produce a homonym; words of same sound and spelling will produce a homonym and homograph.</p>
<form name="phpPhonetics" action="<?php htmlentities($_SERVER['PHP_SELF'])?>" method="POST">
	<table>
		<tr>
			<td>
<label for="firstWord"><span>*</span>Enter first word</label><br />
<input type="text" name="sound" id="firstWord" placeholder="First word" pattern="[A-Za-z]{}" title="Enter string literals" required="required" /><br />
</td>
<td>
<label for="secondWord"><span>*</span>Enter second word</label><br />
<input type="text" name="secondSound" id="secondWord" placeholder="Second word" pattern="[A-Za-z]{}" title="Enter string literals" required="required" /><br />
</td>
<tr>
	<td colspan="2">
		<input type="submit" name="submit" value="Check sounds" />
		<br />
	</td>
</tr>
</table>
</form>
<footer>
	<p>&copy;2019 - 2020 :: Developed by <span title="Reach me for custom made solutions">Eugy Enoch</span> - All rights reserved. Reach me on <a title="Reach me on Github" href="https://github.com/eugyenoch">Github</a>, <a title="Reach me on Linkedin" href="https://linkedin.com/in/eugyenoch">Linkedin</a> and <a title="Reach me on Facebook" href="https://facebook.com/eugyenoch">Facebook</a> for issues and jobs.</p>
</footer>
</body>
</html>

<?php
if (isset($_POST['submit'])) {
	$firstWord=purify_input($_POST['sound']);
	$secondWord=purify_input($_POST['secondSound']);

	if(is_numeric($firstWord)  || is_numeric($secondWord)){
		echo "<span><strong>We have identified entire numbers in your input!</strong><br>We are not saying it is a mistake, however, while we prefer you enter actual words, if you are sure about this, then repeat your action.</span>";
		exit(0);}
	
	if($firstWord=== $secondWord){
		echo "<h3><br><em>{$firstWord}</em> sounds like <em>{$secondWord}</em><br><em>{$firstWord}</em> is also spelt like <em>{$secondWord}</em><br>Both words are therefore homonymns and homographs of each other.</h3>";
		exit(0);}


    if(metaphone($firstWord)== metaphone($secondWord)){
	    echo "<h3><br><em>{$firstWord}</em> sounds like <em>{$secondWord}</em><br>Both words are homonymns of each other.</h3>";}

	elseif(metaphone($firstWord)!== metaphone($secondWord)){
		echo "<h3><br><em>{$firstWord}</em> does not sound like <em>{$secondWord}</em><br>Both words are therefore not homonymns of each other.</h3>";}

else {
	echo "<h3><br>Thank you for using the phonetics application<br>Try again using other words</h3>";}

};
//To guard against abuse of application
function purify_input($data){
	$data=strip_tags($data);
	$data=stripslashes($data);
	$data=htmlentities($data);
	return $data;
};
?>
