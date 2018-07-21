<?php
	session_start();

	$my_host = "localhost";
	$my_user = "root";
	$my_password = "";
	$my_db = "projit";

	$conn = mysqli_connect($my_host, $my_user, $my_password, $my_db);
	$conn->set_charset("utf8");

	// เช็คการเชื่อต่อฐานข้อมูล
	if (mysqli_connect_errno()) {
		echo "ไม่สามารถเชื่อต่อฐานข้อมูลได้" . mysqli_connect_error();
	}
?>