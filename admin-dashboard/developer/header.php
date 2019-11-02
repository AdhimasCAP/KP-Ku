<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>DEVELOPER | Manager</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../assets/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="../assets/dist/css/AdminLTE.min.css">

  <link rel="stylesheet" href="../assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">

  <link rel="stylesheet" href="../assets/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="../assets/bower_components/morris.js/morris.css">
  <link rel="stylesheet" href="../assets/bower_components/jvectormap/jquery-jvectormap.css">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css">
  <link rel="stylesheet" href="../assets/bower_components/bootstrap-daterangepicker/daterangepicker.css">
  <link rel="stylesheet" href="../assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">



  <?php
  include '../koneksi.php';
  session_start();
  // if($_SESSION['status'] != "login"){
  //   header("location:../loginForm.php?alert=belum_login");
  // }
  ?>

</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">

    <header class="main-header">
      <a class="logo">
        <span class="logo-mini"><b>D</b></span>
        <span class="logo-lg"><b>DEVELOPER</b></span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <li>
              <a href="logout.php"><i class="fa fa-sign-out"></i> LOGOUT</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar">
      <section class="sidebar">

        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">MAIN NAVIGATION :</li>

          <li>
            <a href="developer_index.php">
              <i class="fa fa-home"></i> <span>BERANDA</span>
            </a>
          </li>

          <li>
            <a href="developer.php">
              <i class="fa fa-user"></i> <span>DEVELOPER</span>
            </a>
          </li>

          <li>
            <a href="buat_lap_dev.php">
              <i class="fa fa-file-text"></i> <span>INPUT LAPORAN</span>
            </a>
          </li>

          <li>
            <a href="lap_dev.php">
              <i class="fa fa-folder"></i> <span>DAFTAR LAPORAN</span>
            </a>
          </li>

          <li>
            <a href="dokumen_dev.php">
              <i class="fa fa-folder"></i> <span>DAFTAR DOKUMEN</span>
            </a>
          </li>

          <!-- <li>
            <a href="logout.php">
              <i class="fa fa-sign-out"></i> <span>LOGOUT</span>
            </a>
          </li> -->

        </ul>
      </section>
      <!-- /.sidebar -->
    </aside>