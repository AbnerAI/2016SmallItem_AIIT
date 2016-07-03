<meta name="" charset="utf-8" content=""/>
<?php
$emp1 = array("empname" => "Cxx", "workyear" => "5", "basesalary" => 5000, "Bonus" => 1000);
$emp2 = array("empname" => "Abner", "workyear" => "2", "basesalary" => 4000, "Bonus" => 500);
$emp3 = array("empname" => "Lion", "workyear" => "3", "basesalary" => 4000, "Bonus" => 500);
$emps = array($emp1, $emp2, $emp3);
$salary = array();
for ($i = 0; $i < count($emps); $i++) {
	$salary["$i"] = $emps["$i"]["basesalary"] + $emps["$i"]["workyear"] * $emps["$i"]["Bonus"];
}
echo "<table border='1'>";
echo "<tr><th>姓名</th><th>工资</th></tr>";
foreach ($emps as $key => $emp) {
	echo "<tr>";
	echo "<td>" . $emp["empname"] . "</td><td>" . $salary[$key] . "</td>";
	echo "</tr>";
}
echo "</table>";
?>
