<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ระบบจัดการข้อมูลของหิน</title>
	<link href="./css/styles.css" rel="stylesheet" />
	<link href="./css/font.css" rel="stylesheet" />
</head>
<body>
<?php
	include "./connect.php";
	if($_POST['chk'] == 'insert'){

		$user_id = $_POST['user_id'];
		$user_username = $_POST['user_username'];
		$user_password = $_POST['user_password'];
		$user_fname = $_POST['user_fname'];
		$user_Iname = $_POST['user_Iname'];
		$user_mobile = $_POST['user_mobile'];
		$role = $_POST['role'];


		$sql = "INSERT INTO user (user_id, user_username, user_password, user_fname, user_Iname, user_mobile, role) ";
		$sql.= "VALUES ('$user_id','$user_username','$user_password','$user_fname','$user_Iname','$user_mobile','$role')";

		if ($dbconn->query($sql) === TRUE) {
			echo "<center>บันทึกข้อมูลเรียบร้อยแล้ว</center><br>";
			echo "<center>กรุณารอสักครู่</center>";
			echo "<meta http-equiv='refresh' content='3; url=admin_form.php'>";
		}else{
			echo "<center>Error: ไม่สามารถบันทึกข้อมูลได้</center><br>";
			echo "<center>กรุณารอสักครู่</center>";
			echo "<meta http-equiv='refresh' content='3; url=admin_form.php'>";
		}
	}

	if ($_GET['chk'] == "delete"){
		$abc = $_GET['abc'];
		$sql = "DELETE FROM user WHERE md5(user_id) = '$abc'";

		if ($dbconn->query($sql) === TRUE) {
			echo "<center><br><br><h5>ลบข้อมูลเรียบร้อยแล้ว</h5><br></center><br>";
			echo "<center><h4>กรุณารอสักครู่...<h4></center>";
			echo "<meta http-equiv='refresh' content='2; url=member_show.php'>";
		}else{
			echo "<center><h5>Warning: ไม่สามารถลบข้อมูลได้</h5></a></center><br>";
			echo "<center><h4>กรุณารอสักครู่...<h4></center>";
			echo "<meta http-equiv='refresh' content='3; url=member_show.php'>";
		}
	}
	if($_POST['chk'] == 'update'){
		$user_id = $_POST['user_id'];
		$user_username = $_POST['user_username'];
		$user_password = $_POST['user_password'];
		$user_fname = $_POST['user_fname'];
		$user_Iname = $_POST['user_Iname'];
		$user_mobile = $_POST['user_mobile'];
		$role = $_POST['role'];

		$sql = "UPDATE user SET user_id = '$user_id',user_username = '$user_username',user_password = '$user_password',user_fname = '$user_fname',user_Iname = '$user_Iname',user_mobile= '$user_mobile',role= '$role'";
		$sql.= " WHERE admin_id = '$user_id'";
	if ($dbconn->query($sql) === TRUE) {
		echo "<center>แก้ไขข้อมูลเรียบร้อยแล้ว</center><br>";
		echo "<center>กรุณารอสักครู่</center>";
		echo "<meta http-equiv='refresh' content='3; url=admin_show.php'>";
	}else{
		echo "<center>Error: ไม่สามารถแก้ไขข้อมูลได้</center><br>";
		echo "<center>กรุณารอสักครู่</center>";
		echo "<meta http-equiv='refresh' content='3; url=admin_show.php'>";
		}
	}
$dbconn->close();
?>
</body>
</html>