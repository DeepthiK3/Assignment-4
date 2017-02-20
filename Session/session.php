<?php
session_start();     // Starts the session
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Sets session variables using Global Variable
$_SESSION["favcolor"] = "Black";
$_SESSION["favanimal"] = "Dog";
$_SESSION["favcar"] = "Cadilac";
$_SESSION["favstate"] = "California";
echo "Session variables are set"."<br>";
echo "<br>";
        
// Echo session variables that were set on previously 
echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . "<br>";
echo "Favorite car is " . $_SESSION["favcar"] . "<br>";
echo "Favorite state is " . $_SESSION["favstate"] . "<br>";
echo "<br>";
       
print_r($_SESSION);   // Alternate way 
echo "<br>";

// to change a session variable, just overwrite it 
$_SESSION["favcar"] = "Dodge";
print_r($_SESSION);
echo "<br>";

// remove all session variables
session_unset(); 
echo "<br>";

// destroy the session 
session_destroy(); 
echo "All session variables are now removed, and the session is destroyed." 
?>
</body>
</html>