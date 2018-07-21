<?php
    ini_set('display_errors', 1);
	error_reporting(~0);
	include'../../connect_db/connect_db.php'; //เชื่อมต่อฐานข้อมูล
/*
echo $_POST['name_op'];
echo $_POST['os_op'];
echo $_POST['munne_op'];
echo $_POST['member_op'];
echo $_GET['id'];
*/
	$sql = "UPDATE dura SET id_karu='".$_POST['nember']."', 
							name_karu='".$_POST['name']."', 
							pos_karu='".$_POST['pos']."', 
							price_karu='".$_POST['price']."', 
							member_karu='".$_POST['member']."' 
							WHERE id= '".$_GET['id']."'";

	$conn->query($sql);

	
	echo"<script type='text/javascript'>window.location='../b1.php';</script>";
	$conn->close();
	
?>