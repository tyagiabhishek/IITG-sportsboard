<?php 
$uname='root';
$host='localhost';
$pwd='kakashiken123';
$db='sports_board';
$conn = mysqli_connect($host,$uname,$pwd,$db);
if(!$conn)
{
	echo "unable to connect to database";
	exit;
}
else
echo "Successfully connected to database";
?>