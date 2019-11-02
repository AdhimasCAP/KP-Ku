<?php
    if(isset($_GET['pesan'])){
      if($_GET['pesan']=="gagal"){
          echo "<div class='alert'>Password Gagal Diperbaharui !</div>";
      }elseif($_GET['pesan']=="tidak_sama"){
          echo "<div class='alert'>Password Tidak Sama</div>";
      }elseif($_GET['pesan']=="email_salah"){
          echo "<div class='alert'>Pastikan Email Sudah Benar !</div>";
      }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="index.css">
  <title>Reset Password</title>
</head>
<body>
<form class="sign-in" action="reset_process.php" method="POST">
    <img class="images" src="image/sistem/tugumuda.jpg" alt="images">
    <label for="username">Username</label>
    <input type="text" class="lost-input" id="email" name="email"><br>

    <label for="password">New Password</label>
    <input type="password" class="lost-input" name="password"><br>
    <label for="password">Confirm Password</label>
    <input type="password" class="lost-input" name="cpassword"><br>

    <input type="submit" name="reset" class="sign-in-button" value="Reset"><br>
    <a class="btn-sign" href="loginForm.php">Kembali</a>
    <!-- <input type="submit" a href="signupForm.php" class="sign-up-button" value="sign up"> -->
  </form>
</body>