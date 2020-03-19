<?php
//While Loop
$number=1; //Initialized a variable

echo "The odd numbers are:<br>"; //output statement

while($number <= 10) //while loop with condition
{
echo "<br>$number<br>";
   	$number=$number+2; //increment by 2
}
echo "==========================================================<br>";
?>

<?php
//Do while loop
$counter=0; //Initialized a variable
echo "The even numbers are:<br><br>";

do{
	echo "$counter<br>"; // do the statement before checking condition
	$counter=$counter+2;
}
while($counter <= 10); //while loop with condition
echo "==========================================================<br>";
?>

<?php
//For loop
//for loop with initialization; condition and increment
for($counter=1;$counter <= 6;$counter++)
{
	echo "<br>$counter<br>";
  $counter=$counter*2; 
}
//echo "Values could not be calculated.";
?>

<?php
$salary = 6000;
if($salary=6000)
{
	echo "Basic is not sufficient.";
	exit;
}
else
{
	$hra=$salary * 0.8;
	echo "HRA : $hra";
}
?>
