<?php
session_start();
?>
<html>
	<head>
		<meta name=""charset="utf-8" content=""/>
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
					<form action="checkAddFriend.php" method="get">
						<table border="0" cellspacing="" cellpadding="">
							<tr>
								<td>
									姓名：
								</td>
								<td>
									<input type="text" name="fname" id="" value="" />
								</td>
								<td>
									性别：
								</td>
								<td>
									<input type="text" name="fsex" id="" value="" />
								</td>
							</tr>
							<tr>
								<td>
									电话：
								</td>
								<td>
									<input type="text" name="ftel" id="" value="" />
								</td>
								<td>
									地址：
								</td>
								<td>
									<input type="text" name="fadress" id="" value="" />
								</td>
							</tr>
							<tr>
								<td>
									手机：
								</td>
								<td>
									<input type="text" name="fmobile" id="" value="" />
								</td>
								<td>
									公司名称：
								</td>
								<td>
									<input type="text" name="fcompanyname" id="" value="" />
								</td>
							</tr>
							<tr>
								<td>
									公司电话：
								</td>
								<td>
									<input type="text" name="fcompanytel" id="" value="" />
								</td>
								<td>
									公司地址：
								</td>
								<td>
									<input type="text" name="fcompanyaddress" id="" value="" />
								</td>
							</tr>
							<tr>
								<td>
									关系：
								</td>
								<td>
									<input type="text" name="fconnection" id="" value="" />
								</td>
							</tr>
							<tr>
								<td colspan="2" align= 'center'>
									<input type="submit" name="" id="" value="提交" />
								</td>
								<td colspan="2" align= 'center'>
									<input type="reset" name="" id="" value="重置" />
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
				<a href="LoginState.php">
					查询
				</a>
			</div>
		</div>
	</body>
</html>