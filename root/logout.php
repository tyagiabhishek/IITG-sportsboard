<?php
session_start();
if(!isset($_SESSION['id']))
header('location:index.php');
if(isset($_GET['logout']))
{
	session_destroy();
	unset($_SESSION['id']);
	header('location:index.php');
}




?>