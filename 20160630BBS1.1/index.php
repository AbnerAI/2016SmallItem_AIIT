<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>
			讯飞语音
		</title>
		<link type="text/css" rel="stylesheet" href="css/index.css" />
		<style type="text/css">body {
	background-image: url(imags/main_bg.jpg);
	background-repeat: repeat-x;
	position: absolute;
	z-index: -4;
	background-color: #FFFFFF;
}</style>
	</head>
	<body>
		<div id="kuangjia">
			<div id="logo">
				<div id="logo_1">
					<a href="#">
						<img src="imags/logo.jpg" style="width:100%;height:100% ;margin-top:0px;" />
					</a>
				</div>
				<div class="logo_2">
					<table>
						<tr>
							<td>
								账号
								<input type="text" size="20" maxlength="15" name="shuru" value="" placeholder="用户名/email" />
								<input type="checkbox" name="denglu" />
								自动登录 找回密码
							</td>
						</tr>
						<tr>
							<td>
								密码
								<input type="password" size="20" maxlength="15" name="mima" value="" />
								&nbsp
								<input type="submit" name="denglu" value="登录" type="margin-left:10px" />
								<a href="#" id="zhuce">
									&nbsp  立即注册
								</a>
							</td>
						</tr>
					</table>
				</div>
			</div>
			<div id="caidan">
				<table>
					<tr>
						<td>
							<a href="#">
								首页
							</a>
						</td>
						<td>
							<a href="#">
								讯飞输入法
							</a>
						</td>
						<td>
							<a href="#">
								讯飞语点
							</a>
						</td>
						<td>
							<a href="#">
								灵犀
							</a>
						</td>
						<td>
							<a href="#">
								开心熊宝
							</a>
						</td>
					</tr>
				</table>
			</div>
			<div id="neirong">
				<!--
				作者：nux_sphen@163.com
				时间：2016-06-30
				描述：下面需要内嵌php代码，连接数据库获取数据
				-->
				<table id="taolun" border="0">
					<?php
					//另一种连接数据库的方式
					$con = mysql_connect('localhost', 'root', '');
					mysql_select_db('iflytekbbs', $con);
					mysql_query('set names utf8');
					$result_sec = mysql_query('select * from section');
					while ($row = mysql_fetch_array($result_sec)) {
					}
					?>
					<tr>
						<td style="font-size:30px;" colspan="4">
							<b>
								综合讨论
							</b>
						</td>
					</tr>
					<tr>
						<td rowspan="3" style="padding-left:20px">
							<img src="imags/android.jpg" />
						</td>
						<td>
							<b>Android讨论区</b>
						</td>
						<td rowspan="3" style="padding-left:300px">
							<img src="imags/apple.jpg">
						</td>
						<td>
							Iphone讨论区
						</td>
					</tr>
					<tr>
						<td>
							Android讨论交流区
						</td>
						<td>
							Iphone讨论交流区
						</td>
					</tr>
					<tr>
						<td>
							TTS听书精品...2小时前，永远是故乡
						</td>
						<td>
							Iphone4s快捷键...3小时前 零零七
						</td>
					</tr>
					<tr>
						<td rowspan="3" style="padding-left:20px">
							<img src="imags/android.jpg" />
						</td>
						<td>
							<b>Android讨论区</b>
						</td>
						<td rowspan="3" style="padding-left:300px">
							<img src="imags/apple.jpg">
						</td>
						<td>
							Iphone讨论区
						</td>
					</tr>
					<tr>
						<td>
							Android讨论交流区
						</td>
						<td>
							Iphone讨论交流区
						</td>
					</tr>
					<tr>
						<td>
							TTS听书精品...2小时前，永远是故乡
						</td>
						<td>
							Iphone4s快捷键...3小时前 零零七
						</td>
					</tr>
					<tr>
						<td rowspan="3" style="padding-left:20px">
							<img src="imags/android.jpg" />
						</td>
						<td>
							<b>Android讨论区</b>
						</td>
						<td rowspan="3" style="padding-left:300px">
							<img src="imags/apple.jpg">
						</td>
						<td>
							Iphone讨论区
						</td>
					</tr>
					<tr>
						<td>
							Android讨论交流区
						</td>
						<td>
							Iphone讨论交流区
						</td>
					</tr>
					<tr>
						<td>
							TTS听书精品...2小时前，永远是故乡
						</td>
						<td>
							Iphone4s快捷键...3小时前 零零七
						</td>
					</tr>
				</table>
			</div>
			<div id="lianjie">
				<table border="0">
					<tr>
						<td>
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
					</tr>
					<tr>
						<td>
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
						<td style="padding-left:1px">
							<a href="#">
								科大讯飞
							</a>
						</td>
					</tr>
				</table>
			</div>
			<div id="fuwu">
				<table>
					<tr>
						<td style="padding-left:420px" rowspan="2">
							Powered by Discuz! X 3.1
						</td>
						<td style="padding-left:380px">
							手机版|Archiver|联系我们|小黑屋|讯飞语音云|()
						</td>
					</tr>
					<tr>
						<td style="padding-left:320px">
							GMT+8,2014-5-14 17:05,This page is cacbed at 17:05:50
						</td>
					</tr>
				</table>
			</div>
		</div>
	</body>
</html>
