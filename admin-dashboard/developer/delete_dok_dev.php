<?php 
include '../koneksi.php';
$id = ''; 
  if( isset( $_GET['id'])) {
  $id = $_GET['id']; 
  } 
  mysqli_query($koneksi,"delete from dokumen where id='$id'");
 
header("location:dokumen_dev.php?pesan=hapus");
?>