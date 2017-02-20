<?php
// Array with names
$a[] = "Akhila";
$a[] = "Bunny";
$a[] = "Chaitra";
$a[] = "Deepthi";
$a[] = "Ekshita";
$a[] = "Fathima";
$a[] = "Gouthami";
$a[] = "Heena";
$a[] = "Isha";
$a[] = "Jamuna";
$a[] = "Karthik";
$a[] = "Lakshmi";
$a[] = "Manasa";
$a[] = "Naina";
$a[] = "Osman";
$a[] = "Priyanka";
$a[] = "githa";
$a[] = "Rahu;";
$a[] = "Snigdha";
$a[] = "Tinku";
$a[] = "Umika";
$a[] = "Vaishu";
$a[] = "Wanny";
$a[] = "Xilinx";
$a[] = "Yamini";
$a[] = "Zenex";

// get the q parameter from URL
$q = $_REQUEST["q"];

$hint = "";

// lookup all hints from array if $q is different from "" 
if ($q !== "") {
    $q = strtolower($q);
    $len=strlen($q);
    foreach($a as $name) {
        if (stristr($q, substr($name, 0, $len))) {
            if ($hint === "") {
                $hint = $name;
            } else {
                $hint .= ", $name";
            }
        }
    }
}

// Output "no suggestion" if no hint was found or output correct values 
echo $hint === "" ? "no suggestion" : $hint;
?>
