<?php
	include'../../connect_db/connect_db.php'; //เชื่อมต่อฐานข้อมูล

	$id = $_GET['id'];

	$sql = "DELETE FROM company
			WHERE id_company = '$id'";
	$conn->query($sql);
	echo"<script type='text/javascript'>window.location='../d1.php';</script>"; 

	$conn->close();
?>