<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ลงทะเบียน</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  	<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@700&display=swap" rel="stylesheet">
	  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	  <link href="./css/styles.css" rel="stylesheet" />
	  <link href="./css/font.css" rel="stylesheet" />
</head>
<style>
  body {
    background-color: #FFE4E1;
    background-size: cover;
    font-family: 'Mitr', sans-serif;
  }
</style>
<body>
<nav class="navbar bg-body-tertiary">
  <div class="">
    <a class="navbar-brand" href="#">
    &nbsp;<img src="https://icons.iconarchive.com/icons/webalys/kameleon.pics/512/Desert-icon.png" alt="Logo" width="35" height="29" class="d-inline-block align-text-center">
    &nbsp;CacTusShop
	  <a href="first_index.php" class="w3-bar-item w3-button">หน้าแรก</a>
	<div class="w3-dropdown-hover">
  	<button class="w3-button">ตัวอย่างสินค้า</button>
  	<div class="w3-dropdown-content w3-bar-block w3-border">
    <a href="cactus_pic.php" class="w3-bar-item w3-button">แสดงข้อมูลข้อมูลสายพันธุ์ต้นกระบองเพชร</a>
    <a href="compostm_pic.php" class="w3-bar-item w3-button">แสดงข้อมูลปุ๋ย</a>
    <a href="plantpotm_pic.php" class="w3-bar-item w3-button">แสดงข้อมูลกระถาง</a>
	<a href="ground_pic.php" class="w3-bar-item w3-button">แสดงข้อมูลชนิดของดิน</a>
    <a href="calydoll_pic.php" class="w3-bar-item w3-button">แสดงข้อมูลตุ๊กตาตกเเต่ง</a>
    <a href="stone_pic.php" class="w3-bar-item w3-button">แสดงข้อมูลชนิดของหิน</a>
    </a>
  	</div>
</nav>
<br><br>
    <br>
    <center><form name="form1" method="POST" action="admin_exec.php">
    <table width="50%" bgcolor='#FFDEAD' align="center" border="1">
    <div class="col-md-7 col-lg-8">
        สมัครสมาชิก
        <form class="needs-validation" novalidate="">
          <div class="row g-3">
            <div class="col-sm-6">
              <label for="firstName" class="form-label">ชื่อจริง</label>
              <input type="text" class="form-control" name="user_fname" id="user_fname" placeholder="ชื่อจริง" autocomplete="off">
              <div class="invalid-feedback">
                โปรดป้อนชื่อจริงที่ถูกต้อง
              </div>
            </div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">นามสกุล</label>
              <input type="text" class="form-control" name="user_Iname" id="user_Iname" placeholder="นามสกุล" autocomplete="off">
              <div class="invalid-feedback">
              โปรดป้อนนามสกุลที่ถูกต้อง
              </div>
            </div>

            <div class="col-12">
              <label for="username" class="form-label">ชื่อผู้ใช้งาน</label>
              <div class="input-group has-validation">
                <span class="input-group-text">@</span>
                <input type="text" class="form-control" name="user_username" id="user_username" placeholder="ชื่อผู้ใช้" autocomplete="off">
              <div class="invalid-feedback">
                โปรดป้อนชื่อผู้ใช้งานที่ถูกต้อง
                </div>
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">รหัสผ่าน<span class="text-body-secondary"></span></label>
              <input type="text" class="form-control" name="user_password" id="user_password" placeholder="รหัสผ่าน" autocomplete="off">
              <div class="invalid-feedback">
                โปรดป้อนรหัสผ่านที่ถูกต้อง
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">รหัสพนักงาน</label>
              <input type="text" class="form-control" name="user_id" id="user_id" placeholder="รหัสพนักงาน" autocomplete="off">
              <div class="invalid-feedback">
               โปรดป้อนรหัสพนักงานที่ถูกต้อง
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">เบอร์โทรศัพท์</label>
              <input type="text" class="form-control" name="user_mobile" id="user_mobile" placeholder="เบอร์" autocomplete="off">
              <div class="invalid-feedback">
               โปรดป้อนเบอร์โทรศัพท์ที่ถูกต้อง
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">ตำแหน่งที่ต้องการสมัคร</label>
              <input type="text" class="form-control" name="role" id="role" placeholder="Admin/User" autocomplete="off">
              <div class="invalid-feedback">
               โปรดป้อนตำแหน่งที่ต้องการสมัครให้ถูกต้อง
              </div>
            </div>
          </div>

          <hr class="my-4">

          <button class="w-100 btn btn-dark btn-lg" type="submit" fdprocessedid="9hx5l">สมัครสมาชิก</button>
        </form></center>
      </div>
    </table>
    </form>
    <script src=<"js/bootstrap.min.js"></script>
</body>
</html>