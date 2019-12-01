<?php
    include "koneksi.php";
    
    if(isset($_POST['sign_up'])){
        // $id = $_POST['id'];
        $username = $_POST['username'];
        $password = md5($_POST['password']);
        // $password = $_POST['password'];
        $pilih = $_POST['pilih'];

        $sql_get = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username'");
        $num_row = mysqli_num_rows($sql_get);

        if(isset($_POST['sign_up'])){
            // $password = md5($_POST['password']);
            // $password = $_POST['password'];
            if (empty($username)){
                header("location:signupForm.php?pesan=username_belum");
            }else if(empty($password)){
                header("location:signupForm.php?pesan=pass_belum");
            }else if(empty($pilih)){
                header("location:signupForm.php?pesan=sebagai_belum");    
            }else if($num_row == 1){
                header("location:signupForm.php?pesan=sudah_ada");
            }else if(strlen($password) <= 4){
                header("location:signupForm.php?pesan=pass_kurang");
            }else{
                header("location:index.php");
                $query = mysqli_query($koneksi, "insert into user values('$username','$password','$pilih')");
            }
        }
    }

?>