<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Cek Dokumen
    </h1>
    <!-- <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol> -->
  </section>

  <?php
  $id = ''; 
  if( isset( $_GET['id'])) {
  $id = $_GET['id']; 
  } 
$koneksi = mysqli_connect("localhost","root","","kp") OR DIE (mysqli_connect_error());
$cek = mysqli_query($koneksi,"SELECT * FROM dokumen WHERE id='$id'");

?>

  <section class="content">
    <div class="row">
      <section class="col-lg-9 col-lg-offset-1">       
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Cek Dokumen</h3>
            <a href="dok_pm.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp; Kembali</a> 
          </div>

          <div class="box-body">
            <form action="" method="post">

            <?php              
              $no=1;
              while($tampil = mysqli_fetch_array($cek)){
                ?>

            <div class="form-group">
                <label>Title</label>
                <input type="hidden" class="form-control" name="id" value="<?php echo $tampil['id'] ?>" readonly>
                <input type="text" class="form-control" name="title" value="<?php echo $tampil['title'] ?>" readonly>
            </div>
            <div class="form-group">
              <label>Cover</label>
                <textarea name="cover" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['cover']; ?> </textarea> 
            </div>
            <div class="form-group">
              <label>No. Dokumen</label>
                <textarea name="nomor_dokume_tabel_periksa" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['nomor_dokume_tabel_periksa']; ?></textarea> 
            </div>
            <div class="form-group">
              <label>Daftar Perubahan</label>
                <textarea name="daftar_perubahan" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['daftar_perubahan']; ?></textarea> 
            </div>
            <div class="form-group">
              <label>Index Revisi</label>
                <textarea name="indek_revisi" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['indek_revisi']; ?></textarea>
            </div>
            <div class="form-group">
              <label>Daftar Halaman Perubahan</label>
                <textarea name="daftar_halaman_perubahan" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['daftar_halaman_perubahan']; ?></textarea>
            </div>
            <div class="form-group">
              <label>Daftar Isi </label>
                <textarea name="daftar_isi" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['daftar_isi']; ?></textarea>
            </div>
            <div class="form-group">
            <label>Daftar Gambar </label>
              <textarea name="daftar_gambar" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['daftar_gambar']; ?></textarea>
            </div>
            <div class="form-group">
            <label>Daftar Tabel </label>
              <textarea name="daftar_gambar" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['daftar_tabel']; ?></textarea>
            </div>
            <div class="form-group">
            <label>Bab </label>
              <textarea name="bab1" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['bab']; ?></textarea>
            </div>


            <?php
              }
            ?>

            </form>
          </div>

        </div>
      </section>
    </div>
  </section>

</div>
<script src="../ckeditor/ckeditor.js"></script>
  <script src="../ckeditor/plugins/image/dialogs/plugin.js"></script>
  <script>
     CKEDITOR.replace( 'ckeditor', 'content'{
      height: 300,
      filebrowserUploadUrl: "../ckeditor/upload.php"
     });
</script>
<?php include 'footer.php'; ?>
