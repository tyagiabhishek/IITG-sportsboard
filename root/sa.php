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
<body background="images/back.jpg" style="background-repeat=no-repeat; background-attatchment: fixed;background-size: cover">
    <nav class="navbar navbar-inverse navbar-fixed-top" role = "navigation">
        <div class = "container">
            <div class = "navbar-header">
                <button type = "button" class = "navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class = "navbar-brand" href="index.html">IITG Sports</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav ">
                    <li class="active"><a href="index.html"><span class = "glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
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
                            <li><a href = "sa.html">SA</a></li>
                            <li><a href = "nso.html">NSO</a></li>
                           
                        </ul>
                    </li>
                     <li class = "dropdown">
                        <a href = "#" class = "dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false">Competetions<span class="caret"></span></a>
                        <ul class = "dropdown-menu">
                            <li><a href = "inters.html">Inter IIT</a></li>
                            <li><a href = "spardha.html">Spardha</a></li>
                            <li><a href = "spirit.html">Spirit</a></li>
                            <li><a href = "staff_meet.html">Staff Meet</a></li>
                           
                        </ul>
                    </li>
                    
                </ul>
            <!-- <ul class = "nav navbar-nav">
                <li> <a href = "#"><img src = "iitg_logo.gif" width = "50%" height = "50%"></a></li>
            </ul>
 -->
                <ul class = "nav navbar-nav navbar-right">
                
                
                    <li><a href="#">Swimming Pool</a></li>
                    <li><a href="forms.html">Forms</a></li>
                    <li class = "dropdown">
                        <a href = "#" class = "dropdown-toggle"
                        data-toggle="dropdown"
                        role="button"
                        aria-haspopup="true"
                        aria-expanded="false">Utilities<span class="caret"></span></a>
                        <ul class = "dropdown-menu">
                            <li><a href ="field.html">Field reservations</a></li>
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


<div class="col-md-3 section section-slim section-front-end-web opaque hover-translucify" id="volley">
<a href="#myModal" role="button" data-toggle="modal">
     <img class="imag" src="images/Volleyball-PNG-Clipart.png" alt="VolleyBall">
<h2 class="headoverimg" >Volleyball</h2>
 

</a>
</div>

<div class="col-md-3 section section-slim section-front-end-web opaque hover-translucify">
<a href="#myModal" role="button" data-toggle="modal">

<img class="imag" src="images/OlyWeights.png" title="contrast" alt="Weight Lifting">
<h2 class="headoverimg" >Weightlifting</h2>
</a>
</div>
<div class="col-md-3 section section-slim section-front-end-web opaque hover-translucify">
<a href="#myModal" role="button" data-toggle="modal">
<img class="imag"src="images/Table_Tennis.png" alt="Table Tennis"title="saturate">
<h2 class="headoverimg" >Table Tennis</h2>
</a>
</div>
<div class="col-md-3 section section-slim section-front-end-web opaque hover-translucify">
<a href="#myModal" role="button" data-toggle="modal">
<img class="imag" src="images/tennis.png" alt="Tennis">
<h2 class="headoverimg" >Tennis</h2>
</a>
</div>
<div class="col-md-3 section section-slim section-front-end-web opaque hover-translucify">
<a href="#myModal" role="button" data-toggle="modal">
<img class="imag"src="images/Basketball.png"  alt="BasketBall" >
<h2 class="headoverimg" >Basketball</h2>
</a>
</div>
<div class="col-md-3 section section-slim section-front-end-web opaque hover-translucify">
<a href="#myModal" role="button" data-toggle="modal">
<img class="imag" src="images/Football.png" alt="FootBall" >
<h2 class="headoverimg"> Football</h2>
</a>
</div>
<div class="col-md-3 section section-slim section-front-end-web opaque hover-translucify">
<a href="#myModal" role="button" data-toggle="modal">
<img class="imag" src="images/hockey.png" alt="Hockey">
<h2 class="headoverimg" >Hockey</h2>
</a>
</div>
<div class="col-md-3 section section-slim section-front-end-web opaque hover-translucify">
<a href="#myModal" role="button" data-toggle="modal">
<img src="images/Cricket.png" alt="Cricket" class="imag" >
<h2 class="headoverimg" >Cricket</h2>
</a>
</div>
<div class="col-md-3 section section-slim section-front-end-web opaque hover-translucify">
<a href="#myModal" role="button" data-toggle="modal">
<img src="images/badminton.png" alt="Badminton" class= "imag">
<h2 class="headoverimg" >Badminton</h2>
</a>
</div>
<div class="col-md-3 section section-slim section-front-end-web opaque hover-translucify">
<a href="#myModal" role="button" data-toggle="modal">
<img src="images/Squash.png" alt="Squash" class="imag">
<h2 class="headoverimg" >Squash</h2>
</a>
</div>
<div class="col-md-3 section section-slim section-front-end-web opaque hover-translucify">
<a href="#myModal" role="button" data-toggle="modal">
<img src="images/Athletics.png" class="imag" alt="Athletics">
<h2 class="headoverimg" >Athletics</h2>
</a>
</div>
<div class="col-md-3 section section-slim section-front-end-web opaque hover-translucify">
<a href="#myModal" role="button" data-toggle="modal">
<img src="images/Aquatics.png" alt="Aquatics"style="width:250px;height:250px";>
</a>
<div class="overlay">This is some text</div>
</div>
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog" style="background-color:Red width:1200px">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Attendance / Timing</h4>
      </div>
      <div class="modal-body">
        <p><a href="files/sa/dummy.pdf"><h2>SA Attendance</h2></a></p>
        <p><h2>SA Timing</h2></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal" style="font-weight:bold;">CLOSE</button>
      </div>
    </div>

  </div>
  </div>
	
</body>
</html>
