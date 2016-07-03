<?php
$conn = new mysqli("localhost", "root", "", "test");
if ($conn) {
	echo "ok";
} else {
	echo "no" . mysql_error();
}
?>
