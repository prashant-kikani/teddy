<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width , initial-scale=1" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">  
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="images/flogo1.png">
  <!--link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!--for different fonts-->
  <!--link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Satisfy"-->
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="sidebar.css">
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <title>Teddy</title>
  <style type="text/css">
  .jumbotron{
    background-color: lightgrey;
    font-family: "Segoe UI", Times, serif;
    color: black;
  }
  #body {
    font-family: "Segoe UI", Times, serif;
    color: black;
  }
  #inner {
    font-size: 16px;
  }
  
  </style>

</head>
  <body>
    <?php

    //session_start();
    /*if($_SESSION['ok'] == null){
      $_SESSION['name'] = null;
    }*/
    if(!isset($_SESSION['name'])){
      $_SESSION['name'] = null;
    }
    $firsttime = 1;
    if(isset($_GET["msg"])){
          echo "
            <script>
                alert('password is wrong OR name already taken by someone.');
              </script>
          ";
        }
        if(isset($_GET["msg1"])){
          echo "
            <script>
                alert('Please Login to play OR to see your Profile.');
              </script>
          ";
        }

    ?>

        <?php //***************************************************************************************************?>
    <div class="visible-xs container-fluid" style="height: 150px;">
      
    </div>
    <div class="navbar-wrapper" style="">
<div class="navbar navbar-inverse navbar-fixed-top" style="">
      <div class="container-fluid">

         
        <div class="navbar-header">
          <a href="index.php" class="navbar-brand">Teddy</a>

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

            <button type='submit' class='btn btn-success'>Sign in/up</button>
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
    <div id="wrapper">  
    <!--sidebar-->
    <div id="sidebar-wrapper">
      <ul class="sidebar-nav">
        <li><a href="games.php">Games</a></li>
        <li><a href="settings.php">Sattings</a></li>
        <li><a href="feedback.php">Feedback</a></li>
      </ul>
    </div>

  <!--PageContent-->    
   <div class="jumbotron">
      <div class="container">
        <h1>Let's Play!</h1>
        <!--?php echo $_SESSION['name'];?-->
        <p>This is the place where you can show your gaming skills against the whole world.<br>
            There are many games available. Play and enjoy.<br>
            Compare yourself with others in leaderboard.<br></p>
        <p><a class="btn btn-primary btn-lg" href="play.php" role="button">Play &raquo;</a></p>
      </div>
    </div>

    <div class="container" id="body">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-6">
          <h2>Tic-Tac-Toe</h2>
          <p id="inner">A simple tic-tac-toe game.<br>Win and move your level up in the leaderboard.<br>If you don't know, 3 same signs in any direction wins. </p>
          <p><a class="btn btn-default" href="playtic.php" role="button">Play &raquo;</a></p>
        </div>
        <hr class="visible-xs">
        <div class="col-md-6">
          <h2>Coming Soon...</h2>
          <p>Coming Soon...</p>
          <p id="inner"><a class="btn btn-default" href="play.php" role="button">Play &raquo;</a></p>
          <br><br>

       </div>
      </div>

    </div>
    <hr>

    <footer>
      <p>&copy; Teddy Company, Inc. 2017</p>
    </footer>
    <script type="text/javascript">
      $("#menu-toggle").click( function(e){
        e.preventDefault();
        $("#wrapper").toggleClass("menuDisplayed");
      });
    </script>

  </body>
</html>