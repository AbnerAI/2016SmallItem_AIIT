<meta name=""charset="utf-8" content=""/>
<?php
if (isset($_GET["id"])) {
	//1 获得数据库连接对象
	$conn = new mysqli("localhost", "root", "", "work20160629");
	if ($conn) {
		//2 设置操作数据库时使用的字符编码
		$conn -> query("set names utf8");
		//3 获得处理对象   $stmt大厨
		$stmt = $conn -> stmt_init();
		//4 预处理的过程    ?占位
		$sql = "update userList set mId = ?,mName=?,mAge = ?,mSex = ?,mDept = ? where mId = ?";
		$stmt -> prepare($sql);
		$stmt -> bind_param("isiisi", $id, $name, $age, $sex, $dept,$id);
		$id = $_GET['id'];
		$name = $_GET['name'];
		$age = $_GET['age'];
		$checksex = $_GET['sex'];
		if ($checksex == "男") {
			$sex = 1;
		} else {
			$sex = 0;
		}
		$dept = $_GET['dept'];
		$stmt -> execute();
		header("location:index.php");
	} else {
		echo "数据库连接错误";
	}

}
?>