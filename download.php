<?php

$dir = "shareWithCustomer/";

// Sort in ascending order - this is default
$a = scandir($dir);


echo '<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="index.css">

<link rel="stylesheet" href="download.css">
<h1>Welcome To Janjua Mart</h1>

<p>----------------------------------------- DOWNLOAD SECTION -----------------------------------------</p>';



$x = 2;

while($x <= sizeof($a)-1) {

echo '<a href="shareWithCustomer/';

echo $a[$x];

echo '" download="';
echo $a[$x];
echo '">';
echo $a[$x];


echo '</a><br>
<br>';

  $x++;}

echo '</body>
</html> 
';

?> 
