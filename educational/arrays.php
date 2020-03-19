<?php
$cars=["Honda","Toyota","IVM","Hyundai"];
echo "The car at index 2 is ". $cars[2];
echo "<br>";
$countcars=count($cars);
echo"The number of items in this array is ".$countcars;
echo "<br>";
//print_r($cars); //Print array items and their index
?>
<?php
$motor=array("Honda","Toyota","IVM","Hyundai");
echo "The car at index 2 is ". $cars[2];
echo "<br>";
?>

<?php
//Indexed array
$department=array(1 =>'Finance',2 =>'Sales',3 =>'HR',4 =>'Purchase');
echo $department[2];
echo "<br>";

?>

<?php
//Associative array
$position = array("a" => 'Finances', "b" => 'Marketing', "c" => 'hr', "d" => 'Purchase');
echo $position["b"];
echo "<br>";
?>

<?php
//Multidimensional arrays
$motorcar = array(
  array("Volvo",19000,8),
  array("BMW",15000,13),
  array("IVM",16000,12),
  array("Honda",17000,15),
  array("Toyota",20000,25)
  );
  
  echo $motorcar[0][0]. " sold for ". $motorcar[0][1] . " Naira for " . $motorcar[0][2]. " units";
  echo "<br>";
  echo $motorcar[1][0]. " sold for ". $motorcar[1][1] . " Naira for " . $motorcar[1][2]. " units";
  echo "<br>";
  echo $motorcar[2][0]. " sold for ". $motorcar[2][1] . " Naira for " . $motorcar[2][2]. " units";
  echo "<br>";
  echo $motorcar[3][0]. " sold for ". $motorcar[3][1] . " Naira for " . $motorcar[3][2]. " units";
  echo "<br>";
  echo $motorcar[4][0]. " sold for ". $motorcar[4][1] . " Naira for " . $motorcar[4][2]. " units";
  echo "<br>";
?>
