<?php
    ini_set('display_errors', 1);
	error_reporting(~0);
	include'../../connect_db/connect_db.php'; //เชื่อมต่อฐานข้อมูล

	$sql = "UPDATE op SET name='".$_POST['name_op']."', 
						  pos='".$_POST['os_op']."', 
						  price='".$_POST['munne_op']."', 
						  number_op='".$_POST['member_op']."',

						  name_company='".$_POST['company_name']."',
						  domicile_company='".$_POST['company_domicile']."',
						  phon_company='".$_POST['company_phon']."',
						  fax_company='".$_POST['company_fax']."',
						  email_company='".$_POST['company_email']."',
						  look='".$_POST['look_op']."'







						  WHERE id= '".$_GET['id']."'";

	$conn->query($sql);

	
	echo"<script type='text/javascript'>window.location='../a1.php';</script>";
	$conn->close();
	



?>
