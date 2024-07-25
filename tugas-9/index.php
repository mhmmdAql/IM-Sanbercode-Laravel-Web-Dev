<?php

echo "<h3>Release 0</h3>";

//require("animal.php");
require("animal2.php");



$sheep = new animal("shaun");

echo "Nama hewan :" . $sheep->name . "<br>";
echo "Jumlah kaki :" . $sheep->legs . "<br>";
echo "cold_blooded :" . $sheep->cold_blooded;

echo "<h3>Release 1</h3>";
$frog = new Frog("buduk");


echo "Nama hewan :" . $frog->name . "<br>";
echo "Jumlah kaki :" . $frog->legs . "<br>";
echo "cold_blooded :" . $frog->cold_blooded . "<br>";
$frog->jump();

echo "<br><br>";
$Ape = new Ape("Kera sakti");

echo "Nama hewan :" . $Ape->name . "<br>";
echo "Jumlah kaki :" . $Ape->legs . "<br>";
echo "cold_blooded :" . $Ape->cold_blooded . "<br>";
$Ape->yell();