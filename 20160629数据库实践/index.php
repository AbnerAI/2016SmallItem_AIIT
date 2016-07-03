<html>
	<head>
		<meta name="" charset="utf-8" content=""/>
		<title>
			20160629作业
		</title>
	</head>
	<body>
		<form action="" method="post">
			<table border="" cellspacing="" cellpadding="">
				<tr>
					<td colspan="6" align="center">
						员工列表
					</td>
				</tr>
				<tr>
					<td>
						工号
					</td>
					<td>
						姓名
					</td>
					<td>
						年龄
					</td>
					<td>
						性别
					</td>
					<td>
						部门
					</td>
					<td>
						操作
					</td>
				</tr>
				<?php
				//连接数据库并且选择数据库
				$conn = new mysqli("localhost", "root", "", "work20160629");
				$conn -> query("set names utf8");
				//3 获得处理对象   $stmt大厨
				$stmt = $conn -> stmt_init();
				$sql = "select * from userList";
				$stmt -> prepare($sql);
				$stmt -> execute();
				//7 绑定结果集
				$stmt -> bind_result($id, $empname, $empAge, $sex, $dept);
				//8 遍历结果集
				while ($stmt -> fetch()) {
					echo "<tr><td>$id</td><td>$empname</td><td>$empAge</td><td>";

					if ($sex == 0) {
						echo '女';
					} else if ($sex == 1) {
						echo '男';
					}
					echo "</td><td>$dept</td><td><a href='updateEmp.php?empId=$id'>修改</a> &nbsp;<a href='checkDelete.php?empId=$id'>删除</a></td></tr>";
				}
				?>
				<tr>
					<td colspan="6" align="center">
						<a href="addUser.php">
							添加新员工
						</a>
					</td>
				</tr>
			</table>
		</form>
	</body>
</html>