<?php

$conn = mysqli_connect("localhost","root","","kpku") OR DIE (mysqli_connect_error());
$cek = mysqli_query($conn,"SELECT * FROM dokumen WHERE id=1");
if (isset($_POST["word"])) {
  header("Content-Type: application/vnd.msword");
  header("content-disposition: attachment;filename=".rand()."Laporan Dokumen.doc");
  header("pragma: no-cache");
  header("Expires:0");
  echo $_POST["title"];
    echo  $_POST["cover"];
      echo $_POST["nomor_dokume_tabel_periksa"];
        echo $_POST["daftar_perubahan"];
          echo  $_POST["indek_revisi"];
            echo  $_POST["daftar_halaman_perubahan"];
              echo  $_POST["daftar_isi"];
                echo  $_POST["daftar_gambar"];
                  echo  $_POST["daftar_tabel"];
                    echo $_POST["bab1"];
                      echo $_POST["bab2"];
                          echo  $_POST["bab3"];
                            echo  $_POST["bab4"];
                              echo  $_POST["bab5"];
                                echo  $_POST["bab6"];
                                  echo  $_POST["bab7"];

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ckeditor Blog</title>
</head>
<body>
	<div class="container">
		<h2>Lihat Dokumen Dokumen</h2>
		<form action="" method="POST">
      <?php while ($tampil=mysqli_fetch_array($cek)) :?>
      <div class="hr"></div> <br>
          <!-- <div class="title">
                 <h1>Title</h1>
                    <?php// echo $tampil['title']; ?>
                 <hr>
                 <br><br>
          </div> -->
          <br><br>
          <!-- <div class="cover"> -->
            <!-- <h1>COVER</h1> -->
            <?php echo $tampil['cover']; ?>
            <br><br>
          <!-- </div> -->
          <!-- <div class="Nomor dokumen"> -->
            <!-- <h1>Nomor Dokumen</h1> -->
            <?php echo $tampil['nomor_dokume_tabel_periksa']; ?>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_perubahan"> -->
            <!-- <h1>Daftar Perubahan </h1> -->
            <?php echo $tampil['daftar_perubahan']; ?>
            <br/>
          <!-- </div> -->
          <!-- <div class="indek_revisi"> -->
            <!-- <h1>Indeks Revisi</h1> -->
            <?php echo $tampil['indek_revisi']; ?>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_halaman_perubahan"> -->
            <!-- <h1>Daftar Halaman Perubahan</h1> -->
            <?php echo $tampil['daftar_halaman_perubahan']; ?>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_isi"> -->
            <!-- <h1>Daftar Isi</h1> -->
            <?php echo $tampil['daftar_isi']; ?>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_gambar"> -->
            <!-- <h1>Daftar Gambar</h1> -->
            <?php echo $tampil['daftar_gambar']; ?>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_tabel"> -->
            <!-- <h1>Daftar Tabel</h1> -->
            <?php echo $tampil['daftar_tabel']; ?>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab1"> -->
            <!-- <h1>BAB 1 Pendahuluan</h1> -->
            <?php echo $tampil['bab1']; ?>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab2"> -->
            <!-- <h1>BAB 2 Lingkungan Pengujian Aplikasi</h1> -->
            <?php echo $tampil['bab2']; ?>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab 3"> -->
            <!-- <h1>BAB 3 Identifikasi dan Perencanaan modul</h1> -->
            <?php echo $tampil['bab3']; ?>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab 4"> -->
            <!-- <h1>Bab 4 Deskripsi Dan hasil uji</h1> -->
            <?php echo $tampil['bab4']; ?><br/>
          <!-- </div> -->
          <!-- <div class="bab 5 kecatatan applikasi"> -->
            <!-- <h1>Bab 5 Daftar Perubahan Indeks Revisi</h1> -->
          <?php echo $tampil['bab5']; ?><br/>
          <!-- </div> -->
          <!-- <div class="bab 6 matriks keamanan user"> -->
            <!-- <h1>Bab 6 Daftar Perubahan Indeks Revisi</h1> -->
          <?php echo $tampil['bab6']; ?><br/>
          <!-- </div> -->
          <!-- <div class="bab 7 matriks pelacakan pengujain applikasi"> -->
            <!-- <h1>Bab 7 MATRIKS PELACAKAN PENGUJIAN APLIKASI</h1> -->
          <?php echo $tampil['bab7']; ?><br/>
          <!-- </div> -->
        <?php endwhile?>
          <!-- <input type="submit" name="submit" value="submit" class="submit"> -->
          <button type="submit" name="word">Eksport to word</button>
        </form>
        <a href="#">Kembali</a>
	</div>
</body>
</html>
