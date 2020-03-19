<?php
##########################
####Associated Arrays#####
##########################
//First method
$person=array("Iyke",32,"Tall");

//Second Method
$person=array("name"=>'Iyke',
              "age"=>32,
			  "Height"=>'Tall');

//Third Method			  
$person["name"]='Iyke';
$person["age"]=32;
$person["Height"]='Tall';

#########################
####Indexed arrays#######
#########################
//First method
$person=array("Iyke",32,"Tall");

//Second Method
$person=array(0=>'Iyke',
              1=>32,
			  2=>'Tall');
//Third Method			  
$person[0]='Iyke';
$person[1]=32;
$person[2]='Tall';

?>

<?php
//Indexed Array Example
$department=array(0=>'Finance',
                  1=>'Accounting',
				  2=>'Technical');
echo "Department 2 is: ". $department[2];
echo "<br>";

//Associative Array Example
$department=array("a"=>'Finance',
                  "b"=>'Accounting',
				  "c"=>'Technical');
echo "Department c is also: ".$department["c"];
echo "<br>";
?>

<?php
//Printing Arrays
$personal=array("clothes"=>'Shirt',"watch"=>'Leather',"shoe"=>'black');
print_r ($personal);
?>

<?php
$cars=array(
array("Volvo",13,30000), //0 position
array("Benz",15,50000),  //1st position
array("Ivm",10,90000)    //2nd position
);
echo "<br>";
echo $cars[0][0]."&nbsp;is in stock and sold" . $cars[0][1] ."&nbsp;units for NGN" . $cars[0][2];
echo "<br>";
echo $cars[1][0]."&nbsp;is in stock and sold" . $cars[1][1] ."&nbsp;units for NGN" . $cars[1][2];
echo "<br>";
echo $cars[2][0]."&nbsp;is in stock and sold" . $cars[2][1] ."&nbsp;units for NGN" . $cars[2][2];
echo "<br>";
?>

<?php
/*Sort Array Example
$Market= array("Igbariam","Mayor","Kenyatta","Ogbete","Emene");
$Market_sort=sort($Market);
print_r {$Market_sort};
*/

/*$Market= array("Igbariam","Mayor","Kenyatta","Ogbete","Emene","Abakpa");
$Market_count=count($Market);
print_r ($Market_count);*/

/*$Market= array("Igbariam","Mayor","Kenyatta","Ogbete","Emene","Abakpa");
$Market_rsort=rsort($Market);
print_r {$Market_rsort};
*/
?>
