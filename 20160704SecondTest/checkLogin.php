<script type="text/javascript">function denglu() {
	window.location.href = "index.php";
}</script>
<meta name="" charset="utf-8" content=""/>
<?php
session_start();
$userDefaultFriend = $_SESSION['Default'];
if (isset($_GET['username'])) {
	$name = $_GET['username'];
	$pwd = $_GET['userpwd'];
	//判断index传过来的用户是否存在
	$flag = 0;
	//标志位
	foreach ($userDefaultFriend as $key => $user) {
		if ($user['uName'] == $name) {
			$flag = 1;
			if ($user['uPwd'] == $pwd) {
				$flag = 2;
				//登陆成功
				$_SESSION['loginUser'] = $name;
			}
		}
	}
	if ($flag == 0) {
		echo '<script type="text/javascript">
					alert("用户名不存在");
</script>
';

	} else if ($flag == 1) {
		echo '<script type="text/javascript">
					alert("用户密码错误");
</script>';

	} else if ($flag == 2) {
		header("location:LoginState.php");
	}
} else {
	echo "请您登陆";
	echo '<input type="button" onclick="denglu()" value="登录"/>';

}
?>
