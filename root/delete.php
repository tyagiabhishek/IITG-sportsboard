<?php
if(isset($_POST['action']))
{
	$file=$_POST['action'];
	$file_name="./files/nso/".$file;
	if(!unlink($file_name))
	{
		echo "File cannot be deleted";
	}
	else 
		{
			echo "file deleted bitch!!";
			header('location:admin.php');
		}
}

?>