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
  <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <link rel="stylesheet" href="AdminLTE/css/AdminLTE.min.css">
  <link rel="stylesheet" href="AdminLTE/css/skins/_all-skins.min.css">
  <script src="bootstrap/js/jquery.min.js"></script>
  <script src="bootstrap/js/jquery-ui.js"></script>
  <script src="bootstrap/js/bootstrap.js"></script>
  <script src="AdminLTE/js/app.js"></script>
        <meta charset = "utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IITG Sports</title>        
    <link rel="icon" href="images/iitglogo.png">
    <link href="css/font-awesome.min.css"rel = "stylesheet">
    <link href="css/bootstrap.min.css" rel = "stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href="css/mystyles.css" rel="stylesheet">
<link rel="stylesheet" href="sa.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

  <script>

  $(document).ready(function(){
  $('.delete').click(function(){
  
    var clickvalue= $(this).val();
    var ajaxurl = 'delete.php',
    data = {'action':clickvalue};
    alert ("file to be deleted: "+clickvalue);
    $.post(ajaxurl,data,function(response){
      alert ("File deleted successfully ");
    } );
} );
}  );
  </script>

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
<!--     <form action="upload.php" method="post" enctype = "multipart/form-data">
      Select File to upload : 
      <input type = "file" name="fileToUpload" id= "fileToUpload">
      <input type = "submit" name = "submit" value = "Upload">
    </form> -->
    <div class="col-sm-7" style="padding:5%">
      <div class="panel panel-primary">
        <div class="panel-body">
          <button type="button" class = "btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#samodal">
            Click to edit SA files </button>
          <button type="button" class = "btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#samodal">
            Click to edit NSO files </button>
          <button type="button" class = "btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#samodal">
            Click to edit FORMS </button>
          <button type="button" class = "btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#samodal">
            Click to edit Stocks </button>
        </div>
      </div>
      <div id="samodal" class="modal fade" role = "dialog">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal">&times;</button>
              <h4 class="modal-title">List of files</h4>
            </div>
            <div class="modal-body">
              <?php
                  $dir="files/nso/";
                  $files = scandir($dir);
                  for($i=0,$c=0;$i<count($files);$i++)
                  {
                      if(strpos($files[$i],".pdf"))
                      {
                          $c++;
                      ?><p><a href=<?php echo $dir.$files[$i];?> ><h2><?php echo $c.".   ".$files[$i]; ?> </a></h2></p> <!--<?php
                      ?><p><a href=<?php echo $dir.$files[$i];?> ><?php echo $c.".   ".$files[$i]; ?> </a>
                              <button type="submit" class="btn btn-danger btn-xs delete" name="delete" value= ?>>Delete file</button></p>  -->
                             <form action="delete.php" method="post">
                              <input type="hidden" name="file_name"  value = <?php echo $files[$i];?> >

                        <button type="submit" class="btn btn-danger btn-xs" role="button" name="delete" >Delete file</button> </form></p>  
                       <?php

                      }
                  }

              ?>
            </div>
            <div class="modal-footer">
              <!-- <button type="button" class="btn btn-danger btn-lg pull-left" data-dismiss="modal" style="font-weight:bold;">CLOSE</button> -->
              <form action="upload.php" method="post" enctype = "multipart/form-data">
              Select File to upload : 
            <input type = "file" name="fileToUpload" id= "fileToUpload">
            <input type = "submit" name = "submit" value = "Upload">
              <h4><center>Upload a file to this folder</center></h4>
              <!-- <button type="button" class="btn btn-danger btn-lg pull-left" data-dismiss="modal" style="font-weight:bold;">CLOSE</button> -->
              <!-- <form class="form-horizontal" action="upload.php" method="post" enctype = "multipart/form-data">
              <label class="label-control" for="fileToUpload" ></label> 
              <input type = "file" name="fileToUpload" id= "fileToUpload">
              <button class="btn btn-success pull-right" type = "submit" name = "submit" value = "Upload">Upload</button>
            </form> -->
            </div>
          </div>
        </div>
      </div>

</div>
</body>
</html>








