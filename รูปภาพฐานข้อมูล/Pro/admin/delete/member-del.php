<?php
	include'../../connect_db/connect_db.php'; //เชื่อมต่อฐานข้อมูล

	$id = $_GET['id'];

	$sql = "DELETE FROM member
			WHERE id_Mb = '$id'";
	$conn->query($sql);
	echo"<script type='text/javascript'>window.location='../member.php';</script>";

	$conn->close();
?>