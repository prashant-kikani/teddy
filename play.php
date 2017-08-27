<?php
try{
$db = new PDO('mysql:host=127.0.0.1;dbname=teddydb','root','');
//echo "Connected...";
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
  echo $e->getMessage();
  die();
}
  session_start();
  if(!isset($_SESSION['name'])){
    $_SESSION['login'] = null;
    header("location:home.php?msg1=#");
  }
?>  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/flogo1.png">
  <!--link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="sidebar.css">
  <title>Teddy</title>
  <style type="text/css">
    .carousel {
  height: 500px;
  margin-bottom: 60px;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel .item {
  height: 500px;
  background-color: #777;
}
.carousel-inner > .item > img { 
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 500px;
}
#tic{
  opacity: 1;
color: white;
}
  </style>


</head>
  <body>
    

    <?php //***************************************************************************************************?>
    <div class="visible-xs container-fluid" style="height: 150px;">
      
    </div>
    <div class="navbar-wrapper" style="">
<div class="navbar navbar-inverse navbar-fixed-top" style="">
      <div class="container-fluid">

         
        <div class="navbar-header">
          <a href="home.php" class="navbar-brand">Teddy</a>

        </div>
        <div class="visible-xs" style="font-size: 17px; color: white;">
          <a href="play.php">
             <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>&nbsp;Play</a>
            &nbsp;&nbsp;

            <a href="leaders.php"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;LeaderBoard</a>
            &nbsp;&nbsp;
            <a href="about.php">
            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>&nbsp;About</a>
            &nbsp;&nbsp;
            <a href="profile.php">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Profile</a>
            &nbsp;&nbsp;
            

            <?php
            //***********************MOBILE
              error_reporting(E_ERROR | E_PARSE);
              session_start();
            if($_SESSION['name'] != null){
              echo "
              
              <div class='nav navbar-nav navbar-right'>
              <div><a href='profile.php'>&nbsp;&nbsp;&nbsp;&nbsp;Hello, " . $_SESSION['name'] . "</a></div>
              <div><a href='logout.php'>&nbsp;&nbsp;&nbsp;&nbsp;<span class='glyphicon glyphicon-off' aria-hidden='true'></span>&nbsp;Logout</a></div>
              </div> 
              ";
            }
          else {
            echo "
            &nbsp;&nbsp;
          <form class='navbar-form navbar-right' action='adduser.php' method='post'>
            <div class='form-group'>
              <input type='text' placeholder='Username' class='form-control' id='name' name='name'>
              <span id='fnameError'></span>
            </div>
            <div class='form-group'>
              <input type='password' placeholder='Password' class='form-control' id='pwd' name='pwd'>

            </div>

            <button type='submit' class='btn btn-success'>Sign in</button>
          </form>
          ";
          }
          //*********************************MOBILE
          ?>
        </div>
        
        <!--div class="navbar-collapse collapse"-->

          <ul class="nav navbar-nav hidden-xs">
          
            <li class="active"><a href="play.php">
             <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>&nbsp;Play</a>
            </li>

            <li><a href="leaders.php"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;LeaderBoard</a></li>
            <li><a href="about.php">
            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>&nbsp;About</a></li>
            <li><a href="profile.php">
            <span class="glyphicon glyphicon-user" aria-hidden="true"></span>&nbsp;Profile</a></li>

          </ul>
          
          <div class="hidden-xs">
          <?php
              error_reporting(E_ERROR | E_PARSE);
              session_start();
            if($_SESSION['name'] != null){
              echo "
              <ul class='nav navbar-nav navbar-right'>
              <li><a href='profile.php'>Hello, " . $_SESSION['name'] . "</a></li>
              <li><a href='logout.php'><span class='glyphicon glyphicon-off' aria-hidden='true'></span>&nbsp;Logout</a></li>
              </ul> 
              ";
            }
          else {
            echo "
          <form class='navbar-form navbar-right' action='adduser.php' method='post'>
            <div class='form-group'>
              <input type='text' placeholder='Username' class='form-control' id='name' name='name'>
              <span id='fnameError'></span>
            </div>
            <div class='form-group'>
              <input type='password' placeholder='Password' class='form-control' id='pwd' name='pwd'>

            </div>

            <button type='submit' class='btn btn-success'>Sign in</button>
          </form>
          ";
          }
          ?>
          </div>
      </div>
      </div>
      </div>  
  
    <?php //***************************************************************************************************?>

    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="images/tic.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption" id="tic">
              <h1>Tic-Tac-Toe</h1>
              <h3><p>A simple tic-tac-toe game.<br>Win and move your level up in the leaderboard.<br>If you don't know, 3 same signs in any direction wins. </p></h3>
              <p><a class="btn btn-lg btn-primary" href="playtic.php" role="button">Play &raquo;</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="images/soon1.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Just few days...</h1>
              <h3><p>Some great person said, "wait is a great thing. It makes your desire powerful". !!!</p></h3>
              <p><a class="btn btn-lg btn-primary" href="play.php" role="button">Wait &raquo;</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="images/soon1.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>One more...</h1>
              <h3><p>Some great person said, "wait is a great thing. It makes your desire powerful". !!!</p></h3>
              <p><a class="btn btn-lg btn-primary" href="play.php" role="button">Wait &raquo;</a></p>
            </div>
          </div>
        </div>
      </div>
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>



    



    <footer>
      <p>&copy; Teddy Company, Inc. 2017</p>
    </footer>
  </body>
</html>