<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>แสดงข้อมูลสายพันธุ์ต้นกระบองเพชร</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="./css/styles.css" rel="stylesheet"/>
    <link href="./css/forn/styles.css" rel="stylesheet"/>
</head>
<style>
  body {
    background-image: url(https://static.basicinvite.com/media/bi/33949/paper-cacti-wallpaper-2x.jpg?q=1686174991);
    background-size: cover;
    font-family: 'Poppins', sans-serif;
  }
</style>
<body>
	<br><br>
    <center><h1>ข้อมูลสายพันธุ์ต้นกระบองเพชร</h1></center>
    <br>
	<center>
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-light"><a href="index_guest.php" class="link-dark link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><font size="5">หน้าหลัก</font></a></button>
        </div>
    </center>
    <br>
    <center>
        <form id="form1" name="form1" method="POST" action="">
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
        
        <input type="text" class="form-control h-150 w-75" name="search" placeholder="ค้นหา" autocomplete="off">
        <button class="btn btn-dark rounded-pill px-3" type="submit" name="submit">ค้นหา</button>
    
</div>
        </form>
    </center>
    <font size="4">
<table class="table table-striped">
<?php
    include "./connect.php";
    $search = $_POST['search'];
    $sql = "SELECT cactus_species.* FROM cactus_species";
    $sql.= " WHERE cactus_species_name LIKE '%".$search."%'";
    $result = $dbconn->query($sql);
    if ($result->num_rows > 0) {      
        echo "<br>";
        echo "<tr bgcolor='#00C5FF'>";
        echo "<td >";
        echo "<center>รหัสสายพันธุ์ต้นกระบองเพชร</center>";
        echo "</td>";
        echo "<td >";
        echo "<center>ประเภทสายพันธุ์ต้นกระบองเพชร</center>";
        echo "</td>";
        echo "</tr>";
        $i=0;
        while ($result_array = $result->fetch_assoc()) {
            $i++;
            if(($i%2)==1){
                echo "<tr bgcolor='#F5F5F5'>";
            }else{
                echo "<tr bgcolor='#D3D3D3'>";
            }
            echo "<td><center>".$result_array['cactus_species_id']."</center></td>";
            echo "<td><center>".$result_array['cactus_species_name']."</center></td>";
            echo "</tr>";
        }
        
    }else{
        echo "<center>ไม่พบข้อมูล</center>";
    }
    $dbconn->close();
?>
</font>
<script src=<"js/bootstrap.min.js"></script>
</body>
</html>