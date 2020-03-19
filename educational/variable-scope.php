<?php
//Global variable practice
$newNum = 100; //global scope

function MyFunction(){
	echo "My global variable name is: {$newNum}";
}
MyFunction();
echo "<br>";
echo "My global variable name is: {$newNum}";
echo "<br>";
?>

<?php
//Global variable with global keyword
$newNum2 = 100; //global scope
function MyFunction2(){
	global $newNum2;
	//$GLOBALS["newNum2"];
	echo "<br>";
	echo "My global variable2 name is: {$newNum2}";
}
MyFunction2();
echo "<br>";
echo "My global variable2 name is: {$newNum2}";
echo "<br>";
?>

<?php
//Local variable practice
function MyFunc(){
	$oldNum = 150; //local scope
	echo "My local variable name is: {$oldNum}";
}
echo "<br>";
myFunc();
echo "<br>";
echo "My local variable name is: {$oldNum}";
echo "<br>";
?>

<?php
//Static variable practice
function otherFunction(){
	static $otherNum = 300; //static scope
	echo "My static variable is: {$otherNum}";
}
echo "<br>";
otherFunction();
echo "<br>";
otherFunction();
echo "<br>";
?>
