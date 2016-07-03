<?php
$name = $_GET['name'];
$pwd = $_GET['pwd'];
session_start();
if ($name == 'abner' && $pwd == '123') {

	$_SESSION['name'] = $name;
	header("Location: test1.php");
} else {
	$_SESSION['msg'] = 'wrong';
	header("location:index.php");
}
?>