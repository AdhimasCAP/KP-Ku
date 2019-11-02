<?php
    session_start();
    include "koneksi.php";
    if(isset($_POST['reset'])){
        $username = $_POST['username'];
        $cek = mysqli_query($koneksi,"SELECT username from user WHERE username='$username'");
        if(mysqli_num_rows($cek) == 1){
            $password = $_POST['password'];
            $cpassword = $_POST['cpassword'];
            if($password != $cpassword){
                header("location:resetPassword.php?pesan=tidak_sama");
            }else{
                // $pwd = md5($password);
                $pwd = $password;
                $sql = mysqli_query($koneksi, "UPDATE user SET password = md5('$pwd') WHERE username='$username'");
                if($sql){
                    header("location:loginForm.php?pesan=berhasil");
                }else{
                    header("location:resetPassword.php?pesan=gagal");
                }
            }
        }else{
            header("location:resetPassword.php?pesan=username_salah");
        }
    }
?>