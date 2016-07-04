<?php
session_start();
$_SESSION['loginUser'] = array();
session_destroy();
//转向登陆首页
header("location:index.php");
?>
