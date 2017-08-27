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
  <!--link rel="stylesheet" type="text/css" href="sidebar.css"-->
  <title>Teddy</title>
  <style type="text/css">

  </style>

  <script type="text/javascript">
    function validate(){
      if(validatename() == false){
        return false;
      }else if(validatepwd() == false){
        return false;
      }
    }

    function validatename(){
      var name=document.getElementById('name').value;
      if(name == ''){
       document.getElementById('fnameError').innerHTML="Please enter first name";
        return false;
      } else { 
        document.getElementById('fnameError').innerHTML="";
         return true;
      }
    }
    
    function validatepwd(){
               var pass=document.getElementById('pwd').value;
               if(pass == ''){
                   document.getElementById('passwordError').innerHTML="Password should be at least 8 characters long";
                   return false;
               }else if(pass.length < 8){
                   document.getElementById('passwordError').innerHTML="Password should be at least 8 characters long";
                   return false;
               }else{
                   document.getElementById('passwordError').innerHTML="";
                   return true;
               }
    }                                






  </script>



</head>
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
            <li><a href="leaders.php">LeaderBoard</a></li>
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
    
</html>