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
  <!--link rel="stylesheet" type="text/css" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"-->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">
  <link rel="stylesheet" type="text/css" href="sidebar.css">
  <title>Teddy</title>
  <style type="text/css">
    #rules {
      font-family: "Segoe UI", Times, serif;
      font-size: 20px; 
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
  </style>

</head>
  <body>
    

    <?php //***************************************************************************************************?>
    <div class="navbar-wrapper">
<nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">

        
        <div class="navbar-header">
          
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainNavBar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="home.php" class="navbar-brand">Teddy</a>

        </div>

        
        <div class="collapse navbar-collapse" id="mainNavBar">

          <ul class="nav navbar-nav">
          <!--
            <li>
              <div>
                <a href="#" class="btn btn-success" id="menu-toggle">Show</a>
              </div>
            </li>
            -->
            <li class="active"><a href="play.php">Play</a></li>
            <li ><a href="leaders.php">LeaderBoard</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="profile.php">Profile</a></li>

          </ul>
          <?php
            
            if($_SESSION['name'] != null){
              echo "
              <ul class='nav navbar-nav navbar-right'>
              <li><a href='profile.php'>Hello, " . $_SESSION['name'] . "</a></li>
              <li><a href='logout.php'>Logout</a></li>
              </ul> 
              ";
            }
          else {
            echo "
          <form class='navbar-form navbar-right' action='adduser.php' method='post'>
            <div class='form-group'>
              <input type='text' placeholder='User Name' class='form-control' id='name' name='name'>
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
          
          <!--
           <ul class="nav navbar-nav navbar-right">
            <li><a href="profile.php">Hello  </a></li>
            <li><a href="logout.php">Logout</a></li>
           </ul>
           -->
        </div>
      </div>
      
    </nav>
    </div>
    <?php //***************************************************************************************************?>

    <script type="text/javascript">
      //document.write('hiiiiiiiiiiiiiiii');
    </script>
    <div id="heading">
      <b><center>Tic-Tac-Toe</center></b>
    </div>

    <div id="rules">
    <center><p id=>A simple tic-tac-toe game.<br>Win and move your level up in the leaderboard.<br>If you don't know, 3 same signs in any direction wins. </p></center>
    </div>
    
    <script type="text/javascript">
      var oc = 0;
    </script>
    <?php
    //<div class="game-area">
    ?>
    <script type="text/javascript">
      var oc = 0;
      var occ = [0,0,0,0,0,0,0,0,0];
    </script>
    <?php
      //$oc = 0;
      /*while($oc != 9){
        if($oc % 2 == 0){
          echo "your turn...";
        } else {
          echo "cpu's turn...";
        }


      }*/

      echo "<hr><center><table border=10 bordercolor=black>
        <tr>
          <td><div id='box1'><img id='c1' src='images/cross.png'><img id='r1' src='images/round.png'></div></td>
          <td><div id='box2'><img id='c2' src='images/cross.png'><img id='r2' src='images/round.png'></div></td>
          <td><div id='box3'><img id='c3' src='images/cross.png'><img id='r3' src='images/round.png'></div></td>
        </tr>
        <tr>
          <td><div id='box4'><img id='c4' src='images/cross.png'><img id='r4' src='images/round.png'></div></td>
          <td><div id='box5'><img id='c5' src='images/cross.png'><img id='r5' src='images/round.png'></div></td>
          <td><div id='box6'><img id='c6' src='images/cross.png'><img id='r6' src='images/round.png'></div></td>
        </tr>
        <tr>
          <td><div id='box7'><img id='c7' src='images/cross.png'><img id='r7' src='images/round.png'></div></td>
          <td><div id='box8'><img id='c8' src='images/cross.png'><img id='r8' src='images/round.png'></div></td>
          <td><div id='box9'><img id='c9' src='images/cross.png'><img id='r9' src='images/round.png'></div></td>
        </tr>
        </center></table>
      ";
    ?>
    
    <?php
    //</div>
    ?>
    <script type="text/javascript">
      $(document).on('click', 'div', function () {
        if(oc < 9) {
        var id = this.id;
        //document.write("id = ",id);
        //document.getElementById(id).style.display = 'block';
        if(id == 'box1'){
          if(oc % 2 == 0 && occ[0] == 0){
            document.getElementById('c1').style.display = 'block';
            oc = oc + 1;
          } else if(occ[0] == 0) {
            document.getElementById('r1').style.display = 'block';
            oc = oc + 1;
          } 
          occ[0] = 1;
          
        } else if(id == 'box2'){
          if(oc % 2 == 0 && occ[1] == 0){
            document.getElementById('c2').style.display = 'block';
            oc = oc + 1;
          } else if(occ[1] == 0) {
            document.getElementById('r2').style.display = 'block';
            oc = oc + 1;
          }
          occ[1] = 1;
        } else if(id == 'box3'){
          if(oc % 2 == 0 && occ[2] == 0){
            document.getElementById('c3').style.display = 'block';
            oc = oc + 1;
          } else if(occ[2] == 0) {
            document.getElementById('r3').style.display = 'block';
            oc = oc + 1;
          }
          occ[2] = 1;
          //oc = oc + 1;
        } else if(id == 'box4'){
          if(oc % 2 == 0 && occ[3] == 0){
            document.getElementById('c4').style.display = 'block';
            oc = oc + 1;
          } else if(occ[3] == 0) {
            document.getElementById('r4').style.display = 'block';
            oc = oc + 1;
          }
          occ[3] = 1;
          //oc = oc + 1;
        } else if(id == 'box5'){
          if(oc % 2 == 0 && occ[4] == 0){
            document.getElementById('c5').style.display = 'block';
            oc = oc + 1;
          } else if(occ[4] == 0) {
            document.getElementById('r5').style.display = 'block';
            oc = oc + 1;
          }
          occ[4] = 1;
          //oc = oc + 1;
        } else if(id == 'box6'){
          if(oc % 2 == 0  && occ[5] == 0){
            document.getElementById('c6').style.display = 'block';
            oc = oc + 1;
          } else if(occ[5] == 0) {
            document.getElementById('r6').style.display = 'block';
            oc = oc + 1;
          }
          occ[5] = 1;
          //oc = oc + 1;
        } else if(id == 'box7'){
          if(oc % 2 == 0 && occ[6] == 0){
            document.getElementById('c7').style.display = 'block';
            oc = oc + 1;
          } else if(occ[6] == 0) {
            document.getElementById('r7').style.display = 'block';
            oc = oc + 1;
          }
          occ[6] = 1;
          //oc = oc + 1;
        } else if(id == 'box8'){
          if(oc % 2 == 0  && occ[7] == 0){
            document.getElementById('c8').style.display = 'block';
            oc = oc + 1;
          } else if(occ[7] == 0) {
            document.getElementById('r8').style.display = 'block';
            oc = oc + 1;
          }
          occ[7] = 1;
          //oc = oc + 1;
        } else if(id == 'box9'){
          if(oc % 2 == 0  && occ[8] == 0){
            document.getElementById('c9').style.display = 'block';
            oc = oc + 1;
          } else if(occ[8] == 0) {
            document.getElementById('r9').style.display = 'block';
            oc = oc + 1;
          }
          occ[8] = 1;
          //oc = oc + 1;
        }
        } 
      });
      //document.write("id = ",id);
      

      /*document.getElementById(var).onclick = function(e) {
        if(oc % 2 == 0){
          $('#box').prepand('<img src="images/cross.png">');
        } else {
          $('#box').prepand('<img src="images/round.png">'); 
        }
        oc = oc + 1;
      }*/
    </script>
    



    <footer>
      <p>&copy; Teddy Company, Inc. 2017</p>
    </footer>
  </body>
</html>