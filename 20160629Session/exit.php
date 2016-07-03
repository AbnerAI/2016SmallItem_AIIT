<meta name="" charset="utf-8"/>
<?php
//启动Session
session_start();
//清空Session
$_SESSION = array();
//销毁Session
session_destroy();
header("Location:index.php");
?>