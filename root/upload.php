<?php
$target_dir = "files/nso/";
$target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
$uploadOK=1;
//move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
if(file_exists($target_file))
{
	echo "File already exists";
	$uploadOK=0;
}
if($uploadOK=0)
{
	echo "Sorry file not uploaded as it exists";
}
else
{
	if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)){
		echo "The file ". basename($_FILES["fileToUpload"]["name"]) . " has been uploaded";
	}
	else {
		echo "Sorry there was some system error";
	}
}

//Changing uploaded file permissions to access it later
chmod($target_file,0777);

header("location:admin.php");

?>