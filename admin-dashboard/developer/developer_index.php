<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Beranda
      <!-- <small>Control panel</small> -->
    </h1>
    <!-- <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol> -->
  </section>


  <section class="content">

    <div class="row">

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-green">
          <div class="inner">
            <?php 
            $developer = mysqli_query($koneksi,"SELECT * FROM user where pilih='Developer'");
            ?>
            <h3><?php echo mysqli_num_rows($developer); ?></h3>
            <p>Developer</p>
          </div>
          <div class="icon">
          <i class="ion ion-person"></i>
          </div>
          <a href="developer.php" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            <?php 
            $lap = mysqli_query($koneksi,"SELECT * FROM tamplate");
            ?>
            <h3><?php echo mysqli_num_rows($lap); ?></h3>
            <p>Laporan</p>
          </div>
      
          <div class="icon">
          <i class="ion ion-folder"></i>
          </div>
          <a href="lap_dev.php" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-aqua">
          <div class="inner">
            <?php 
            $dok = mysqli_query($koneksi,"SELECT * FROM dokumen");
            ?>
            <h3><?php echo mysqli_num_rows($dok); ?></h3>
            <p>Dokumen</p>
          </div>
          <div class="icon">
          <i class="ion ion-folder"></i>
          </div>
          <a href="dokumen_dev.php" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

    </div>

    <div class="row">    
      <section class="col-lg-7">

      <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title">Detail Login</h3>
          </div>
          <div class="box-body">
            <table class="table table-bordered">
              <tr>
                <th>Username</th>
                <td><?php echo $_SESSION['username']; ?></td>
              </tr>
              <tr>
                <th>Level Hak Akses</th>
                <td><?php echo $_SESSION['pilih']; ?></td>
              </tr>
          

            </table>
          </div>
        </div>
      </section>
    </div>

  </section>

</div>
<?php include 'footer.php'; ?>