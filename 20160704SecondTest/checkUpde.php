<?php
session_start();
$DefaultFriend = $_SESSION['Friend'];
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
foreach ($DefaultFriend as $key => $value) {
	if ($value['uName'] == $_SESSION['del']) {
		$DefaultFriend[$key]['uName'] = $name;
		$DefaultFriend[$key]['fSex'] = $sex;
		$DefaultFriend[$key]['fTel'] = $tel;
		$DefaultFriend[$key]['fAdress'] = $address;
		$DefaultFriend[$key]['fMobile'] = $mobile;
		$DefaultFriend[$key]['fCompanyName'] = $companyname;
		$DefaultFriend[$key]['fCompanyTel'] = $companytel;
		$DefaultFriend[$key]['fCompanyAddress'] = $companyadress;
		$DefaultFriend[$key]['connection'] = $connection;
		break;
	}
}
$_SESSION['Friend'] = $DefaultFriend;
header("location:LoginState.php");
?>
