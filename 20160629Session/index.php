<html>
	<head>
		<title>
			页面1
		</title>
		<meta name="" charset="utf-8"/>
		<script type="text/javascript">
		</script>
	</head>
	<body>
		<form action="checkLogin.php" method="get">
			姓名
			<input type="text" name="name" id="" value="" />
			<br />
			密码
			<input type="password" name="pwd" id="" value="" />
			<br />
			<input type="submit" name="" id="" value="提交" />
			<?php
			session_start();
			if (isset($_SESSION['msg'])) {
				echo $_SESSION['msg'];
			}
			?>
		</form>
	</body>
</html>
