<?php
//Functions in PHP and passing arguments - for educational purposes
?>

<?php
//Passing argument to a fnction by value
function myFunction($A,$B){
	$C=$A-$B;
	echo"The difference between $A and $B is $C";
	echo"<br>";
}
myFunction(50,30)
?>

<?php
//Passing argument to a function by setting a default value
function myFunction2($G=100,$H=90){
	$I=$G-$H;
	echo"The difference between $G and $H is $I";
	echo"<br>";
}
myFunction2()
?>

<?php
//Passing argument to a function by reference
function myFunction3(&$J,&$K){
	$L=$J-$K;
	echo"The difference between $J and $K is $L";
	echo"<br>";
}
?>

<?php
function MyFunction5($X){
	return $X*$X;
}
echo "<br>";
echo "The square of 5 is: ". myFunction(6);
echo "<br>"

?>


<?php
//Function without an argument
function myFunction4(){
	$D=50;
	$E=30;
	$F=$D-$E;
	echo"The difference between $D and $E is $F";
	echo"<br>";
}
myFunction4()

?>
