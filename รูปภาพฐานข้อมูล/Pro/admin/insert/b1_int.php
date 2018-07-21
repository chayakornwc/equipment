<?php
    ini_set('display_errors', 1);
	error_reporting(~0);
	include'../../connect_db/connect_db.php'; //เชื่อมต่อฐานข้อมูล


	$sql = "INSERT INTO dura (id_karu, name_karu, pos_karu, price_karu, member_karu,ID_STay) 
		VALUES ('".$_POST["nameber_karu"]."','".$_POST["name_karu"]."','".$_POST["ts_kara"]."'
		,'".$_POST["munne_KaRa"]."','".$_POST["member_Karu"]."','".'2'."')";

	$query = mysqli_query($conn,$sql);

	$sql = "INSERT INTO company (name_company, domicile_company, phon_company, fax_company, email_company,ID_STay) 
		VALUES ('".$_POST["company_name"]."','".$_POST["company_domicile"]."','".$_POST["company_phon"]."'
		,'".$_POST["company_fax"]."','".$_POST["company_email"]."','".'2'."')";
	$query = mysqli_query($conn,$sql);

	
	echo"<script type='text/javascript'>window.location='../b1.php';</script>";
	mysqli_close($conn);
?>