<?php
	include'connect_db/connect_db.php'; //เชื่อมต่อฐานข้อมูล

	session_destroy();
	echo'<script type="text/javascript">location.href="index.php";</script>';
?>