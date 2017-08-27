<?php
try{
$db = new PDO('mysql:host=127.0.0.1;dbname=teddydb','root','');
//echo "Connected...<br/>";
$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

$u = $_POST['name'];
$p = $_POST['pwd'];
if(!empty($u) && !empty($p)){
	$q2=$db->prepare("select name from users where name=?");		//for the uniqueness of the id.
	$q2->execute(array($u));
	if($q2->rowcount() >= 1){
		$q1=$db->prepare("select name from users where name=? and pwd=?");		//for the uniqueness of the id.
		$q1->execute(array($u,$p));
		if($q1->rowcount()==1){
			session_start();
			$_SESSION['name']=$u;
			$_SESSION['ok']=$u;
			$qq1 = $db->query("select wel from users where name = '$u'");
			$p1 = $qq1 -> fetch(PDO::FETCH_OBJ);
			$p1 = $p1->wel + 1;
			$q1 = $db->query("update users set wel=$p1 where name='$u'");
			header("location:home.php");
		} else {
			header("location:home.php?msg=#");
		} 
	} else {
		$q=$db->prepare("insert into users(name,pwd) values(?,?)");
		$q->execute(array($u,$p));
		session_start();
		$_SESSION['name']=$u;
		$_SESSION['ok']=$u;
		$qq = $db->query("select wel from users where name = '$u'");
		$p = $qq -> fetch(PDO::FETCH_OBJ);
		$p = $p->wel + 1;
		$q = $db->query("update users set wel=$p where name='$u'");
		header("location:home.php");
	}
	/*$q1=$db->prepare("select name from users where name=? and pwd=?");		//for the uniqueness of the id.
	$q1->execute(array($u,$p));
	if($q1->rowcount()==1){
		session_start();
		$_SESSION['name']=$u;
		$_SESSION['ok']=$u;
		$qq1 = $db->query("select wel from users where name = '$u'");
		$p1 = $qq1 -> fetch(PDO::FETCH_OBJ);
		$p1 = $p1->wel + 1;
		$q1 = $db->query("update users set wel=$p where name='$u'");
		header("location:home.php");
	} else {
		header("location:home.php?msg=#");
	}*/

} else {
	header("location: home.php");
}
}
catch(PDOException $e){
	echo $e->getMessage();
	die();
}


?>