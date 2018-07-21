<?php
    ini_set('display_errors', 1);
	error_reporting(~0);
	include'../../connect_db/connect_db.php'; //เชื่อมต่อฐานข้อมูล


	$sql = "INSERT INTO company (name_company, domicile_company, phon_company, fax_company, email_company) 
		VALUES ('".$_POST["company_name"]."','".$_POST["company_domicile"]."','".$_POST["company_phon"]."'
		,'".$_POST["company_fax"]."','".$_POST["company_email"]."')";

	$query = mysqli_query($conn,$sql);

	if($query) {
		
	}
	echo"<script type='text/javascript'>window.location='../d1.php';</script>";
	mysqli_close($conn);
?>