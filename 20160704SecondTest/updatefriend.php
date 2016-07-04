<meta name=""charset="utf-8" content=""/>
<?php
session_start();
if(isset($_GET['nn'])){
$del = $_GET['nn'];
$_SESSION['del']  =$del;
$DefaultFriend = $_SESSION['Friend'];
foreach($DefaultFriend as $key=>$friend)
{
if($friend['uName']==$del)
{
}
?>
<html>
	<head>
		<title>
		</title>
		<link rel="stylesheet" type="text/css" href="css/index.css"/>
	</head>
	<body>
		<div id="frame">
			<div id="header">
				<a>
					家人
				</a>
				<a>
					领导
				</a>
				<a>
					师长
				</a>
				<a>
					朋友
				</a>
				<a>
					同学
				</a>
				<a>
					同事
				</a>
			</div>
			<div id="content">
				<div id="add">
					<form action="checkUpde.php" method="get">
						<table border="0" cellspacing="" cellpadding="">
							<tr>
								<td>
									姓名：
								</td>
								<td>
									<input type="text" name="fname" id="" value="<?php echo $friend['uName'] ?>" />
								</td>
								<td>
									性别：
								</td>
								<td>
									<input type="text" name="fsex" id="" value="<?php echo $friend['fSex'] ?>" />
								</td>
							</tr>
							<tr>
								<td>
									电话：
								</td>
								<td>
									<input type="text" name="ftel" id="" value="<?php echo $friend['fTel'] ?>" />
								</td>
								<td>
									地址：
								</td>
								<td>
									<input type="text" name="fadress" id="" value="<?php echo $friend['fAdress'] ?>" />
								</td>
							</tr>
							<tr>
								<td>
									手机：
								</td>
								<td>
									<input type="text" name="fmobile" id="" value="<?php echo $friend['fMobile'] ?>" />
								</td>
								<td>
									公司名称：
								</td>
								<td>
									<input type="text" name="fcompanyname" id="" value="<?php echo $friend['fCompanyName'] ?>" />
								</td>
							</tr>
							<tr>
								<td>
									公司电话：
								</td>
								<td>
									<input type="text" name="fcompanytel" id="" value="<?php echo $friend['fCompanyTel'] ?>" />
								</td>
								<td>
									公司地址：
								</td>
								<td>
									<input type="text" name="fcompanyaddress" id="" value="<?php echo $friend['fCompanyAddress'] ?>" />
								</td>
							</tr>
							<tr>
								<td>
									关系：
								</td>
								<td>
									<input type="text" name="fconnection" id="" value="<?php echo $friend['connection'] ?>" />
								</td>
							</tr>
							<tr>
								<td colspan="2" align= 'center'>
									<input type="submit" name="" id="" value="更新" />
								</td>
							</tr>
						</table>
						<input type="submit" value=""/>
					</form>
				</div>
			</div>
			<div id="bottom">
				<a>
					主页
				</a>
				<a>
					收藏
				</a>
				<a>
					添加
				</a>
				<a>
					<a href="LoginState.php">
						查询
					</a>
				</a>
			</div>
		</div>
	</body>
</html>
<?php
}
}
?>
<script type="text/javascript">function denglu() {
	window.location.href = "index.php";
}</script>
<?php
if (isset($_GET['nn'])) {
} else {
	echo "请您登录";
	echo '<input type="button" onclick="denglu()" value="登录"/>';
}
?>