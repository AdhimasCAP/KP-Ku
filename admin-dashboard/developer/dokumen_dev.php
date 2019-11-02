<?php include 'header.php';?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Dokumen
    </h1>
    <!-- <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li> -->
    </ol>
  </section>

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
                    <th width="1%">DELETE</th>
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
                        <a class="btn btn-danger btn-sm" href="delete_dok_dev.php?id=<?php echo $tampil['id'] ?>"><i class="fa fa-trash"></i></a>
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