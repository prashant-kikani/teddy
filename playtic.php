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
  unset($_SESSION["usewin"]);
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
  <link rel = 'stylesheet' type = 'text/css' href = 'styles/ui.css'>
  <title>Teddy</title>
  <style type="text/css">
    #top {
        background-color: lightgrey;
        margin-top: 20px;
        padding: 15px;
        padding-bottom: 30px; 
    }
    #rules {
      font-family: "Segoe UI", Times, serif;
      font-size: 23px; 
    }
    #heading {
      font-family: "Segoe UI", Times, serif;
      font-size: 60px;
      margin: 10px;
    }
    .game-area{
      font-family: "Segoe UI", Times, serif;
      font-size: 25px;
    }
    #box1, #box2, #box3, #box4, #box5, #box6, #box7, #box8, #box9{
      width: 100px;
      height: 100px;
      margin: 3px;
      padding: 3px;
      border-style: solid;
      border-color: black;
      border-width: 3px;
    }
    img {
      width: 80px;
      height: 80px;
      margin: 5px;
      padding: 5px;
      display: none;
    }
    table {
      margin: 60px;
      padding: 70px;
    }
    #userwin, #comwin, #draw{
        font-family: "Segoe UI", Times, serif;
      font-size: 30px;
        font: black;
        display: none;
        margin: 30px;
    }
  </style>
  <script type="text/javascript">
    function usewin(){
		
		<?php if(isset($_SESSION["usewin"])){header("location: about.php");}
		$_SESSION["usewin"] = 1356;?>
      window.location="usewin.php";
    }
    function comwin(){
      window.location="comwin.php";
    }
  </script>

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

    <script type="text/javascript">
      //document.write('hiiiiiiiiiiiiiiii');
    </script>
    <div id="top">
    <div id="heading">
      <b><center>Tic-Tac-Toe</center></b>
    </div>

    <div id="rules" class="container-fluid">
    <center><p>A simple tic-tac-toe game.<br>Win and move your level up in the leaderboard.<br>If you don't know, 3 same signs in any direction wins.<br><br>Computer will move <u>instantly</u> after you move.<br><b>Select a <b><u>level</u></b>, then click Play.</b><br>First move is yours.</p></center>
    </div>
    </div>
    
    <div class = 'container-fluid'>
            <div class = 'board'>
                <!-- data-indx following cell divs represents cell index in 1D array representation -->
                <div class='cell' data-indx = "0" style="margin-top: 30px"></div>
                <div class='cell' data-indx = "1" style="margin-top: 30px"></div>
                <div class='cell' data-indx = "2" style="margin-top: 30px"></div>
                <div class='cell' data-indx = "3" ></div>
                <div class='cell' data-indx = "4" ></div>
                <div class='cell' data-indx = "5" ></div>
                <div class='cell' data-indx = "6" ></div>
                <div class='cell' data-indx = "7" ></div>
                <div class='cell' data-indx = "8" ></div>
            </div>

            <div class = 'control'>
                <!-- div.intial displays the starting controls -->
                <div class = 'intial'>
                    <div class = 'difficulty'>
                        <span class = 'level not-selected' id = "blind">Blind</span>
                        <span class = 'level not-selected' id = "novice">Novice</span>
                        <span class = 'level not-selected' id = "master">Master!</span>
                    </div>

                    <div class="start" style="margin-bottom: 30px"> Play </div>
                </div>

                <!-- div.ingame displays in-game messages and controls -->
                <div class = 'ingame' id="human" style="padding-bottom: 20px;">It's your turn ...</div>
                <div class = 'ingame' id="ai">
                    <img src = "imgs/robot.png" id = "robot" class = "robot" />
                    <p>Waint for it ...</p>
                </div>
                <div class = 'ingame' id="won" style="padding: 20px;">You won!<br><a class='btn btn-lg btn-primary' href='usewin.php' role='button'>  OK, Play Again &raquo;</a>
                <div style='font-size: 20px'>(You need to press this button to <u>update your score.</u>)</div><br></div>
                <div class = 'ingame' id="lost">You lost!<br><a class='btn btn-lg btn-primary' href='comwin.php' role='button'>  OK, Play Again &raquo;  </a><div style='font-size: 20px'>(You need to press this button to <u>update your score.</u>)</div><br></div>
                <div class = 'ingame' id="draw">It's a Draw<br><a class='btn btn-lg btn-primary' href='comwin.php' role='button'>  OK, Play Again &raquo;  </a><div style='font-size: 20px'>(You need to press this button to <u>update your score.</u>)</div><br></div>
            </div>
        </div>

        <script src = "scripts/jquery-1.10.1.min.js"></script>
        <script src = "scripts/ui.js"></script>
        <script src = "scripts/game.js"></script>
        <script src = "scripts/ai.js"></script>
        <script src = "scripts/control.js"></script>
    
    <?php
        /*if($win == 0){
            $uname = $_SESSION['name']; 
            $p = $db->query('select ticp from users where name=$uname');
            $p = $p + 1;
            $phi = $db->query('select tichi from users where name=$uname');
            $phi = $phi + 1;
            $q = $db->query('update users set ticp=$p where name=$uname');
            $q1 = $db->query('update users set tichi=$phi where name=$uname');

        } else {
            $uname = $_SESSION['name']; 
            $p = $db->query('select ticp from users where name=$uname');
            $p = $p + 1;
            $q = $db->query('update users set ticp=$p where name=$uname');
            
        }*/
    ?>


    <footer>
      <p>&copy; Teddy Company, Inc. 2017</p>
    </footer>
  </body>
</html>