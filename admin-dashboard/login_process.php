<?php
	
	session_start();

	include "koneksi.php";
	$id = $_POST['id'];
	$username = $_POST['username'];
	// $password = md5($_POST['Password']);
	$password = $_POST['password'];
	
	$login = mysqli_query($koneksi, "SELECT * FROM user WHERE username='$username' AND password=md5('$password')");
	$cek = mysqli_num_rows($login);

	if($cek > 0){
		$data = mysqli_fetch_assoc($login);

		if($data['pilih']=="Developer"){
			$_SESSION['id']=$id;
			$_SESSION['username']=$username;
			$_SESSION['pilih']="Developer";

			header("location:./developer/developer_index.php");
		}else if($data['pilih']=="Tester"){
			$_SESSION['id']=$id;
			$_SESSION['username']=$username;
			$_SESSION['pilih']="Tester";

			header("location:./tester/tester_index.php");
		}else if($data['pilih']=="PM"){
			$_SESSION['id']=$id;
			$_SESSION['username']=$username;
			$_SESSION['pilih']="PM";

			header("location:./PM/pm_index.php");
		}else{
			header("location:loginForm.php?pesan=gagal");
		}
	}else{
		header("location:loginForm.php?pesan=gagal");
	}

	// if (isset($_POST['login'])) {
	// 	$e = $_POST['email'];
	// 	$p = $_POST['password'];
	// 	$data = mysqli_connect($koneksi, "SELECT * FROM user WHERE email = '$email' AND password = '$password'");
	// 	$cek = mysqli_fetch_assoc($data);
	// 	$email = $cek['email'];
	// 	$password = $cek['password'];
	// 	$pilih = $cek['pilih'];
	// 	if ($e == $email && $p == $password) {
	// 		$_SESSION['pilih'] = $pilih;
	// 		header('location:signupForm.php');
	// 	}else{
	// 		echo "location:loginForm.php?pesan=gagal";
	// 	}
	// }
?>