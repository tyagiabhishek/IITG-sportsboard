<?php
session_start();
include_once 'dbconnect.php';
if(!isset($_SESSION['id']))
header('location: index.php?err=2');
$id=$_SESSION['id'];
$query="SELECT * from staff Where id='$id'  ";
$query_run = mysqli_query($conn,$query);
$row= mysqli_fetch_assoc($query_run);
?>
<!DOCTYPE html>
<html>
<head>
<title>SA</title>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

<link rel="stylesheet" href="sa.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="row row-header">
		<nav class="navbar navbar-inverse navbar-fixed-top">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type = "button" class = "navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                	</button>
                	<a class = "navbar-brand" href="index.php">IITG Sports</a>
            	</div>
            	<ul class="nav navbar-nav navbar-right">
            		<li><a class="navbar-brand" href="logout.php?logout" style:"font-size:large;">Logout</a></li>
            	</ul>
           	</div>
         </nav>
    </div>	
    <div class="row" style="padding-top: 5%; padding-bottom: 5%;">
    	<div class="col-sm-12"><center>
    		<h1><label class="label label-info"><?php echo 'Hello, '.$row['name']; ?></label></h1></center>
    	</div>
    </div>
</body>
</html>








