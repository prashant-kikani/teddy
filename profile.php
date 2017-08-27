<?php
try{
$db = new PDO('mysql:host=127.0.0.1;dbname=teddydb','root','');
//echo "Connected...";
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e){
  echo $e->getMessage();
}
  session_start();
  //session_start();
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
    #hello{
      background-color: lightgrey;
    font-family: "Segoe UI", Times, serif;
    color: black;
    margin-top: 20px;
    margin-bottom: 25px;
    width: 100%;
    font-size: 70px;  
    }
    #thank{
        font-family: "Segoe UI", Times, serif;
        color: black;
        font-size: 35px;
    }
    #upd{
        font-family: "Segoe UI", Times, serif;
        color: black;
        margin: 19px;
    }
  </style>

</head>
  <body>
    <?php
        if(isset($_GET["msg"])){
          echo "
            <script>
                alert('Sorry, Username already taken by someone. It should be unique. Choose another one.');
              </script>
          ";
        }
        if(isset($_GET["msg1"])){
          echo "
            <script>
                alert('Username successfully updated.');
              </script>
          ";
        }
        if(isset($_GET["msg2"])){
          echo "
            <script>
                alert('Password successfully updated.');
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
            <li><a href="about.php">
            <span class="glyphicon glyphicon-info-sign" aria-hidden="true"></span>&nbsp;About</a></li>
            <li  class="active"><a href="profile.php">
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

    <div id="hello" class="container">
        <center>Hello, <b><?php echo $_SESSION['name']?></b></center>
    </div>
        
    <div id="thank">
    <?php
        $uname = $_SESSION['name'];
        $qq = $db->query("select wel from users where name = '$uname'");
        //if($qq != null){
            $p = $qq -> fetch(PDO::FETCH_OBJ) -> wel;
        //}
        echo "
            <center>A warm <b>Thank you</b> for visiting this site <b>".$p."</b> times.<br>  Your support has provided a great platform to this site.<br><hr></center>  
        ";
    ?>
    </div>

    <div id="upd" class="row">
        <div class="col-md-6">
        <span style="font-size: 32px;">To <b>update</b> your Username...
        </span><br><br> 
        <form action="update.php" method="post" style="font-size: 22px;">
        New Username : <div class="form-group">
        <input type='text' placeholder='New Username' class='form-control' id='name' name='nname' 
            style="width: 200px; white-space: nowrap; margin-top: 7px;"></div>
        <button type='submit' class='btn btn-success'>Update Username</button>
        </form><br>
        </div>

        <hr class="visible-xs">

        <div class="col-md-6">
        <span style="font-size: 32px;">To <b>update</b> your Password...
        </span><br><br> 
        <form action="update.php" method="post" style="font-size: 22px;">
        New Password : <div class="form-group">
        <input type='text' placeholder='New Password' class='form-control' id='pwd' name='npwd' 
            style="width: 200px; white-space: nowrap; margin-top: 7px;"></div>
        <button type='submit' class='btn btn-success'>Update Password</button>
        </form></div>
    </div>



    



    <footer>
      <p>&copy; Teddy Company, Inc. 2017</p>
    </footer>
  </body>
</html>