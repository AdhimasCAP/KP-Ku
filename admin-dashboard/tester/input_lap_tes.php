<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
    Laporan
    </h1>
  </section>


  <?php

$koneksi = mysqli_connect("localhost","root","","kp") OR DIE (mysqli_connect_error());

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
     header("location:lap_tes.php?error");
     $error = true;
}else {
  $query = mysqli_query($koneksi,"INSERT INTO tamplate VALUES(
      '','$title','$cover','$nomor_dokume_tabel_periksa','$daftar_perubahan','$indek_revisi',
    '$daftar_halaman_perubahan','$daftar_isi','$daftar_gambar','$daftar_tabel','$bab'
  )");
  header("location:lap_tes.php?sukses");
   }
}

?>
<section class="content">
    <div class="row">
      <section class="col-lg-9 col-lg-offset-1">       
        <div class="box box-info">

          <div class="box-header">
            <h3 class="box-title">Input Laporan</h3>
            <a href="lap_tes.php" class="btn btn-info btn-sm pull-right"><i class="fa fa-reply"></i> &nbsp; Kembali</a> 
          </div>
          <?php if(isset($_GET["error"])){ ?>
			<div id="error" class="wow swing">
				<h1>Jangan Kosong !!</h1>
			</div>
		<?php }else if(isset($_GET["sukses"])){?>
			<div id="sukses" class="wow swing">
				<h1>Sukses Di buat</h1>
			</div>
		<?php } ?>
          <div class="box-body">
            <form action="" method="post">
            <div class="form-group">
              <label>Title</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="form-group">
              <label>Cover</label>
                <textarea name="cover" class="ckeditor" id="ckeditor"></textarea> 
            </div>
            <div class="form-group">
              <label>No. Dokumen</label>
                <textarea name="nomor_dokume_tabel_periksa" class="ckeditor" id="ckeditor"></textarea> 
            </div>
            <div class="form-group">
              <label>Daftar Perubahan</label>
                <textarea name="daftar_perubahan" class="ckeditor" id="ckeditor"></textarea> 
            </div>
            <div class="form-group">
              <label>Index Revisi</label>
                <textarea name="indek_revisi" class="ckeditor" id="ckeditor"></textarea>
            </div>
            <div class="form-group">
              <label>Daftar Halaman Perubahan</label>
                <textarea name="daftar_halaman_perubahan" class="ckeditor" id="ckeditor"></textarea>
            </div>
            <div class="form-group">
              <label>Daftar Isi </label>
                <textarea name="daftar_isi" class="ckeditor" id="ckeditor"></textarea>
            </div>
            <div class="form-group">
            <label>Daftar Gambar </label>
              <textarea name="daftar_gambar" class="ckeditor" id="ckeditor"></textarea>
            </div>
            <div class="form-group">
            <label>Daftar Tabel </label>
              <textarea name="daftar_tabel" class="ckeditor" id="ckeditor"></textarea>
            </div>
            <div class="form-group">
            <label>Bab </label>
              <textarea name="bab" class="ckeditor" id="ckeditor"></textarea>
            </div>
            <div class="form-group">
                  <input type="submit" name="submit" class="btn btn-sm btn-primary" value="Submit">
                </div>
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
     CKEDITOR.replace( 'content', 'ckeditor' {
      height: 300,
      filebrowserUploadUrl: "../ckeditor/upload.php"
     });
</script>
<?php include 'footer.php'; ?>