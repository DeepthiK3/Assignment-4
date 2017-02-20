<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    padding: 5px;
}
</style>
</head>
<body>
<table>
  <tr>
    <td>Filter Name</td>
    <td>Filter ID</td>
  </tr>
<?php
//filter_list() function can be used to list what the PHP filter extension offers
  foreach (filter_list() as $id =>$filter) {
      echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
  }
  
//filter_var() function both validate and sanitize data
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
echo "<br>";

//filter_var() function checks if the variable $int is valid integer or not.
$int = 100;
if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
    echo("Integer is valid");
    echo "<br>";
} else {
    echo("Integer is not valid");
    echo "<br>";
}

//filter_var() function to check if the variable $ip is a valid IP address
$ip = "127.0.0.1";
if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
    echo("$ip is a valid IP address");
    echo "<br>";
} else {
    echo("$ip is not a valid IP address");
    echo "<br>";
}

//filter_var() function to first remove all illegal characters from the $email variable, then check if it is a valid email address
$email = "deep@gmail.com";
// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);
// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    echo("$email is a valid email address");
    echo "<br>";
} else {
    echo("$email is not a valid email address");
    echo "<br>";
}

//filter_var() function to first remove all illegal characters from a URL, then check if $url is a valid URL
$url = "http://www.tutorial.com";
// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);
// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
    echo("$url is a valid URL");
    echo "<br>";
} else {
    echo("$url is not a valid URL");
    echo "<br>";
}
?>
</table>
</body>
</html>