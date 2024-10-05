<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ข้อมูลสายพันธุ์ต้นกระบองเพชร</title>
	<link href="./css/styles.css" rel="stylesheet" />
	<link href="./css/font.css" rel="stylesheet" />
</head>
<body>
<?php
	include "./connect.php";
	if($_POST['chk'] == 'insert'){

		$cactus_species_id = $_POST['cactus_species_id'];
		$cactus_species_name = $_POST['cactus_species_name'];

		$sql = "INSERT INTO cactus_species (cactus_species_id, cactus_species_name) ";
		$sql.= "VALUES ('$cactus_species_id','$cactus_species_name')";

		if ($dbconn->query($sql) === TRUE) {
			echo "<center>บันทึกข้อมูลเรียบร้อยแล้ว</center><br>";
			echo "<center>กรุณารอสักครู่</center>";
			echo "<meta http-equiv='refresh' content='3; url=cactus_species_form.php'>";
		}else{
			echo "<center>Error: ไม่สามารถบันทึกข้อมูลได้</center><br>";
			echo "<center>กรุณารอสักครู่</center>";
			echo "<meta http-equiv='refresh' content='3; url=pcactus_species_form.php'>";
		}
	}

	if ($_GET['chk'] == "delete"){
		$abc = $_GET['abc'];
		$sql = "DELETE FROM cactus_species WHERE md5(cactus_species_id) = '$abc'";

		if ($dbconn->query($sql) === TRUE) {
			echo "<center><br><br><h5>ลบข้อมูลเรียบร้อยแล้ว</h5><br></center><br>";
			echo "<center><h4>กรุณารอสักครู่...<h4></center>";
			echo "<meta http-equiv='refresh' content='2; url=cactus_species_show.php'>";
		}else{
			echo "<center><h5>Warning: ไม่สามารถลบข้อมูลได้</h5></a></center><br>";
			echo "<center><h4>กรุณารอสักครู่...<h4></center>";
			echo "<meta http-equiv='refresh' content='3; url=cactus_species_show.php'>";
		}
	}
	if($_POST['chk'] == 'update'){
		$cactus_species_id = $_POST['cactus_species_id'];
		$cactus_species_name = $_POST['cactus_species_name'];

		$sql = "UPDATE cactus_species SET cactus_species_name = '$cactus_species_name',cactus_species_id = '$cactus_species_id'";
		$sql.= " WHERE cactus_species_id = '$cactus_species_id'";
	if ($dbconn->query($sql) === TRUE) {
		echo "<center>แก้ไขข้อมูลเรียบร้อยแล้ว</center><br>";
		echo "<center>กรุณารอสักครู่</center>";
		echo "<meta http-equiv='refresh' content='3; url=cactus_species_show.php'>";
	}else{
		echo "<center>Error: ไม่สามารถแก้ไขข้อมูลได้</center><br>";
		echo "<center>กรุณารอสักครู่</center>";
		echo "<meta http-equiv='refresh' content='3; url=cactus_species_show.php'>";
		}
	}

		
$dbconn->close();
?>
</body>
</html>