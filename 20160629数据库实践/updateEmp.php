<meta name="" charset="utf-8" content=""/>
<?php
//1 获得数据库连接对象
$conn = new mysqli("localhost", "root", "", "work20160629");
//2 设置操作数据库时使用的字符编码
$conn -> query("set names utf8");
//3 获得处理对象   $stmt大厨
$stmt = $conn -> stmt_init();
//4 预处理的过程    ?占位
$sql = "select * from userList where mId = ? ";
$stmt -> prepare($sql);
$stmt -> bind_param("i", $id);
$id = $_GET['empId'];
//6 执行
$stmt -> execute();
//7 绑定结果集
$stmt -> bind_result($id, $empname, $empAge, $sex, $dept);
//8 遍历结果集
while ($stmt -> fetch()) {
	echo '<html>
	<head>
		<meta name=""charset="utf-8" content=""/>
		<title>
			add
		</title>
	</head>
	<body>
		<form action="checkUpdate.php" method="get">
			<table border="" cellspacing="" cellpadding="">
				<tr>
					<td align="center" colspan="2">
						添加员工
					</td>
				</tr>
				<tr>
					<td>
						工号
					</td>
					<td>
						<input type="text" name="id" id="" value="' . $id . '" />
					</td>
				</tr>
				<tr>
					<td>
						姓名
					</td>
					<td>
						<input type="text" name="name" id="" value="' . $empname . '" />
					</td>
				</tr>
				<tr>
					<td>
						年龄
					</td>
					<td>
						<input type="text" name="age" id="" value="' . $empAge . '" />
					</td>
				</tr>
				<tr>
					<td>
						性别
					</td>
					<td>
						<input type="radio" name="sex" id="" value="男" ';
	if ($sex == 1) {
		echo 'checked="checked"/>男';
	} else {
		echo '/>男';
	}
	echo '<input type="radio" name="sex" id="" value="女" ';
	if ($sex == 0) {
		echo 'checked="checked"/>女';
	} else {
		echo '/>女';
	}
	echo '</td>
				</tr>
				<tr>
					<td>
						部门
					</td>
					<td>
						<input type="text" name="dept" id="" value="' . $dept . '" />
					</td>
				</tr>
				<tr>
					<td colspan="2" align="center">
						<input type="submit" value="更新员工"/>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>';
}
?>
