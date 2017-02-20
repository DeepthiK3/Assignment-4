<!DOCTYPE html>
<html>
<body>

<?php
//Send each value of an array to a function, multiply each value by itself, and return an array with the new values
function myfunction1($num)
{
  return($num*$num);
}
$a1=array(1,2,3,4,5);
print_r(array_map("myfunction1",$a1));
echo "<br>"."<br>";

//Using a user-made function to change the values of an array
function myfunction2($v)
{
if ($v==="Dog")
  {
  return "Fido";
  }
return $v;
}
$a2=array("Horse","Dog","Cat");
print_r(array_map("myfunction2",$a2));
echo "<br>"."<br>";

//Using two arrays
function myfunction3($v1,$v2)
{
if ($v1===$v2)
  {
  return "same";
  }
return "different";
}
$a3=array("Horse","Dog","Cat");
$a4=array("Cow","Dog","Rat");
print_r(array_map("myfunction3",$a3,$a4));
echo "<br>"."<br>";

//Change all letters of the array values to uppercase
function myfunction4($v) 
{
$v=strtoupper($v);
  return $v;
}
$a=array("Animal" => "horse", "Type" => "mammal");
print_r(array_map("myfunction4",$a));
echo "<br>"."<br>";

//Assign null as the function name
$a5=array("Dog","Cat");
$a6=array("Puppy","Kitten");
print_r(array_map(null,$a5,$a6));
echo "<br>"."<br>";
?>

</body>
</html>