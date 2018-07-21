<?php
    ini_set('display_errors', 1);
	error_reporting(~0);
	include'../../connect_db/connect_db.php'; //เชื่อมต่อฐานข้อมูล


	

	$sql = "INSERT INTO op (name,pos,price,number_op,name_company, domicile_company, phon_company, fax_company, email_company,look) 
		VALUES ('".$_POST["op_name"]."','".$_POST["os_op"]."','".$_POST["munne_op"]."'
		,'".$_POST["member_op"]."','".$_POST["company_name"]."','".$_POST["company_domicile"]."','".$_POST["company_phon"]."'
		,'".$_POST["company_fax"]."','".$_POST["company_email"]."','".$_POST["look_op"]."')";

	$query = mysqli_query($conn,$sql);





	echo"<script type='text/javascript'>window.location='../a1.php';</script>"; 
	mysqli_close($conn);
?>