<?php

$conn = mysqli_connect("localhost","root","","kpku") OR DIE (mysqli_connect_error());
$cek = mysqli_query($conn,"SELECT * FROM tamplate WHERE id=2");

if (isset($_POST["submit"])) {
  $title = $_POST["title"];
    $cover = $_POST["cover"];
      $nomor_dokume_tabel_periksa = $_POST["nomor_dokume_tabel_periksa"];
        $daftar_perubahan = $_POST["daftar_perubahan"];
          $indek_revisi = $_POST["indek_revisi"];
            $daftar_halaman_perubahan = $_POST["daftar_halaman_perubahan"];
              $daftar_isi = $_POST["daftar_isi"];
                $daftar_gambar = $_POST["daftar_gambar"];
                  $daftar_tabel = $_POST["daftar_tabel"];
                    $bab1 = $_POST["bab1"];
                      $bab2 = $_POST["bab2"];
                          $bab3 = $_POST["bab3"];
                            $bab4 = $_POST["bab4"];
                              $bab5 = $_POST["bab5"];
                                $bab6 = $_POST["bab6"];
                                  $bab7 = $_POST["bab7"];
  if( trim(!empty($title)) && trim(!empty($cover))
   && trim(!empty($nomor_dokume_tabel_periksa))
   && trim(!empty($daftar_perubahan))
   && trim(!empty($indek_revisi))
   && trim(!empty($daftar_halaman_perubahan))
   && trim(!empty($daftar_isi))
   && trim(!empty($daftar_gambar))
   && trim(!empty($daftar_tabel))
   && trim(!empty($bab1))
   && trim(!empty($bab2))
   && trim(!empty($bab4))
   && trim(!empty($bab5))
   && trim(!empty($bab6))
   && trim(!empty($bab7)) )	{

  $query = mysqli_query($conn,"INSERT INTO tamplate VALUES(
    '','$title','$cover','$nomor_dokume_tabel_periksa','$daftar_perubahan','$indek_revisi',
    '$daftar_halaman_perubahan','$daftar_isi','$daftar_gambar','$daftar_tabel','$bab1','$bab2','$bab3','$bab4','$bab5',
    '$bab6','$bab7'
  )");
  header("location:Tamplate.php?sukses");
}else {
  header("location:Tamplate.php?error");
}
$error = true;
}
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
    <!-- kode pesan error dan sukses -->
    <?php if(isset($_GET["error"])){ ?>
       <div id="error" class="wow swing">
           <h1>HARAP DISI TERLEBIH DAHULU</h1>
             <?php header("location:Tamplate.php"); ?>
       </div>
     <?php }else if(isset($_GET["sukses"])){?>
        <div id="sukses" class="wow swing">
            <h1>Berhasil</h1>
            <?php header("location:Tamplate.php"); ?>
           </div>
         <?php } ?>
		<form action="" method="POST">
      <?php while ($tampil=mysqli_fetch_array($cek)) :?>
      <div class="hr"></div> <br>
          <input type="hidden" name="" value="<?php echo $tampil['id'];?>">
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
          <!-- </div> -->
          <!-- <div class="daftar_tabel"> -->
            <h1>Daftar Tabel</h1>
            <textarea name="daftar_tabel" class="ckeditor" id="ckeditor"><?php echo $tampil['daftar_tabel']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab1"> -->
            <h1>BAB 1 Pendahuluan</h1>
            <textarea name="bab1" class="ckeditor" id="ckeditor"><?php echo $tampil['bab1']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab2"> -->
            <h1>BAB 2 Lingkungan Pengujian Aplikasi</h1>
            <textarea name="bab2" class="ckeditor" id="ckeditor"><?php echo $tampil['bab2']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab 3"> -->
            <h1>BAB 3 Identifikasi dan Perencanaan modul</h1>
            <textarea name="bab3" class="ckeditor" id="ckeditor" ><?php echo $tampil['bab3']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab 4"> -->
            <h1>Bab 4 Deskripsi Dan hasil uji</h1>
            <textarea name="bab4" class="ckeditor" id="ckeditor"><?php echo $tampil['bab4']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab 5 kecatatan applikasi"> -->
            <h1>Bab 5 Daftar Perubahan Indeks Revisi</h1>
            <textarea name="bab5" class="ckeditor" id="ckeditor"><?php echo $tampil['bab5']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab 6 matriks keamanan user"> -->
            <h1>Bab 6 Daftar Perubahan Indeks Revisi</h1>
            <textarea name="bab6" class="ckeditor" id="ckeditor"><?php echo $tampil['bab6']; ?></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab 7 matriks pelacakan pengujain applikasi"> -->
            <h1>Bab 7 MATRIKS PELACAKAN PENGUJIAN APLIKASI</h1>
            <textarea name="bab7" class="ckeditor" id="ckeditor"><?php echo $tampil['bab7']; ?></textarea>
            <br/>
          <!-- </div> -->
        <?php endwhile?>
          <input type="submit" name="submit" value="submit" class="submit">
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
