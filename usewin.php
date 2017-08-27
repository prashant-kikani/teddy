<?php
try{
	session_start();
	if(isset($_SESSION["usewin"])){
	
$db = new PDO('mysql:host=127.0.0.1;dbname=teddydb','root','');
//echo "Connected...";
//echo "hiiii";
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$uname = $_SESSION['name']; 
$qq = $db->query("select ticp from users where name = '$uname'");
$p = $qq -> fetch(PDO::FETCH_OBJ);
$p = $p->ticp + 1;
$qq1 = $db->query("select tichi from users where name='$uname'");
$phi = $qq1 -> fetch(PDO::FETCH_OBJ);
$phi = $phi->tichi + 1;
$q = $db->query("update users set ticp=$p where name='$uname'");
$q1 = $db->query("update users set tichi=$phi where name='$uname'");
session_start();
unset($_SESSION["usewin"]);
$_SESSION["usewin"] = "";
if(isset($_SESSION["usewin"])){
	header("location: about.php");
}
header("location: playtic.php");


}
 else {
	
	header("location: playtic.php");
}
}
catch(PDOException $e) {
  echo $e->getMessage();
  die();
}
?>


$db = new PDO('mysql:host=localhost;dbname=id2489888_teddydb','id2489888_root','987654321');