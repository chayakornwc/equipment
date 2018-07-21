<?php
	include'../../connect_db/connect_db.php'; //เชื่อมต่อฐานข้อมูล

	$id = $_GET['id'];
	$fName = $_POST['fName'];
	$lName = $_POST['lName'];
	$mobile = $_POST['mobile'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$status = $_POST['status'];

	$sql = "SELECT * FROM member WHERE firstname_Mb='$fName' AND lastname_Mb='$lName' AND id_Mb!='$id'";
	$result = $conn->query($sql);
	if ($result->num_rows >= 1) { //ตรวจสอบชื่อ - นามสกุลซ้ำ
		echo"<script type='text/javascript'>alert('ข้อมูลนี้มีอยู่ในฐานข้อมูลแล้ว'); window.location='../member-edit.php?id=$id';</script>";
	} else {
		
		$sql = "SELECT * FROM member WHERE username_Mb='$user' AND id_Mb!='$id'";
		$result = $conn->query($sql);
		if ($result->num_rows >= 1) { //ตรวจสอบ Username ซ้ำ
			echo"<script type='text/javascript'>alert('Username นี้มีผู้ใช้แล้ว'); window.location='../member-edit.php?id=$id';</script>";
		} else {
			$sql = "UPDATE member SET username_Mb='$user', password_Mb='$pass', firstname_Mb='$fName', lastname_Mb='$lName', mobile_Mb='$mobile', status_Mb='$status'
					WHERE id_Mb='$id'";
			$conn->query($sql);
			echo"<script type='text/javascript'>window.location='../member.php';</script>";
		}

	}

	$conn->close();
?>