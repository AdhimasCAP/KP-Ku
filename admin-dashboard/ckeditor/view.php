<?php

$conn = mysqli_connect("localhost","root","","kpku") OR DIE (mysqli_connect_error());
$cek = mysqli_query($conn,"SELECT * FROM tamplate WHERE id=20");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Lihat Dokumen</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="style.css"><br></head>
<body>
	<div class="container">
		<h2>Lihat Dokumen Dokumen</h2>
		<form action="" method="POST">
      <?php while ($tampil=mysqli_fetch_array($cek)) :?>
      <div class="hr"></div> <br>
          <input type="hidden" name="" value="<?php echo $tampil['id'];?>">
          <div class="title">
                 <h1>Title</h1>
                    <input type="text" name="title" placeholder="Title" value="<?php echo $tampil['title']; ?>" readonly>
                 <hr>
                 <br><br>
          </div>
          <br><br>
          <!-- <div class="cover"> -->
            <h1>COVER</h1>
            <textarea name="cover" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['cover']; ?></textarea>
            <hr>
            <br><br>
          <!-- </div> -->
          <!-- <div class="Nomor dokumen"> -->
            <h1>Nomor Dokumen</h1>
            <textarea name="nomor_dokume_tabel_periksa" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['nomor_dokume_tabel_periksa']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_perubahan"> -->
            <h1>Daftar Perubahan </h1>
            <textarea name="daftar_perubahan" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['daftar_perubahan']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="indek_revisi"> -->
            <h1>Indeks Revisi</h1>
            <textarea name="indek_revisi" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['indek_revisi']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_halaman_perubahan"> -->
            <h1>Daftar Halaman Perubahan</h1>
            <textarea name="daftar_halaman_perubahan" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['daftar_halaman_perubahan']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_isi"> -->
            <h1>Daftar Isi</h1>
            <textarea name="daftar_isi" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['daftar_isi']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_gambar"> -->
            <h1>Daftar Gambar</h1>
            <textarea name="daftar_gambar" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['daftar_gambar']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_tabel"> -->
            <h1>Daftar Tabel</h1>
            <textarea name="daftar_tabel" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['daftar_tabel']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab1"> -->
            <h1>BAB</h1>
            <textarea name="bab" class="ckeditor" id="ckeditor" readonly><?php echo $tampil['bab']; ?></textarea>
            <br/>
        <?php endwhile?>
          <!-- <input type="submit" name="submit" value="submit" class="submit"> -->
        </form>
        <a href="#">Kembali</a>
	</div>
  <script src="ckeditor.js"></script>
  <script src="/plugins/image/dialogs/plugin.js"></script>
  <script>
     CKEDITOR.replace( 'ckeditor', 'content'{
      height: 300,
      filebrowserUploadUrl: "upload.php"
     });
</script>
</body>
</html>
