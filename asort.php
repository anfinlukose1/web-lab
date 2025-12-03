<?php

$student=array("anfin","Shanumon","ibrahim","prithic");
echo "<h2>Array :</h2>";
print_r($student);

echo "<br>";

asort($student);
echo "<h2>Array in Ascending order(asort) :</h2>";
print_r($student);

echo "<br>";

arsort($student);
echo "<h2>Array in Descending order(arsort) :</h2>";
print_r($student);
?>