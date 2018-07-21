<?php
	include'../../connect_db/connect_db.php'; //เชื่อมต่อฐานข้อมูล

	$fName = $_POST['fName'];//ทำการรับข้อมูลจากหน้าmember-addผ่านทาง methodรือวิธีการที่ใช้ส่งข้อมูลชื่อว่า POST 
							//ซึ่งเป็นการส่งตัวแปรหรือข้อมูลจากฟอร์มไปยัง Script โดยตรง โดยไม่ผ่าน URL และมีการเข้ารหัสข้อมูลก่อน เพื่อป้องกันข้อมูลสูญหายระหว่างการส่ง
	$lName = $_POST['lName'];
	$mobile = $_POST['mobile'];
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$status = $_POST['status'];

	$sql = "SELECT * FROM member WHERE firstname_Mb='$fName' AND lastname_Mb='$lName'";
	//SELECTการเลือกคอลัมน์ที่เรากำหนดเอาไว้
	//FORM คือการเลือกตารางข้อมูล 
	//WHERE ระบุเงื่อนไข
	$result = $conn->query($sql);//ส่งค่าที่ได้รับมาจากข้างบนไปqueryฐานข้อมูล
	if ($result->num_rows >= 1) { //ตรวจสอบชื่อ - นามสกุลซ้ำ
		echo"<script type='text/javascript'>alert('ข้อมูลนี้มีอยู่ในฐานข้อมูลแล้ว'); window.location='../member-add.php';</script>";
	} else {
		
		$sql = "SELECT * FROM member WHERE username_Mb='$user'";
		$result = $conn->query($sql);
		if ($result->num_rows >= 1) { //ตรวจสอบ Username ซ้ำ
			echo"<script type='text/javascript'>alert('Username นี้มีผู้ใช้แล้ว'); window.location='../member-add.php';</script>";
		} else {
			$sql = "INSERT INTO member (username_Mb, password_Mb, firstname_Mb, lastname_Mb, mobile_Mb, status_Mb)
					VALUES ('$user', '$pass', '$fName', '$lName', '$mobile', '$status')";
			$conn->query($sql);//เก็บค่าแล้วส่งไปqueryฐานข้อมูล
			echo"<script type='text/javascript'>window.location='../member.php';</script>";
		}

	}

	$conn->close();
?>