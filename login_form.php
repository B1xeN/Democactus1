<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  	<link href="https://fonts.googleapis.com/css2?family=Mitr:wght@700&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/nav_bar.css">
  <link rel="stylesheet" href="./css/login.css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
  <title>Login</title>
</head>
<style>
 body {
            font-family: 'Mitr', sans-serif;
            background-color: #FFE4E1;
            padding: 0px;
            margin: 0px;
        }
        
  .bg-image {
  background-image: url('https://images.unsplash.com/photo-1463936575829-25148e1db1b8?auto=format&fit=crop&q=80&w=1000&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Y2FjdHVzJTIwd2FsbHBhcGVyfGVufDB8fDB8fHww/660x1000');
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}
</style>
<body>

<?php include "./index_guest.php"; ?>
  <div class="body-text">
    <center>
      <div id="login-form">
       <br>  
       <div class="container-fluid px-5 my-5">
        <div class="row justify-content-center">
    <div class="col-xl-10">
      <div class="card border-0 rounded-3 shadow-lg overflow-hidden">
        <div class="card-body p-0">
          <div class="row g-0">
            <div class="col-sm-6 d-none d-sm-block bg-image"></div>
            <div class="col-sm-6 p-4">
              <div class="text-center">
                <div class="h3 fw-light">Login</div>
                <p class="mb-4 text-muted">Login And Register</p>
              </div>
       <form method="POST" action="login.php">
          <input type="text" class="form-control h-150 w-25" name="user_username" placeholder="user_username" required="required" >
          <br>
          <input type="password" class="form-control h-150 w-25" name="user_password" placeholder="user_password" required="required">
          <br>
          <br>
          <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="submit" class="btn btn-dark">Login</button>
            <button type="button" class="btn btn-light " onclick="window.location.href='./admin_form.php'">Register</button>
          </div>
        </form>
      </div>
      </div>
      </div>
    </div>
  </div>
    </center>
  </div>
      </div>  
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
  <script src=<"js/bootstrap.min.js"></script>
  
</body>
</html>
