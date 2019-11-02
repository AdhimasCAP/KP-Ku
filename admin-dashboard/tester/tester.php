<?php include 'header.php';?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Tester
    </h1>
  </section>

  <section class="content">
    <div class="row">
      <section class="col-lg-5 col-lg-offset-1">
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Daftar Tester</h3>             
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th width="25%">USERNAME</th>
                    <th width="25%">LEVEL HAK AKSES</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                  include '../koneksi.php';
                  $no=1;
                  $data = mysqli_query($koneksi,"SELECT * FROM user where pilih='Tester'");
                  while($d = mysqli_fetch_array($data)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $d['username']; ?></td>
                      <td><?php echo $d['pilih']; ?></td>
                    </tr>
                    <?php 
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<?php include 'footer.php'; ?>