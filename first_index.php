<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Mitr:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link href="./css/styles.css" rel="stylesheet" />
	<link href="./css/font.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
</head>
<style>
 body {
            font-family: 'Mitr', sans-serif;
            background-color: #000000;
            padding: 0px;
            margin: 0px;
        }
        #gradient {
            width: 100%;
            height: repeat(autofit, minmax(200px, 1fr));
            padding: 0px;
            margin: 0px;
           
        }
        .grid {
          marjin-bottom: 3rem;
          display: grid;
          grid-template-columns: repeat(autofit, minmax(200px, 1fr));

        }

</style>
<body>
<div id="gradient">
    <script>
        var colors = new Array(
            [62, 35, 255],
            [60, 255, 60],
            [255, 35, 98],
            [45, 175, 230],
            [255, 0, 255],
            [255, 128, 0]);

        var step = 0;
        var colorIndices = [0, 1, 2, 3];
        var gradientSpeed = 0.002;
        function updateGradient() {

            if ($ === undefined) return;

            var c0_0 = colors[colorIndices[0]];
            var c0_1 = colors[colorIndices[1]];
            var c1_0 = colors[colorIndices[2]];
            var c1_1 = colors[colorIndices[3]];

            var istep = 1 - step;
            var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
            var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
            var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
            var color1 = "rgb(" + r1 + "," + g1 + "," + b1 + ")";

            var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
            var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
            var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
            var color2 = "rgb(" + r2 + "," + g2 + "," + b2 + ")";

            $('#gradient').css({
                background: "-webkit-gradient(linear, left top, right top, from(" + color1 + "), to(" + color2 + "))"
            }).css({
                background: "-moz-linear-gradient(left, " + color1 + " 0%, " + color2 + " 100%)"
            });
            step += gradientSpeed;
            if (step >= 1) {
                step %= 1;
                colorIndices[0] = colorIndices[1];
                colorIndices[2] = colorIndices[3];
                colorIndices[1] = (colorIndices[1] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;
                colorIndices[3] = (colorIndices[3] + Math.floor(1 + Math.random() * (colors.length - 1))) % colors.length;

            }
        }
        setInterval(updateGradient, 10);
    </script>
  <br><br><br>
	<div class="container">
    <div class="grid">
      <div class="grid-item">
        <div class="content"><center>
          <div class="phuket" style="width:50%;">
            <div class="tnx">
              <h1><i class="fas fa-map-marker-alt"></i> CACTUS</h1>
            </div>
                <div class="txt">
              <h1>SHOP</h1>
            </div>
            <p>A center for various types of cacti and many equipment for taking care of your cacti such as soil, pots, fertilizer, etc.</p>
          </div></center>
      </div>
    </div>
  </div>
  <div class="container">
  <div class="grid">
  <div class="grid-item">  
  <div class="row row-cols-1 row-cols-lg-3 align-items-stretch g-4 py-5">
      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://dbg.org/wp-content/uploads/2022/04/header-1080x675.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Various species of cacti</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://cdn-icons-png.flaticon.com/512/2173/2173994.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Cactus</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>3d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://cdn-cakfh.nitrocdn.com/uCvbbthIGuqozYBVHNiffOSAfPDdhkkl/assets/images/optimized/rev-aaacaf7/kaset.today/wp-content/uploads/2021/09/%E0%B8%9B%E0%B8%B1%E0%B8%8D%E0%B8%AB%E0%B8%B2%E0%B8%82%E0%B8%AD%E0%B8%87%E0%B8%94%E0%B8%B4%E0%B8%99696x399.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Various types of Ground</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://cdn-icons-png.flaticon.com/512/2173/2173994.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>Ground</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>4d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>

      <div class="col">
        <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg" style="background-image: url('https://decor.mthai.com/app/uploads/2018/11/28_11_2018_flowerpot_800.jpg');">
          <div class="d-flex flex-column h-100 p-5 pb-3 text-shadow-1">
            <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold">Various types of Plantplot</h3>
            <ul class="d-flex list-unstyled mt-auto">
              <li class="me-auto">
                <img src="https://cdn-icons-png.flaticon.com/512/2173/2173994.png" alt="Bootstrap" width="32" height="32" class="rounded-circle border border-white">
              </li>
              <li class="d-flex align-items-center me-3">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#geo-fill"></use></svg>
                <small>PlantPlot</small>
              </li>
              <li class="d-flex align-items-center">
                <svg class="bi me-2" width="1em" height="1em"><use xlink:href="#calendar3"></use></svg>
                <small>5d</small>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

	<center><table width="100" align="center" border='3'>
		<div class="btn-group" role="group" aria-label="Basic example">
 		 	<button type="button" class="btn btn-dark"><center><a href="login_form.php" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"><font size="3">Login</font></a></h1></center></button>
  			<button type="button" class="btn btn-light"><center><h1><a href="admin_form.php"><font size="3" >Register</font></a></h1></center></button>
  			<button type="button" class="btn btn-outline-dark"><center><h1><a href="index_guest.php"><font size="3">Spectator</font></a></h1></center></button>
		</div>
  </table></center>
</div>
</div>
</div>
  
  
</body>
</html>
