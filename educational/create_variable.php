<?php
//Variables in PHP
$aprilRainfall = 100;
$mayRainfall = 200;
$juneRainfall= 400;
$totalRainfall = $aprilRainfall + $mayRainfall + $juneRainfall;

$yearlyTotal = $totalRainfall * 3;

echo "The total rainfall for quarter 2 2020 is: <br>";
echo $totalRainfall . "ml";
echo "<br>";
echo "The total yearly rainfall is:" . $yearlyTotal . "ml";
echo "<br>";
?>

<?php
$democracy="Democracy in my country is still growing";
echo "<br>";
echo "{$democracy}";
?>
