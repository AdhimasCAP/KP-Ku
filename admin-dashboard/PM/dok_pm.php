<?php include 'header.php';?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Dokumen
    </h1>

  <section class="content">
    <div class="row">
      <section class="col-lg-9 col-lg-offset-1">
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Daftar Dokumen</h3>             
          </div>
          <div class="box-body">
            <div class="table-responsive">
              <table class="table table-bordered table-striped" id="table-datatable">
                <thead>
                  <tr>
                    <th width="1%">NO</th>
                    <th width="25%">TITLE</th>
                    <th width="1%">CEK</th>
                    <th width="1%">DOWNLOAD</th>
                  </tr>
                </thead>
                <tbody>
                <?php 
                  include '../koneksi.php';
                  $no=1;
                  $cek = mysqli_query($koneksi,"SELECT * FROM dokumen");
                  while($tampil = mysqli_fetch_array($cek)){
                    ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $tampil['title']; ?></td>
                      <td width="1%">                        
                        <a class="btn btn-warning btn-sm" href="cek_dok.php?id=<?php echo $tampil['id'] ?>"><i class="fa fa-cog"></i></a>
                    </td>
                    <td width="1%">                        
                        <a class="btn btn-sm btn-primary" href="cetak.php?id=<?php echo $tampil['id'] ?>">Download</a>
                    </td>
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