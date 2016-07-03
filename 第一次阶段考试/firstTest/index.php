<meta name="" charset="utf-8" content=""/>
<?php
$basket[0] = array("bId" => "W001", "bName" => "李雷", "bSex" => "男", "bBorn" => "中国北京", "bBirth" => "1993-03-12");
$basket[1] = array("bId" => "W002", "bName" => "林涛", "bSex" => "男", "bBorn" => "江苏南京", "bBirth" => "1995-05-05");
$basket[2] = array("bId" => "W003", "bName" => "韩梅梅", "bSex" => "女", "bBorn" => "安徽合肥", "bBirth" => "1992-06-01");
$basket[3] = array("bId" => "W004", "bName" => "Lucy", "bSex" => "女", "bBorn" => "美国华盛顿", "bBirth" => "1994-07-08");
$newBasket = array("bId" => "W005", "bName" => "Lily", "bSex" => "女", "bBorn" => "美国华盛顿", "bBirth" => "1994-07-08");
//1.一名新员工加入
$basket[count($basket)] = $newBasket;
echo "新增加了一名员工<br /><br />";
echo '<table border="" cellspacing="" cellpadding="">
			<tr>
				<td colspan = "5"align="center">员工信息</td>
			</tr>
			<tr>
			<td>bId</td>
			<td>bName</td>
			<td>bSex</td>
			<td>bBorn</td>
			<td>bBirth</td>
			</tr>';
echo '<tr>
			<td>' . $basket[count($basket) - 1]["bId"] . '</td>
			<td>' . $basket[count($basket) - 1]["bName"] . '</td>
			<td>' . $basket[count($basket) - 1]["bSex"] . '</td>
			<td>' . $basket[count($basket) - 1]["bBorn"] . '</td>
			<td>' . $basket[count($basket) - 1]["bBirth"] . '</td>
		</tr>';
echo '</table>';
echo "<hr/>";
//2.排序  队员信息
echo '<table border="" cellspacing="" cellpadding="">
			<tr>
				<td colspan = "5"align="center">员工信息</td>
			</tr>
			<tr>
			<td>bId</td>
			<td>bName</td>
			<td>bSex</td>
			<td>bBorn</td>
			<td>bBirth</td>
			</tr>';
//	----------------------------------------解法一-----------------------------------------------
$arrSort = array(strtotime($basket[0]["bBirth"]), strtotime($basket[1]["bBirth"]), strtotime($basket[2]["bBirth"]), strtotime($basket[3]["bBirth"]));
//strtotime 数据越大  代表年龄越小.  所以反向排序
rsort($arrSort);
echo "按生日（年龄）从小到大排序，结果为:<br /><br />";
for ($index = 0; $index < count($arrSort); $index++) {
	foreach ($basket as $key => $value) {
		if (strtotime($value["bBirth"]) == $arrSort[$index]) {
			echo '<tr>
			<td>' . $value["bId"] . '</td>
			<td>' . $value["bName"] . '</td>
			<td>' . $value["bSex"] . '</td>
			<td>' . $value["bBorn"] . '</td>
			<td>' . $value["bBirth"] . '</td>
		</tr>';

		}
	}
}
echo '</table>';
//	----------------------------------------解法二-----------------------------------------------
//利用内置函数array_multisort(array1,sorting order,sorting type,array2,array3...)这种方法直接调用，这里不做编码

echo "<hr/>";
//3.修改信息
echo '<table border="" cellspacing="" cellpadding="">
			<tr>
				<td colspan = "5"align="center">员工信息</td>
			</tr>
			<tr>
			<td>bId</td>
			<td>bName</td>
			<td>bSex</td>
			<td>bBorn</td>
			<td>bBirth</td>
			</tr>';
foreach ($basket as $key=>$value) {
	if ($value["bId"] == "W001") {
		$value["bName"] = "李磊";
		$basket[$key]["bName"] =  "李磊";
		echo "修改姓名后信息如下<br/><br />";
		echo '<tr>
			<td>' . $value["bId"] . '</td>
			<td>' . $value["bName"] . '</td>
			<td>' . $value["bSex"] . '</td>
			<td>' . $value["bBorn"] . '</td>
			<td>' . $value["bBirth"] . '</td>
		</tr>';
		break;
	}
}
echo '</table>';
echo "<hr/>";
//4 清除梅梅,列出所有球员信息
echo '<table border="" cellspacing="" cellpadding="">
			<tr>
				<td colspan = "5"align="center">员工信息</td>
			</tr>
			<tr>
			<td>bId</td>
			<td>bName</td>
			<td>bSex</td>
			<td>bBorn</td>
			<td>bBirth</td>
			</tr>';
foreach ($basket as $key => $value) {
	if ($value["bName"] == "韩梅梅") {
		unset($basket[$key]);
		echo "清除梅梅,列出所有球员信息如下<br/><br />";
	}

}
foreach ($basket as $key => $value) {
	echo '<tr>
			<td>' . $value["bId"] . '</td>
			<td>' . $value["bName"] . '</td>
			<td>' . $value["bSex"] . '</td>
			<td>' . $value["bBorn"] . '</td>
			<td>' . $value["bBirth"] . '</td>
		</tr>';
}
echo "</table>";
echo "<hr/>";

//5 年龄问题
echo '<table border="" cellspacing="" cellpadding="">
			<tr>
				<td colspan = "5"align="center">员工信息</td>
			</tr>
			<tr>
			<td>bId</td>
			<td>bName</td>
			<td>bSex</td>
			<td>bBorn</td>
			<td>bBirth</td>
			</tr>';
//	----------------------------------------解法一-----------------------------------------------
$arrSort1 = array(strtotime($basket[0]["bBirth"]), strtotime($basket[1]["bBirth"]), strtotime($basket[3]["bBirth"]));
$flag = 0;
//可以及时退出程序，避免不必要的循环
foreach ($basket as $key => $value) {
	if (strtotime($value["bBirth"]) == $arrSort[count($arrSort1) - 1]) {
		echo "年龄最大的球员信息如下<br /><br />";
		$flag++;
		echo '<tr>
			<td>' . $value["bId"] . '</td>
			<td>' . $value["bName"] . '</td>
			<td>' . $value["bSex"] . '</td>
			<td>' . $value["bBorn"] . '</td>
			<td>' . $value["bBirth"] . '</td>
		</tr>';
		echo '</table>';
		echo '<table border="" cellspacing="" cellpadding="">
			<tr>
				<td colspan = "5"align="center">员工信息</td>
			</tr>
			<tr>
			<td>bId</td>
			<td>bName</td>
			<td>bSex</td>
			<td>bBorn</td>
			<td>bBirth</td>
			</tr>';

	} else if (strtotime($value["bBirth"]) == $arrSort[0]) {
		echo "<br /><br />年龄最小的球员信息如下<br /><br />";
		$flag++;
		echo '<tr>
			<td>' . $value["bId"] . '</td>
			<td>' . $value["bName"] . '</td>
			<td>' . $value["bSex"] . '</td>
			<td>' . $value["bBorn"] . '</td>
			<td>' . $value["bBirth"] . '</td>
		</tr>';
		echo '</table>';
	}

	if ($flag == 2) {
		break;
	}
}
//	----------------------------------------解法二-----------------------------------------------
//利用内置函数array_multisort(array1,sorting order,sorting type,array2,array3...)，这种方法直接调用，这里不做编码
?>