<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset = "utf-8">
    <meta http-equiv="X-UA-compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Stock</title>       
    <link rel="icon" href="images/iitglogo.png">
    <link href="css/font-awesome.min.css"rel = "stylesheet">
    <link href="css/bootstrap.min.css" rel = "stylesheet">
    <link href="css/bootstrap-theme.min.css" rel="stylesheet">
    <link href="css/bootstrap-social.css" rel="stylesheet">
    <link href="css/mystyles.css" rel="stylesheet">
    
   

    
</head>

<body>
  <nav class="navbar navbar-inverse navbar-fixed-top" role = "navigation">
        <div class = "container">
            <div class = "navbar-header">
                <button type = "button" class = "navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class = "navbar-brand" href="index.php">IITG Sports</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav ">
                    <li class="active"><a href="index.php"><span class = "glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                    <li class = "dropdown">
                        <a href = "#" class = "dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false">Sports<span class="caret"></span></a>
                        <ul class = "dropdown-menu">
                            <li><a href = "http://www.iitg.ernet.in/stud/gymkhana/sports/aquatics.html">Aquatics</a></li>
                            <li><a href = "http://www.iitg.ernet.in/stud/gymkhana/sports/athletics.html">Athletics</a></li>
                            <li><a href = "http://www.iitg.ernet.in/stud/gymkhana/sports/badminton.html">Badminton</a></li>
                            <li><a href = "http://www.iitg.ernet.in/stud/gymkhana/sports/basketball.html">Basketball</a></li>
                            <li><a href = "http://www.iitg.ernet.in/stud/gymkhana/sports/cricket.html">Cricket</a></li>
                            <li><a href = "http://www.iitg.ernet.in/stud/gymkhana/sports/football.html">Football</a></li>
                            <li><a href = "http://www.iitg.ernet.in/stud/gymkhana/sports/hockey.html">Hockey</a></li>
                            <li><a href = "http://www.iitg.ernet.in/stud/gymkhana/sports/squash.html">Squash</a></li>
                            <li><a href = "http://www.iitg.ernet.in/stud/gymkhana/sports/tennis.html">Tennis</a></li>
                            <li><a href = "http://www.iitg.ernet.in/stud/gymkhana/sports/tt.html">Table Tennis</a></li>
                            <li><a href="http://www.iitg.ernet.in/stud/gymkhana/sports/volleyball.html">Volleyball</a></li>
                            <li><a href = "http://www.iitg.ernet.in/stud/gymkhana/sports/weightlifting.html">Weightlifting</a></li>
    <!--                         <li role = "separator" class = "divider"></li>
                            <li class= "dropdown-header">Aquatics</a></li>
                            <li><a href = "#">Water Polo</a></li>
                            <li><a href = "#">Swimming</a></li> -->
                        </ul>
                    </li>
                    <li class = "dropdown">
                        <a href = "#" class = "dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false">Courses<span class="caret"></span></a>
                        <ul class = "dropdown-menu">
                            <li><a href = "sa.php">SA</a></li>
                            <li><a href = "nso.php">NSO</a></li>
                           
                        </ul>
                    </li>
                     <li class = "dropdown">
                        <a href = "#" class = "dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false">Competetions<span class="caret"></span></a>
                        <ul class = "dropdown-menu">
                            <li><a href = "inters.php">Inter IIT</a></li>
                            <li><a href = "spardha.php">Spardha</a></li>
                            <li><a href = "spirit.php">Spirit</a></li>
                            <li><a href = "staff_meet.php">Staff Meet</a></li>
                           
                        </ul>
                    </li>
                    
                </ul>
            <!-- <ul class = "nav navbar-nav">
                <li> <a href = "#"><img src = "iitg_logo.gif" width = "50%" height = "50%"></a></li>
            </ul>
 -->
                <ul class = "nav navbar-nav navbar-right">
                
                
                    <li><a href="#">Swimming Pool</a></li>
                    <li><a href="forms.php">Forms</a></li>
                    <li class = "dropdown">
                        <a href = "#" class = "dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false">Utilities<span class="caret"></span></a>
                        <ul class = "dropdown-menu">
                            <li><a href ="field.php">Field reservations</a></li>
                            <li><a href ="#">Sports Stock</a></li>
                       
                        </ul>
                    </li>
                    <li><a href="#" data-toggle="modal" data-target="#loginmodal">
                        <span class="glyphicon glyphicon-log-in"></span>
                        Login</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
     <div id="loginmodal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">   
                <div class="modal-header">
                    <h2><center>Login for Admin</center></h2>
                </div>
                <form class="form-horizontal" role="form" action="login.php" method="post">
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="username">Username: </label>
                            <div class="col-sm-8">
                                <input type="username" class="form-control" name="username" id="username" placeholder="Enter the Username" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-3" for="password">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Enter the password" required>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger btn-lg pull-left" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success btn-lg">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    
    <p>
        <br>
        <br>
        <br>
        <br>
    </p>
    
    <!-- HEADING --> 
    
    <div class="container">
  <div class="jumbotron">
    <h1>Sports Stock</h1> 
    <p>This page has all the Stock related database in Gymkhana Sports.</p> 
  </div>
</div>
    
   
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">

</script>
<script src="js/bootstrap.min.js"></script>
    </body>
    </html>