<!--
作者：nux_sphen@163.com
时间：2016-07-04
描述：这里是登陆成功状态
-->
<?php
session_start();
if (isset($_SESSION['loginUser'])) {
	echo "欢迎您" . $_SESSION['loginUser'];
} else {
	echo "请您登陆";
}
?>
<html>
	<head>
		<meta name="" charset="utf-8" content=""/>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<script type="text/javascript">function db(th) {
	var n = th.id;
	var l = "updatefriend.php?nn=" + n;
	window.location.href = l;
}
function denglu(){
	window.location.href = "index.php";
}

function addFriend() {
	window.location.href = "addFriend.php";
}</script>
	</head>
	<body>
		<form action="checkExit.php" method="post">
			<?php
			if (isset($_SESSION['loginUser'])) {
				echo '<input type="submit" value="退出"/>';
			} else {
				echo '<input type="button" onclick="denglu()" value="登录"/>';
			}
			?>
			<body>
				<div id="frame">
					<div id="header">
						<a>
							<a href="family.php?name=家人">
								家人
							</a>
						</a>
						<a>
							<a href="family.php?name=领导">
								领导
							</a>
							<a>
								<a href="family.php?name=师长">
									师长
								</a>
								<a>
									<a href="family.php?name=朋友">
										朋友
									</a>
									<a>
										<a href="family.php?name=同学">
											同学
										</a>
										<a>
											<a href="family.php?name=同事">
												同事
											</a>
					</div>
					<div id="contentState">
						<!--
						作者：nux_sphen@163.com
						时间：2016-07-04
						描述：显示我的相关联系人
						-->
						<div id="MyConnection" style="width: 300px;margin: 0 auto;">
							<table border="1" cellspacing="" cellpadding="">
								<tr>
									<td>
										<font color="red">姓名</font>
									</td>
									<td>
										<font color="red">性别</font>
									</td>
									<td>
										<font color="red">电话</font>
									</td>
									<td>
										<font color="red">手机</font>
									</td>
									<td>
										<font color="red">操作</font>
									</td>
								</tr>
								<?php
								//首先获取这个朋友钥匙
								if (isset($_SESSION['loginUser'])) {
									global $friendKey;
									$user = $_SESSION['Default'];
									foreach ($user as $key => $value) {
										if ($value['uName'] == $_SESSION['loginUser']) {
											$friendKey = $value['connectionKey'];
											break;
										}
									}
									$userFriend = $_SESSION['Friend'];
									foreach ($userFriend as $key => $friend) {
										if ($friend['connectionKey'] == $friendKey) {
											//										$_SESSION['del'] = $friend['uName'];
											echo '<tr ondblclick="db(this);" id=' . $friend['uName'] . '><td>' . $friend['uName'] . '</td>';
											echo '<td>' . $friend['fSex'] . '</td>';
											echo '<<td>' . $friend['fTel'] . '</td>';
											echo '<td>' . $friend['fMobile'] . '</td>';
											echo '<td> <a href="deletefriend.php?name = ' . $friend['uName'] . '">删除</a></td>';
											echo '</tr>';
										}
									}
								}
								?>
							</table>
						</div>
					</div>
					<div id="bottom">
						<a>
							主页
						</a>
						<a>
							收藏
						</a>
						<a  onmouseover="addFriend()">
							添加
						</a>
						<a>
							查询
						</a>
					</div>
				</div>
			</body>
		</form>
	</body>
</html>