<?php
	include'../../connect_db/connect_db.php'; //เชื่อมต่อฐานข้อมูล

	$id = $_GET['id'];

	$sql = "DELETE FROM dura
			WHERE id = '$id'";
	$conn->query($sql);
	echo"<script type='text/javascript'>window.location='../b1.php';</script>";

	$conn->close();
?>