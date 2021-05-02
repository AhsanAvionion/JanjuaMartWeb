<?php
if ($_POST["psw"] == "1234"){
if ($_POST["uname"] != ""){
$dir = "shareWithCustomer/".$_POST["uname"]."/";
}
else
{
$dir = "shareWithCustomer/";
}

// Sort in ascending order - this is default
$a = scandir($dir);


echo '<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="index.css">

<link rel="stylesheet" href="download.css">
<h1>Welcome To Janjua Mart</h1>

<p>----------------------------------------- DOWNLOAD SECTION -----------------------------------------</p>';


if (sizeof($a) > 2){
$x = 2;

while($x <= sizeof($a)-1) {

echo '<a href="shareWithCustomer/';
if ($_POST["uname"] != ""){
echo $_POST["uname"];
echo "/";
}

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
} //end of if (sizeof($a) > 2){
else{
echo "<h2> Empty Folder :-( </h>";
}

} // end of if (password correct)
else {
echo '<h> Wrong Password Entered </h>';
}

?> 
