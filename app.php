<?php 
$age = 10;
$person = match(true){
  $age < 10 => "child",
  $age > 10 && $age < 50 => "young",
  default => "old men",
};
echo $person;
?>