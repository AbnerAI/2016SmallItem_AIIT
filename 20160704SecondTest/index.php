<meta name="" charset="utf-8" content=""/>
<?php
session_start();
//设置一个默认用户
$userDefault = array("uId" => "S001", "uName" => "admin", "uPwd" => "123", "connectionKey" => "S001FriendKey");
$userDefault1 = array("uId" => "S002", "uName" => "abner", "uPwd" => "123", "connectionKey" => "S002FriendKey");
//connectionKey 唯一标识朋友关系的
//设置默认的联系人，方便第一次运行系统做显示联系人的测试
$DefaultFriend1 = array("connectionKey" => "S001FriendKey", "uName" => "张三", "fSex" => "男", "fTel" => "16899888", "fAdress" => "银河班级", "fMobile" => "88888888", "fCompanyName" => "科大讯飞", "fCompanyTel" => "1236", "fCompanyAddress" => "鬼知道", "connection" => "领导", "uPwd" => "");
$DefaultFriend2 = array("connectionKey" => "S001FriendKey", "uName" => "李斯", "fSex" => "女", "fTel" => "16899888", "fAdress" => "银河班级", "fMobile" => "88888888", "fCompanyName" => "讯飞", "fCompanyTel" => "1236", "fCompanyAddress" => "知道", "connection" => "领导", "uPwd" => "");
$DefaultFriend3 = array("connectionKey" => "S001FriendKey", "uName" => "7斯", "fSex" => "女", "fTel" => "16899888", "fAdress" => "银河班级", "fMobile" => "88888888", "fCompanyName" => "讯飞", "fCompanyTel" => "1236", "fCompanyAddress" => "知道", "connection" => "家人", "uPwd" => "");
$DefaultFriend4 = array("connectionKey" => "S002FriendKey", "uName" => "李5斯", "fSex" => "女", "fTel" => "16899888", "fAdress" => "银河班级", "fMobile" => "88888888", "fCompanyName" => "讯飞", "fCompanyTel" => "1236", "fCompanyAddress" => "知道", "connection" => "家人", "uPwd" => "");
$userDefault = array($userDefault);
$DefaultFriend = array($DefaultFriend1, $DefaultFriend2, $DefaultFriend3, $DefaultFriend4);
//设置一个默认的session
$_SESSION['Default'] = $userDefault;
$_SESSION['Friend'] = $DefaultFriend;
 ?>
<html>
	<head>
		<meta name="" charset="utf-8" content=""/>
		<title>
			20160704SecondTest
		</title>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
		<script type="text/javascript">//验证是否输入用户名和密码
function checkSubmit() {
	var username = document.getElementById('username').value;
	var userpwd = document.getElementById('userpwd').value;
	if (username.length == 0) {
		alert('请输入用户名！');
		return false;
	} else if (userpwd.length == 0) {
		alert('请输入密码！');
		return false;
	}
	return true;
}</script>
	</head>
	<?php
include 'includes/header.php'
	?>
	<div id="content">
		<div id="login">
			<form action="checkLogin.php" method="get" onsubmit="return checkSubmit()">
				<table border="0" cellspacing="" cellpadding="">
					<tr>
						<td>
							用户名：
						</td>
						<td>
							<input type="text" name="username" id="username" value="" />
						</td>
					</tr>
					<tr>
						<td>
							密码：
						</td>
						<td>
							<input type="password" name="userpwd" id="userpwd" value="" />
						</td>
					</tr>
					<tr>
						<td>
							<input type="submit" name="" id="" value="提交" />
						</td>
						<td>
							<input type="reset" name="" id="" value="重置" />
						</td>
					</tr>
				</table>
			</form>
		</div>
	</div>
	<?php
include 'includes/bottom.php'
?>
</html>