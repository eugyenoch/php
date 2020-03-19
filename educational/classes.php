<?php
class salary{
	function sal_hra($basic){
		return $basic * 0.25;
	}
 	function sal_ta($basic){
		return $basic * 0.08;
	}
 
	function sal_pf($basic){
		return $basic * 0.05;
	}
}
class gross_salary extends salary{
	function gross($basic,$hra,$ta,$pf){
		return $basic + ($hra + $ta) - $pf;
	}
}

$basic2=gross(5,6,7,8);
echo $basic2;
?>

<?php
class usermail{
	var $username = "john";
	var $password = "abc123";
}
class userdetails extends usermail{
	var $secretquery = "favourite food";
	var $answer = "chinese";
}
$mail = new userdetails;
echo $mail;
?> 
