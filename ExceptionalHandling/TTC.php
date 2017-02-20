<?php
//create function with an exception
function checkNum($number) {
  if($number>8) {
    throw new Exception("Value must be 8 or below");
  }
  return true;
}

//trigger exception in a "try" block
try {
  checkNum(7);
  //If the exception is thrown, this text will not be shown
  echo 'If you see this, the number is 8 or below';
}

//catch exception
catch(Exception $e) {
  echo 'Message: ' .$e->getMessage();
}
?>