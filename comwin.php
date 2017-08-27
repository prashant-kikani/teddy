<?php
try{
$db = new PDO('mysql:host=127.0.0.1;dbname=teddydb','root','');
//echo "Connected...";
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
session_start();
$uname = $_SESSION['name'];
$qq = $db->query("select ticp from users where name = '$uname'");
$p = $qq -> fetch(PDO::FETCH_OBJ);
$p = $p->ticp + 1;
$q = $db->query("update users set ticp=$p where name='$uname'");
header("location: playtic.php");
}
catch(PDOException $e) {
  echo $e->getMessage();
  die();
}
?>