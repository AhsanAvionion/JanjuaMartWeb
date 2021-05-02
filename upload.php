<?php

echo '<!DOCTYPE html>
<html>
<body>
<link rel="stylesheet" href="index.css">

<link rel="stylesheet" href="download.css">
<h1>Welcome To Janjua Mart</h1>';

$target_dir = "uploads/";

$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<h2>Sorry, your file was not uploaded</h>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "<h2>The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded</h>";
  } else {
    echo "<h2>Sorry, there was an error uploading your file</h>";
  }
}
echo '<b><a href=index.html target="_blank">Home Page</a></b>
</body>
</html> 
';
?> 
