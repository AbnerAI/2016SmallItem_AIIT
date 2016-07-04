<?php
session_start();
$DefaultFriend = $_SESSION['Friend'];
global $friendKey;
$user = $_SESSION['Default'];
foreach ($user as $key => $value) {
	if ($value['uName'] == $_SESSION['loginUser']) {
		$friendKey = $value['connectionKey'];
		break;
	}
}
//获取信息
$name = $_GET['fname'];
$sex = $_GET['fsex'];
$tel = $_GET['ftel'];
$address = $_GET['fadress'];
$mobile = $_GET['fmobile'];
$companyname = $_GET['fcompanyname'];
$companytel = $_GET['fcompanytel'];
$companyadress = $_GET['fcompanyaddress'];
$connection = $_GET['fconnection'];
//添加
$friend = array("connectionKey" => $friendKey, "uName" => "$name", "fSex" => "$sex", "fTel" => "$tel", "fAdress" => "$address", "fMobile" => "$mobile", "fCompanyName" => "$companyname", "fCompanyTel" => "$companytel", "fCompanyAddress" => "$companyadress", "connection" => "$connection");
$DefaultFriend[count($DefaultFriend)] = $friend;
$_SESSION['Friend'] = $DefaultFriend;
header("location:LoginState.php");
?>