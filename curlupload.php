<?php
if (isset($_FILES['fileToUpload']['name'])){
	$path="publicuploads/".$_FILES['fileToUpload']['name'];
	move_uploaded_file($_FILES['fileToUpload']['name'], $path);
}
else{
header('Location: http://veerappanraja.com/uploadcurl.php');
}
?>