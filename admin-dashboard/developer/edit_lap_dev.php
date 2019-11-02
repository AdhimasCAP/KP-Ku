<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Input Laporan
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>

  <?php
  $id = ''; 
  if( isset( $_GET['id'])) {
  $id = $_GET['id']; 
  } 
$koneksi = mysqli_connect("localhost","root","","kp") OR DIE (mysqli_connect_error());
$cek = mysqli_query($koneksi,"SELECT * FROM tamplate WHERE id='$id'");

if (isset($_POST["submit"])) {
  $id= $_POST["id"];
  $title = $_POST["title"];
    $cover = $_POST["cover"];
      $nomor_dokume_tabel_periksa = $_POST["nomor_dokume_tabel_periksa"];
        $daftar_perubahan = $_POST["daftar_perubahan"];
          $indek_revisi = $_POST["indek_revisi"];
            $daftar_halaman_perubahan = $_POST["daftar_halaman_perubahan"];
              $daftar_isi = $_POST["daftar_isi"];
                $daftar_gambar = $_POST["daftar_gambar"];
                  $daftar_tabel = $_POST["daftar_tabel"];
                    $bab = $_POST["bab"];
  if((empty($title)) && (empty($cover))
   && (empty($nomor_dokume_tabel_periksa))
   && (empty($daftar_perubahan))
   && (empty($indek_revisi))
   && (empty($daftar_halaman_perubahan))
   && (empty($daftar_isi))
   && (empty($daftar_gambar))
   && (empty($daftar_tabel))
   && (empty($bab)) )	{
     header("location:edit_lap_dev.php?error");
     $error = true;
}else {
  $query = mysqli_query($koneksi,"INSERT INTO dokumen VALUES(
      '','$title','$cover','$nomor_dokume_tabel_periksa','$daftar_perubahan','$indek_revisi',
    '$daftar_halaman_perubahan','$daftar_isi','$daftar_gambar','$daftar_tabel','$bab'
  )");
  header("location:edit_lap_dev.php?sukses");
   }
}

?>

  <section class="content">
    <div class="row">
      <section class="col-lg-9 col-lg-offset-1">       
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Edit Laporan</h3>
            <a href="developer_index.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp; Kembali</a> 
          </div>
          <?php if(isset($_GET["error"])){ ?>
			<div id="error" class="wow swing">
				<h3>Jangan Kosong !!</h3>
			</div>
		<?php }else if(isset($_GET["sukses"])){?>
			<div id="sukses" class="wow swing">
				<h3>Sukses Di buat</h3>
			</div>
		<?php } ?>
          <div class="box-body">
            <form action="" method="post">

            <?php              
              $no=1;
              while($tampil = mysqli_fetch_array($cek)){
                ?>

            <div class="form-group">
                <label>Title</label>
                <input type="hidden" class="form-control" name="id" value="<?php echo $tampil['id'] ?>">
                <input type="text" class="form-control" name="title" value="<?php echo $tampil['title'] ?>">
            </div>
            <div class="form-group">
              <label>Cover</label>
                <textarea name="cover" class="ckeditor" id="ckeditor"><?php echo $tampil['cover']; ?></textarea> 
            </div>
            <div class="form-group">
              <label>No. Dokumen</label>
                <textarea name="nomor_dokume_tabel_periksa" class="ckeditor" id="ckeditor"><?php echo $tampil['nomor_dokume_tabel_periksa']; ?></textarea> 
            </div>
            <div class="form-group">
              <label>Daftar Perubahan</label>
                <textarea name="daftar_perubahan" class="ckeditor" id="ckeditor"><?php echo $tampil['daftar_perubahan']; ?></textarea> 
            </div>
            <div class="form-group">
              <label>Index Revisi</label>
                <textarea name="indek_revisi" class="ckeditor" id="ckeditor"><?php echo $tampil['indek_revisi']; ?></textarea>
            </div>
            <div class="form-group">
              <label>Daftar Halaman Perubahan</label>
                <textarea name="daftar_halaman_perubahan" class="ckeditor" id="ckeditor"><?php echo $tampil['daftar_halaman_perubahan']; ?></textarea>
            </div>
            <div class="form-group">
              <label>Daftar Isi </label>
                <textarea name="daftar_isi" class="ckeditor" id="ckeditor"><?php echo $tampil['daftar_isi']; ?></textarea>
            </div>
            <div class="form-group">
            <label>Daftar Gambar </label>
              <textarea name="daftar_gambar" class="ckeditor" id="ckeditor"><?php echo $tampil['daftar_gambar']; ?></textarea>
            </div>
            <div class="form-group">
            <label>Daftar Tabel </label>
              <textarea name="daftar_tabel" class="ckeditor" id="ckeditor"><?php echo $tampil['daftar_tabel']; ?></textarea>
            </div>
            <div class="form-group">
            <label>Bab </label>
              <textarea name="bab" class="ckeditor" id="ckeditor"><?php echo $tampil['bab']; ?></textarea>
            </div>
            <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-sm btn-primary" value="Submit">
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
<?php include 'footer.php'; ?>
