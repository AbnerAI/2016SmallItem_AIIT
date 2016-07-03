<meta name="" charset="utf-8"/>
<?php
session_start();
$name = $_SESSION['name'];
echo "你好" . $name;
?>
<html>
	<head>
		<title>
			session测试
		</title>
		<script type="text/javascript">function exitSession() {
	window.location.href = "exit.php";
}</script>
	</head>
	<body>
		<input type="button" name="" id="" value="退出" onclick="exitSession()"/>
	</body>
</html>