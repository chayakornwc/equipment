<?php
    ini_set('display_errors', 1);
	error_reporting(~0);
	include'../../connect_db/connect_db.php'; //เชื่อมต่อฐานข้อมูล

	$sql = "UPDATE company SET  
								name_company='".$_POST['company_name']."', 
								domicile_company='".$_POST['company_domicile']."', 
								phon_company='".$_POST['company_phon']."', 
								fax_company='".$_POST['company_fax']."', 
								email_company='".$_POST['company_email']."'
								WHERE id_company= '".$_GET['id']."'";

	$conn->query($sql);

	
	echo"<script type='text/javascript'>window.location='../d1.php';</script>";
	$conn->close();
	
?>
