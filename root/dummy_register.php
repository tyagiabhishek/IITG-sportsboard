<?php
session_start();
include_once 'dbconnect.php';
$name=$username=$password="";
if(isset($_POST['register']))
{
	$name= mysqli_real_escape_string($conn,test_input($_POST['name']));
	$username= mysqli_real_escape_string($conn,test_input($_POST['username']));
	$password = mysqli_real_escape_string($conn,test_input($_POST['password']));

	$query="INSERT INTO staff (name,username,password) Values ('$name','$username','password')";
	//$slquery="SELECT * from staff where username='$username'"
	//add check of already exist later
	if(mysqli_query($conn,$query))
	{
		//echo "successfully inserted";
		$slquery = "SELECT * FROM staff WHERE username='$username'";
		$result = mysqli_query($conn,$slquery);
		$row = mysqli_fetch_assoc($result);
		$_SESSION['id']=$row["id"];
		echo $_SESSION['id'];
		header('location: admin.php');

	}
	else 
	{
		$name=$usename=$password="";
		?>
		<script>alert('Error while registering')</script>
		<?php

	}
}
function test_input($data)
{
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return ($data);
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
	<title>Dummy register</title>
</head>
<body>
	<form action="dummy_register.php" method="post">
		<input type="text" name="name" required value="" id="name">
		<input type="text" name="username" required value="username" id="username">	
		<input type="password" name="password" required value="passowrd" id="password">
		<input type="submit" name="register">
	</form>
</body>
</html>
