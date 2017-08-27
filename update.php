<?php
try{
$db = new PDO('mysql:host=127.0.0.1;dbname=teddydb','root','');
//echo "Connected...<br/>";
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

session_start();
$u = $_SESSION['name'];
if(isset($_POST['nname'])) {
	if($_POST['nname'] == ''){
		header("location: profile.php");
	} else {
$nu = $_POST['nname'];
$q2=$db->prepare("select name from users where name=?");		//for the uniqueness of the id.
$q2->execute(array($nu));
if($q2->rowcount() >= 1) {
	header("location: profile.php?msg=#");
} else {
	$q = $db->query("update users set name='$nu' where name='$u'");
	$_SESSION['name'] = $nu;
	header("location: profile.php?msg1=#");
}
}
}
if(isset($_POST['npwd'])){
	if($_POST['npwd'] == ''){
		header("location: profile.php");
	} else{
	$np = $_POST['npwd'];
	$q = $db->query("update users set pwd='$np' where name='$u'");
	header("location: profile.php?msg2=#");}
}
















}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}


?>