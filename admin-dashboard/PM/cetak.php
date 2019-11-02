<?php
include '../koneksi.php';

$id = ''; 
        if( isset( $_GET['id'])) {
        $id = $_GET['id']; 
        }
$koneksi = mysqli_connect("localhost","root","","kp") OR DIE (mysqli_connect_error());
$cek = mysqli_query($koneksi,"SELECT * FROM dokumen WHERE id='$id'");
header("Content-Type: application/vnd.msword");
header("content-disposition: attachment;filename=".rand()."Laporan Dokumen.doc");
header("pragma: no-cache");
header("Expires:0");
// if (isset($_POST["word"])) {
//   header("Content-Type: application/vnd.msword");
//   header("content-disposition: attachment;filename=".rand()."Laporan Dokumen.doc");
//   header("pragma: no-cache");
//   header("Expires:0");
//   echo $_POST["title"];
//     echo  $_POST["cover"];
//       echo $_POST["nomor_dokume_tabel_periksa"];
//         echo $_POST["daftar_perubahan"];
//           echo  $_POST["indek_revisi"];
//             echo  $_POST["daftar_halaman_perubahan"];
//               echo  $_POST["daftar_isi"];
//                 echo  $_POST["daftar_gambar"];
//                   echo  $_POST["daftar_tabel"];
//                     echo $_POST["bab"];
// }

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
</head>
<body>
	<div class="container">
		<form action="" method="POST">
      <?php while ($tampil=mysqli_fetch_array($cek)) :?>
            <?php echo $tampil['cover']; ?>
            <?php echo $tampil['nomor_dokume_tabel_periksa']; ?>
            <?php echo $tampil['daftar_perubahan']; ?>
            <?php echo $tampil['indek_revisi']; ?>
            <?php echo $tampil['daftar_halaman_perubahan']; ?>
            <?php echo $tampil['daftar_isi']; ?>
            <?php echo $tampil['daftar_gambar']; ?>
            <?php echo $tampil['daftar_tabel']; ?>
            <?php echo $tampil['bab']; ?>
        <?php endwhile ;?>
	</div>
</body>
</html>

