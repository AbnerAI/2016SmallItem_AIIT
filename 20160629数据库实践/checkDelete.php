<?php
$conn = new mysqli("localhost", "root", "", "work20160629");
//2 设置操作数据库时使用的字符编码
$conn -> query("set names utf8");
//3 获得处理对象   $stmt大厨
$stmt = $conn -> stmt_init();
//4 预处理的过程    ?占位
$sql = "delete from userList where mId=?";
$stmt -> prepare($sql);
$stmt -> bind_param("i", $id);
$id = $_GET['empId'];
$stmt -> execute();
header("location:index.php");
 ?>
