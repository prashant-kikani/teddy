<?php
try{
$db = new PDO('mysql:host=127.0.0.1;dbname=teddydb','root','');
//echo "Connected...";
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
session_start();
}
catch(PDOException $e){
  echo $e->getMessage();
  die();
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
    .jumbotron{
    background-color: lightgrey;
    font-family: "Segoe UI", Times, serif;
    color: black;
    margin-top: 20px;
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
          
            <li><a href="play.php">
             <span class="glyphicon glyphicon-flag" aria-hidden="true"></span>&nbsp;Play</a>
            </li>

            <li><a href="leaders.php"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;LeaderBoard</a></li>
            <li  class="active"><a href="about.php">
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

    <div class="jumbotron">
        <div class="container">
        <div class="col-md-9">
          <h1>What is Teddy?</h1>
          
          <p>Teddy is the place where you can do <b>Timepass</b> by playing different games online!!<br>
          Show your skills against the world and move your rank up in the <u>global</u> leaderboard.<br>
          In short, Teddy is a low weight <u>gaming site</u>.</p>
        </div>
        <div class="col-md-3"  style="margin-top: 30px">
          <img class="featurette-image img-responsive center-block" src="images/flogo.png" alt="Generic placeholder image">
        </div>
        </div>
    </div>

    <div class="jumbotron">
        <div class="container">
        <div class="col-md-4" style="margin-top: 30px">
          <img class="featurette-image img-responsive center-block" src="images/my.jpg" alt="Generic placeholder image" height=200 width=200 > 
        </div>
        <div class="col-md-8">
          <h1>Developers</h1>
          
          <p>NO, there are no <b>developers,</b> there is a <b>developer!!</b><br>Who wants to help people as much as he can do.<br>By the way, this site a product of his desire to learn <u>CSS</u>, <u>JavaScript</u> and other stuff!!!</p>
        </div>
        
        </div>
    </div>

    <div class="jumbotron">
        <div class="container">
        <div class="col-md-10">
          <h1>Why should I play here?<h1>
          
          <p class="lead">Teddy is the place where you can do <b>Timepass</b> by playing different games online!!<br>
          So, if you want some <u>fun</u> for sometime, open browser and go to <u>Teddy</u>.<br>
          It will be a great fun.</p>
        </div>
        <div class="col-md-2"  style="margin-top: 15px">
          <img class="featurette-image img-responsive center-block" src="images/flogo.png" alt="Generic placeholder image">
        </div>
        </div>
    </div>    
      


    



    <footer>
      <p>&copy; Teddy Company, Inc. 2017</p>
    </footer>
  </body>
</html>