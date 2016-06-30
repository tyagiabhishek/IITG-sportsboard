<?php
if(isset($_POST['delete']))
{
	$file=$_POST['file_name'];
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