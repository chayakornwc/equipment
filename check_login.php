<?php
	include'connect_db/connect_db.php';

	$username = $_POST['txtUsername'];
	$password = $_POST['txtPassword'];

	$sql = "SELECT * FROM member WHERE username_Mb='$username' AND password_Mb='$password'";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {

	    $row = $result->fetch_assoc();
	    $_SESSION["id_Mb"] = $row["id_Mb"]; //รหัสเจ้าหน้าที่ อาจารย์ หรือนักศึกษา

        if($row["status_Mb"]=="เจ้าหน้าที่"){
        	echo'<script type="text/javascript">location.href="admin/index.php";</script>'; //เจ้าหน้าที่
        } else {
        	echo'<script type="text/javascript">location.href="user/index.php";</script>'; //อาจารย์ หรือ นักศึกษา
        }

	} else {
	    echo "Username หรือ Password ไม่ถูกต้อง";
	}
	$conn->close();
?>