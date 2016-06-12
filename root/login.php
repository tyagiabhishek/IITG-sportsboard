<?php 
session_start();
include_once 'dbconnect.php';
if(isset($_POST['username'])&&isset($_POST['password']))
{
	$err="";
	$username=$_POST['username'];
	$password = $_POST['password'];
	echo "Username ".$username." Password: ".$password;
	$username= mysqli_real_escape_string($conn,$username);
	$password = (mysqli_real_escape_string($conn,$password));
	$slquery = "SELECT * FROM staff WHERE username='$username'";
	echo $slquery;
	$query_run = mysqli_query($conn,$slquery);
	if(!$query_run){
		//echo "query could not run";
		header('location: index.php?err=1');
	}
	else{
		echo "\nquery ran successful\n";
		$row_cnt = mysqli_num_rows($query_run);
		if($row_cnt==0)
		{
			echo "row count is 0";
			header('location: index.php?err=1');
		}
		else 
		{
			echo "there are rows too";
			$row = mysqli_fetch_assoc($query_run);
			echo $row["id"];
			$_SESSION['id']=$row["id"];
			header('location: admin.php');
		}
	}
}
?>