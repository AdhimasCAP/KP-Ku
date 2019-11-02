<?php

$conn = mysqli_connect("localhost","root","","lele") OR DIE (mysqli_connect_error());

$cek = mysqli_query($conn,"SELECT * FROM dokumen");

if (isset($_POST["submit"])) {
  $judul = $_POST["judul"];
  $cover=$_POST["cover"];
  $nomor_dokumen=$_POST["nomor_dokumen"];
  $pemeriksa=$_POST["pemeriksa"];
  $daftar_perubahan=$_POST["daftar_perubahan"];
  $indek_daftar_perubahan=$_POST["indek_daftar_perubahan"];
  $revisi_indek_daftar_perubahan=$_POST["revisi_indek_daftar_perubahan"];
  $halaman_daftar_perubahan=$_POST["halaman_daftar_perubahan"];
  $daftar_isi=$_POST["daftar_isi"];
  $daftar_gambar=$_POST["daftar_gambar"];
  $revisi_daftar_perubahan=$_POST["revisi_daftar_perubahan"];
  $daftar_tabel=$_POST["daftar_tabel"];
  $bab1=$_POST["bab1"];
  $bab2=$_POST["bab2"];
  $bab3=$_POST["bab3"];
  $bab4=$_POST["bab4"];
  $bab5=$_POST["bab5"];
  $bab6=$_POST["bab6"];
  $bab7=$_POST["bab7"];
  $query = mysqli_query($conn,"INSERT INTO dokumen VALUES('','$judul','$cover','$nomor_dokumen','$pemeriksa','  $daftar_perubahan','$halaman_daftar_perubahan','$daftar_isi',
    '$daftar_gambar','$revisi_daftar_perubahan','$daftar_tabel','$bab1','$bab2','$bab3','$bab4','$bab5','$bab6','$bab7','$nomor_dokumen')");
  header("location:index.php?sukses");
}
$error = true;

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ckeditor Blog</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="style.css"><br></head>
<body>
	<div class="container">
		<h2>Buat Dokumen</h2>
		<form action="" method="POST">

      <!-- kode pesan error dan sukses -->
      <?php if(isset($_GET["error"])){ ?>
	       <div id="error" class="wow swing">
		         <h1>HARAP DISI TERLEBIH DAHULU</h1>
	       </div>
       <?php }else if(isset($_GET["sukses"])){?>
	        <div id="sukses" class="wow swing">
		          <h1>COMPLATE</h1>
              <?php header("location:index.php"); ?>
	           </div>
           <?php } ?>
      <div class="cover">
             <h1>judul</h1>
             		<input type="text" name="judul" placeholder="Title" class="in">
             <hr>
             <br><br>
      </div>
			<br><br>
      <div class="cover">
        <h1>COVER</h1>
  			<textarea name="cover" class="ckeditor" id="ckeditor"></textarea>
        <hr>
        <br><br>
      </div>
      <div class="Nomor dokumen">
        <h1>Nomor Dokumen</h1>
        <textarea name="nomor_dokumen" class="ckeditor" id="ckeditor"></textarea>
        <br/>
      </div>
      <div class="pemeriksa">
        <h1>Pemeriksa </h1>
        <textarea name="pemeriksa" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div>
      <div class="daftar perubahan">
        <h1>Daftar Perubahan</h1>
        <textarea name="daftar_perubahan" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div>
      <div class="daftar perubahan indeks">
        <h1>Daftar Perubahan Indeks Revisi</h1>
        <textarea name="indek_daftar_perubahan" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div>
      <!-- <div class="daftar perubahan indeks revisi">
        <h1>Daftar Perubahan Indeks Revisi</h1>
        <textarea name="revisi_indek_daftar_perubahan" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div> -->
      <div class="daftar halaman perubahan">
        <h1>Daftar Halaman Perubahan</h1>
        <textarea name="halaman_daftar_perubahan" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div>
      <div class="daftar isi">
        <h1>Daftar Isi</h1>
        <textarea name="daftar_isi" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div>
      <div class="daftar_gambar">
        <h1>Daftar Gambar</h1>
        <textarea name="daftar_gambar" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div>
      <div class="daftar_tabel">
        <h1>daftar_tabel</h1>
        <textarea name="daftar_tabel" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div>
      <!-- <div class="revisi_daftar_perubahan">
        <h1>Daftar Revisi Perubahan</h1>
        <textarea name="revisi_daftar_perubahan" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div> -->
      <div class="bab1">
        <h1>BAB 1 Pendahuluan</h1>
        <textarea name="bab1" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div>
      <div class="bab2">
        <h1>BAB 2 Lingkungan Pengujian Aplikasi</h1>
        <textarea name="bab2" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div>
      <div class="bab 3">
        <h1>BAB 3 Identifikasi dan Perencanaan modul</h1>
        <textarea name="bab3" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div>
      <div class="bab 4">
        <h1>Bab 4 Deskripsi Dan hasil uji</h1>
        <textarea name="bab4" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div>
      <div class="bab 5 kecatatan applikasi">
        <h1>Bab 5 Daftar Perubahan Indeks Revisi</h1>
        <textarea name="bab5" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div>
      <div class="bab 6 matriks keamanan user">
        <h1>Bab 6 Daftar Perubahan Indeks Revisi</h1>
        <textarea name="bab6" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div>
      <div class="bab 7 matriks pelacakan pengujain applikasi">
        <h1>Bab 7 MATRIKS PELACAKAN PENGUJIAN APLIKASI</h1>
        <textarea name="bab7" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div>
			<input type="submit" name="submit" value="submit" class="submit">
		</form>
	</div>
  <script src="ckeditor.js"></script>
  <script src="/plugins/image/dialogs/plugin.js"></script>
  <script>
     CKEDITOR.replace( 'content', {
      height: 300,
      filebrowserUploadUrl: "upload.php"
     });
</script>
</body>
</html>
