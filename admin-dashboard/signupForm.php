<?php
  // function tambah($data){
  // //ambil dari variable globak
  //   global $conn;
  // //ambil data dari tombol submit form
  //   $email = htmlspecialchars($_POST["email"]);
  //   $password = htmlspecialchars($_POST["password"]);
  //   $as = htmlspecialchars($_POST["as"]);

  //   $query = "INSERT INTO user VALUES('','$email',.md5['$password'],'$as')";
  //   mysqli_query($conn,"$query");

  //   return mysqli_affected_rows($conn);
  // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="index.css">
  <title>Sign Up</title>
</head>
<body>
<form class="sign-in" action="signup_process.php" method="POST">
<img class="images" src="image/sistem/tugumuda.jpg" alt="images">
    <h1 class="sign-up-title">Sign Up</h1>
    <!-- <input type="hidden" name="id"> -->
    <?php
      // if(isset($_POST['sign_up'])){
      //   $password = $_POST['password'];
      //   if (strlen($password) <= 12){
      //     echo "<script>alert('Password harus antara 6-12 huruf')</script>";
      //     echo "<meta http-equiv='refresh' content='1 url=signupForm.php'>";
      //   }else if(){

      //   }else{
      //   echo "<meta http-equiv='refresh' content='1 url=signup_process.php'>";
      //   }

      // }
    ?>
    <label for="username">Username</label>
    <input type="text" name="username" class="sign-up-input" id="username"><br>

    <label for="password">Password</label>
    <input type="password" name="password" class="sign-up-input" id="password">
    <br>

    <label for="as">Sign Up As</label>
    <select name="pilih" id="" class="sign-up-input">
      <option value="" name="pilih"></option>
      <option value="Developer" name="pilih">Developer</option>
      <option value="Tester" name="pilih">Tester</option>
      <option value="PM" name="pilih">PM</option>
    </select><br>

    <input type="submit" name="sign_up" value="Sign Up" class="sign-up-button">
    <a class="btn-sign" href="index.php">Kembali</a>
  </form>
</body>
</html>