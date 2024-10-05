<?php
session_start();


include "./connect.php";


$user_username = $_POST['user_username'];
$user_password = $_POST['user_password'];

$sql="SELECT * FROM user WHERE user_username='".$user_username."' AND user_password='".$user_password."' ";

  $result = $dbconn->query($sql);

  if($result->num_rows > 0)
  {
    $result_array = $result->fetch_assoc(); 

    $_SESSION["user_id"] = $result_array["user_id"];
    $_SESSION["user_username"] = $result_array["user_username"];
    $_SESSION["user_password"] = $result_array["user_password"];
    $_SESSION["role"] = $result_array["role"];

    if($_SESSION["role"]=="admin")
    {
      header('Location: ./admin/index.php');
    }
    else if($_SESSION["role"]=="user")
    {
      header('Location: ./member/index.php');
    }
    else
    {
      echo "<script>";
      echo "Swal.fire({";
      echo "position: 'center',";
      echo "icon: 'error',";
      echo "title: 'Account not found.',";
      echo "}).then(function () {";
      echo "window.history.back()";
      echo "});";
      echo "</script>";
    }
  }
  else
  {
    echo "<script>";
    echo "Swal.fire({";
    echo "position: 'center',";
    echo "icon: 'error',";
    echo "title: 'User or Password is incorrect.',";
    echo "}).then(function () {";
    echo "window.history.back()";
    echo "});";
    echo "</script>";
  }
?>