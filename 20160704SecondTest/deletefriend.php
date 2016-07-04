<?php
session_start();
$userDefaultFriend = $_SESSION['Friend'];
$name = $_GET['name'];

//开始删除
$i = 0;
for ($i = 0; $i < count($userDefaultFriend); $i++) {
	if ($userDefaultFriend[$i]["uName"] == $name) {
		break;
	}
}
for ($j = $i; $j < count($userDefaultFriend) - 1; $j++) {
	$userDefaultFriend[$j] = $userDefaultFriend[$j + 1];
}
array_pop($userDefaultFriend);
$_SESSION["Friend"] = $userDefaultFriend;
header("location:LoginState.php");
?>