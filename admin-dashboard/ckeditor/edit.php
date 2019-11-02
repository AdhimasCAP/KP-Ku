<?php

$conn = mysqli_connect("localhost","root","","kpku") OR DIE (mysqli_connect_error());
$cek = mysqli_query($conn,"SELECT * FROM tamplate WHERE id=20");

if (isset($_POST["simpan"])) {
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
     header("location:edit.php?error");
     $error = true;
}else {
  $query = mysqli_query($conn,"INSERT INTO dokumen VALUES(
      '','$title','$cover','$nomor_dokume_tabel_periksa','$daftar_perubahan','$indek_revisi',
    '$daftar_halaman_perubahan','$daftar_isi','$daftar_gambar','$daftar_tabel','$bab'
  )");
  header("location:edit.php?sukses");
   }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edit Tamplate</title>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
	<link rel="stylesheet" href="style.css"><br></head>
<body>
	<div class="container">
		<h2>Edit Dokumen</h2>
    <!-- kode pesan error dan sukses -->
    <?php if(isset($_GET["error"])){ ?>
       <div id="error" class="wow swing">
           <h1>HARAP DISI TERLEBIH DAHULU</h1>
       </div>
     <?php }else if(isset($_GET["sukses"])){?>
        <div id="sukses" class="wow swing">
            <h1>Berhasil</h1>
           </div>
         <?php } ?>
		<form action="" method="POST">
      <?php while ($tampil=mysqli_fetch_array($cek)) :?>
      <div class="hr"></div> <br>
          <div class="title">
                 <h1>Title</h1>
                    <input type="text" name="title" placeholder="Title" value="<?php echo $tampil['title']; ?>">
                 <hr>
                 <br><br>
          </div>
          <br><br>
          <!-- <div class="cover"> -->
            <h1>COVER</h1>
            <textarea name="cover" class="ckeditor" id="ckeditor"><?php echo $tampil['cover']; ?></textarea>
            <hr>
            <br><br>
          <!-- </div> -->
          <!-- <div class="Nomor dokumen"> -->
            <h1>Nomor Dokumen</h1>
            <textarea name="nomor_dokume_tabel_periksa" class="ckeditor" id="ckeditor"><?php echo $tampil['nomor_dokume_tabel_periksa']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_perubahan"> -->
            <h1>Daftar Perubahan </h1>
            <textarea name="daftar_perubahan" class="ckeditor" id="ckeditor"><?php echo $tampil['daftar_perubahan']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="indek_revisi"> -->
            <h1>Indeks Revisi</h1>
            <textarea name="indek_revisi" class="ckeditor" id="ckeditor"><?php echo $tampil['indek_revisi']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_halaman_perubahan"> -->
            <h1>Daftar Halaman Perubahan</h1>
            <textarea name="daftar_halaman_perubahan" class="ckeditor" id="ckeditor"><?php echo $tampil['daftar_halaman_perubahan']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_isi"> -->
            <h1>Daftar Isi</h1>
            <textarea name="daftar_isi" class="ckeditor" id="ckeditor"><?php echo $tampil['daftar_isi']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_gambar"> -->
            <h1>Daftar Gambar</h1>
            <textarea name="daftar_gambar" class="ckeditor" id="ckeditor" ><?php echo $tampil['daftar_gambar']; ?></textarea>
            <br/>
            <h1>Daftar Tabel</h1>
            <textarea name="daftar_tabel" class="ckeditor" id="ckeditor"><?php echo $tampil['daftar_tabel']; ?></textarea>
            <br/>
            <h1>BAB</h1>
            <textarea name="bab" class="ckeditor" id="ckeditor"><?php echo $tampil['bab']; ?></textarea>
            <br/>
        <?php endwhile?>
          <input type="submit" name="simpan" value="submit" class="submit">
        </form>
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
