<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ข้อมูลสินออค้าสำ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href="./css/styles.css" rel="stylesheet"/>
    <link href="./css/forn/styles.css" rel="stylesheet"/>
</head>
<style>
body {
  background-image: url('https://media.istockphoto.com/id/1633453104/th/%E0%B8%A3%E0%B8%B9%E0%B8%9B%E0%B8%96%E0%B9%88%E0%B8%B2%E0%B8%A2/cochal-cactus-stetsonia-cereus-cleistocactus.jpg?s=2048x2048&w=is&k=20&c=eWM8V-oVEUfJv_5dEBR3D_vsEMWrU3KwmF-Kw2XWoAU=');
}
</style>
<body>
    <br><br>
    <center><h1>ข้อมูลออเดอร์สินค้า</h1></center>
    <br>
    <center>
    <button class="btn btn-danger rounded-pill px-3" type="button"><a href="index.php"><font size="5">หน้าหลัก</font></a></button>  
    </center>
    <br>
    <center>
        <form id="form1" name="form1" method="POST" action="">
            <input type="text" name="search" placeholder="ค้นหา" autocomplete="off">
            <input type="submit" name="submit" value="ค้นหา">
        </form>
    </center>
    <font size="5">
<table class="table table-striped">
<?php
   include "./connect.php";
    $search = $_POST['search'];
    $sql = "SELECT cactus.* FROM cactus";
    $sql.= " WHERE cactus_species_name LIKE '%".$search."%'";
    $result = $dbconn->query($sql);
    if ($result->num_rows > 0)  {
        echo "<br>";
        echo "<tr bgcolor='#00C5FF'>";
        echo "<td >";
        echo "<center>รหัสต้นกระบองเพชร</center>";
        echo "</td>";
        echo "<td >";
        echo "<center>ชื่อต้นกระบองเพชร</center>";
        echo "</td>";

        echo "<td >";
        echo "<center>ดิน</center>";
        echo "</td>";
        echo "<td >";
        echo "<center>ปุ๋ย</center>";
        echo "</td>";
        echo "<td >";
        echo "<center>กระถาง</center>";
        echo "</td>";
        echo "<td >";
        echo "<center>ของตกเเต่ง</center>";
        echo "</td>";
        echo "<td >";
        echo "<center>ชนิดของหิน</center>";
        echo "</td>";
        echo "<td >";
        echo "<center>จำนวนการสั่งสินค้า</center>";
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

            echo "<td><center>".$result_array['ground_name']."</center></td>";
            echo "<td><center>".$result_array['compost_name']."</center></td>";
            echo "<td><center>".$result_array['plantpot_name']."</center></td>";
            echo "<td><center>".$result_array['calydoll_name']."</center></td>";
            echo "<td><center>".$result_array['stone_name']."</center></td>";
            echo "<td><center>".$result_array['cactus_order']."</center></td>";
            echo "</tr>";
        }
        
    }else{
        echo "<center>ไม่พบข้อมูล</center>";
    }
    $dbconn->close();
?>
</font>
</table>
<script src=<"js/bootstrap.min.js"></script>
</body>
</html>