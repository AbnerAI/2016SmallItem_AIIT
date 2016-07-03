<meta name=""  charset="utf-8"/>
<?php
$arr1 = array("1" => "你好", "2" => "我是", "3" => "abner");
$arr2 = array("1" => "你好", "2" => "我是", "3" => "cxx");
$arr3 = array("1" => "你好", "2" => "我是", "3" => "EsLion");
$arr4 = array($arr1, $arr2, $arr3);
foreach ($arr4 as $arr0) {
	echo $arr4['0']['1'];
	echo $arr4[0]['2'];
	echo $arr4[0]['3'] . "<br/>";
}
echo "<Br/>" . "请你仔细对比上下两种形式" . "<br />";
foreach ($arr4 as $arr0) {
	echo $arr0['1'];
	echo $arr0['2'];
	echo $arr0['3'] . "<br/>";
}
?>