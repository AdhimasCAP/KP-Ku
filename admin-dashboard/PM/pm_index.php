<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      BERANDA
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
            $pm = mysqli_query($koneksi,"SELECT * FROM user where pilih='PM'");
            ?>
            <h3><?php echo mysqli_num_rows($pm); ?></h3>
            <p>PM</p>
          </div>
          <div class="icon">
            <i class="ion ion-person"></i>
          </div>
          <a href="pm.php" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
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
          <a href="dok_pm.php" class="small-box-footer">Detail <i class="fa fa-arrow-circle-right"></i></a>
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
                <th width="30%">Username</th>
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