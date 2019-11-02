<?php
// session_start();
// if (!isset($_SESSION["login"])) {
//   header("Location:login.php");
// }
  // require "function.php";
      // $id = $_GET["id"];
      //query data mahasiswa berdasarkan query
      $conn = mysqli_connect("localhost","root","","kpku") or die("Gagal Terhubung");
        $result = mysqli_query($conn,"SELECT * FROM tamplate WHERE id =1");
        $tampilkan = [];
        while ($tampil = mysqli_fetch_array($result)) {
          $tampilkan[] = $tampil;
          echo var_dump($tampil);
        }
        return $tampilkan;

  if(isset($_POST["kirim"])) {
    if (ubah($_POST)>0) {
      echo "
          <script>
          alert('Data Berhasil Di ubah');
          document.location.href='index.php';
          </script>
      ";
    }
    else {
      echo "
          <script>
          alert('Data Gagal Di ubah');
          document.location.href='index.php';
          </script>
      ";
    }
    }
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Input From ubah mahasiswa</title>
  </head>
  <body>
    <h1>ubah Data Mahasiswa</h1>
    <form action="" method="POST">
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
            <textarea name="cover" class="ckeditor" id="ckeditor" value="<?php echo $tampil['cover']; ?>"></textarea>
            <hr>
            <br><br>
          <!-- </div> -->
          <!-- <div class="Nomor dokumen"> -->
            <h1>Nomor Dokumen</h1>
            <textarea name="nomor_dokume_tabel_periksa" class="ckeditor" id="ckeditor" value="<?php echo $tampil['nomor_dokume_tabel_periksa']; ?>"></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_perubahan"> -->
            <h1>Daftar Perubahan </h1>
            <textarea name="daftar_perubahan" class="ckeditor" id="ckeditor" value="<?php echo $tampil['daftar_perubahan']; ?>"></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="indek_revisi"> -->
            <h1>Indeks Revisi</h1>
            <textarea name="indek_revisi" class="ckeditor" id="ckeditor" value="<?php echo $tampil['indek_revisi']; ?>"></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_halaman_perubahan"> -->
            <h1>Daftar Halaman Perubahan</h1>
            <textarea name="daftar_halaman_perubahan" class="ckeditor" id="ckeditor" value="<?php echo $tampil['daftar_halaman_perubahan']; ?>"></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_isi"> -->
            <h1>Daftar Isi</h1>
            <textarea name="daftar_isi" class="ckeditor" id="ckeditor" value="<?php echo $tampil['daftar_isi']; ?>"></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_gambar"> -->
            <h1>Daftar Gambar</h1>
            <textarea name="daftar_gambar" class="ckeditor" id="ckeditor" value="<?php echo $tampil['daftar_gambar']; ?>"></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="daftar_tabel"> -->
            <h1>Daftar Tabel</h1>
            <textarea name="daftar_tabel" class="ckeditor" id="ckeditor" value="<?php echo $tampil['daftar_tabel']; ?>"></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab1"> -->
            <h1>BAB 1 Pendahuluan</h1>
            <textarea name="bab1" class="ckeditor" id="ckeditor" value="<?php echo $tampil['bab1']; ?>"></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab2"> -->
            <h1>BAB 2 Lingkungan Pengujian Aplikasi</h1>
            <textarea name="bab2" class="ckeditor" id="ckeditor" value="<?php echo $tampil['bab2']; ?>"></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab 3"> -->
            <h1>BAB 3 Identifikasi dan Perencanaan modul</h1>
            <textarea name="bab3" class="ckeditor" id="ckeditor" value="<?php echo $tampil['bab3']; ?>"></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab 4"> -->
            <h1>Bab 4 Deskripsi Dan hasil uji</h1>
            <textarea name="bab4" class="ckeditor" id="ckeditor" value="<?php echo $tampil['bab4']; ?>"></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab 5 kecatatan applikasi"> -->
            <h1>Bab 5 Daftar Perubahan Indeks Revisi</h1>
            <textarea name="bab5" class="ckeditor" id="ckeditor" value="<?php echo $tampil['bab5']; ?>"></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab 6 matriks keamanan user"> -->
            <h1>Bab 6 Daftar Perubahan Indeks Revisi</h1>
            <textarea name="bab6" class="ckeditor" id="ckeditor" value="<?php echo $tampil['bab6']; ?>"></textarea>
            <br/>
          <!-- </div> -->
          <!-- <div class="bab 7 matriks pelacakan pengujain applikasi"> -->
            <h1>Bab 7 MATRIKS PELACAKAN PENGUJIAN APLIKASI</h1>
            <textarea name="bab7" class="ckeditor" id="ckeditor" value="<?php echo $tampil['bab7']; ?>"></textarea>
            <br/>
          <!-- </div> -->
          <button type="submit" name="submit" value="submit" class="submit"></buttons>
        </form>
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
