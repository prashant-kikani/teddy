<?php
try{
$db = new PDO('mysql:host=127.0.0.1;dbname=teddydb','root','');
//echo "Connected...<br/>";
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
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
  	.placeholders{
  		padding-top: 20px;
  		background-color: grey;
  		font-family: "Segoe UI", Times, serif;
    	font-size: 45px; 
    	color: black;
  	}
  	thead {
  		font-size: 27px;
  	}
  	tbody {
  		font-size: 25px;
  	}
  	.table-responsive{
  		padding-left: 20px;
  	}
  	.sub-header{
  		font-size: 40px;

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

            <li  class="active"><a href="leaders.php"><span class="glyphicon glyphicon-stats" aria-hidden="true"></span>&nbsp;LeaderBoard</a></li>
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



    
    <center><h1 style="font-size: 50px"><b>LeaderBoard</b></h1></center>
    <div class="row placeholders">
            <div class="col-xs-6 col-sm-4 placeholder">
            <?php $c=1; $to=0; $pr=1; $cu=1;?>
            <?php
                $q2=$db->query("select * from users order by tichi desc");
                while($r=$q2->fetch(PDO::FETCH_OBJ)){
                  if($c == 1){
                    $n=$r->name;
                    $hi=$r->tichi;
                    $p=$hi;
                    $c = $c + 1;
                    break;
                  }
                  $c = $c + 1;  
                }
                $to = $to + 1;
            ?>
              <img src="images/one.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <?php
              echo "
                <h1>".$n."</h1>
                <h1><span>".$hi."</h1></span>
              ";
              ?>   
            </div>


            <div class="col-xs-6 col-sm-4 placeholder">
              <?php $c=1 ?>
              <?php
                $q2=$db->query("select * from users order by tichi desc");
                while($r=$q2->fetch(PDO::FETCH_OBJ)){
                  if($c == 2){
                    $n=$r->name;
                    $hi=$r->tichi;
                    $c = $c + 1;
                    break;

                  }
                  $c = $c + 1;  
                }
                $to = $to + 1;
                if($p == $hi){
                    $cu=$pr;
                  echo "
                    <img src='images/one.jpg' width='200' height='200' class='img-responsive' alt='Generic placeholder thumbnail'>
                  ";
                } else {
                    $p=$hi;
                  $cu=$to;
                  $pr=$cu;
                  echo "
                    <img src='images/two.jpg' width='200' height='200' class='img-responsive' alt='Generic placeholder thumbnail'>
                  ";
                }           
              echo "
                <h1>".$n."</h1>
                <h1><span>".$hi."</h1></span>
              ";
              ?>   
            </div>

            <div class="col-xs-6 col-sm-4 placeholder">
              <?php $c=1; ?>
            <?php
                $q2=$db->query("select * from users order by tichi desc");
                while($r=$q2->fetch(PDO::FETCH_OBJ)){
                  if($c == 3){
                    $n=$r->name;
                    $hi=$r->tichi;
                    $c = $c + 1;
                    break;

                  }
                  $c = $c + 1;  
                }
                $to = $to + 1;
                if($p==$hi){
                     $cu=$pr;
                  if($cu == 1) {
                    echo "
                    <img src='images/one.jpg' width='200' height='200' class='img-responsive' alt='Generic placeholder thumbnail'>
                  ";
                  } else if($cu == 2){
                    echo "
                    <img src='images/two.jpg' width='200' height='200' class='img-responsive' alt='Generic placeholder thumbnail'>
                  ";
                  } 
                } else {
                    $p=$hi;
                  $cu=$to;
                  $pr=$cu;
                  if($cu == 2){
                    echo "
                    <img src='images/two.jpg' width='200' height='200' class='img-responsive' alt='Generic placeholder thumbnail'>
                  ";
                } else if($cu == 3){
                  echo "
                    <img src='images/three.jpg' width='200' height='200' class='img-responsive' alt='Generic placeholder thumbnail'>
                  ";
                }
                }
              echo "
                <h1>".$n."</h1>
                <h1><span>".$hi."</h1></span>
              ";
              ?>   
              
            </div>
            <?php /*
            <!--div class="col-xs-6 col-sm-3 placeholder">
            <?php $c=1 ?>
              <?php
                $q2=$db->query("select * from users order by tichi desc");
                while($r=$q2->fetch(PDO::FETCH_OBJ)){
                  if($c == 4){
                    $n=$r->name;
                    $hi=$r->tichi;
                    $c = $c + 1;
                    break;

                  }
                  $c = $c + 1;  
                }
                $to = $to + 1;
                
              ?>
              <img src="images/four.jpg" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
              <?php
              echo "
                <h1>".$n."</h1>
                <h1><span>".$hi."</h1></span>
              ";
              ?>              
            </div-->*/?>
          </div>

          
          <br>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>#</th>
                  <th>Name</th>
                  <th>Total Games</th>
                  <th>Win</th>
                </tr>
              </thead>
              <?php $c = 1; /*echo "cu = ".$cu." p = ".$p." pr = ".$pr." to = ".$to;*/?>
              <tbody>
              	<?php

              		$q2=$db->query("select * from users order by tichi desc");
              		while($r=$q2->fetch(PDO::FETCH_OBJ)){
                        if(isset($_SESSION['name'])) {
                            $u = $_SESSION['name'];
                        }
                        if(isset($_SESSION['name']) && $r->name == $u) {
                            echo "<tr style='background-color: black; color: white;'>";
                        if($c > 3){                         //no of circles............
                            $to = $to + 1;
                            if($r->tichi == $p){
                                $cu=$pr;
                            } else {
                             $p=$r->tichi;
                                $cu=$to;
                                $pr=$cu;
                            }      
                            echo "
                                <td>".$cu."</td>
                            ";
                            echo "
                                <td>". $r->name ."</td>
                            ";
                            echo "
                                <td>". $r->ticp ."</td>
                            ";
                            echo "
                                <td>". $r->tichi ."</td>
                            ";  
                            $c = $c + 1;
                        } else {
                            $c = $c + 1; 
                        } 
                        echo "</tr>";
                        } else {
              			echo "<tr>";
                        
                        if($c > 3){                         //no of circles............
                            $to = $to + 1;
                            if($r->tichi == $p){
                                $cu=$pr;
                            } else {
                             $p=$r->tichi;
                                $cu=$to;
                                $pr=$cu;
                            }      
              				echo "
              					<td>".$cu."</td>
              				";
              				echo "
              					<td>". $r->name ."</td>
              				";
              				echo "
              					<td>". $r->ticp ."</td>
              				";
              				echo "
              					<td>". $r->tichi ."</td>
              				";	
              				$c = $c + 1;
              			} else {
                            $c = $c + 1; 
                        } 
              			echo "</tr>";
                        }	
              		}


              	?>

              </tbody>
              </table>
              </div>
    
    <footer>
      <p>&copy; Teddy Company, Inc. 2017</p>
    </footer>
  </body>
</html>