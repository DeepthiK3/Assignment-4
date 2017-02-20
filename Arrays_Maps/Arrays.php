<!DOCTYPE html>
<html>
<body>

<?php
$Courses = array("LAMP", "QA", "IOS"); // creates an array
//Indexed arrays starts with numeric index
echo "I took " . $Courses[0] . ", other courses offered are " . $Courses[1] . " and " . $Courses[2] . "<br>"; 
echo "<br>";
echo count($Courses); //checks length of array
echo "<br><br>";
$arrlength = count($Courses);
// Loop in indexed array
for($x = 0; $x < $arrlength; $x++) {    
    echo $Courses[$x];
    echo "<br>";
}

//Associative arrays are arrays that use named keys that you assign to them
$Marks = array("Calvin"=>"35", "Micheal"=>"58", "Annie"=>"86");
echo "Annie got " . $Marks['Annie'] . " marks and is topper.";
echo "<br>";
 echo "<br>";
// Loop in Associative array
foreach($Marks as $x => $x_value) {
    echo "Name=" . $x . ", Marks=" . $x_value;
    echo "<br>";
    echo "<br>";
}

//Multidimensional Array
$cars = array
  (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
  );
echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";
//Loop in Multidimensional Array
for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < 3; $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}
?>

</body>
</html>