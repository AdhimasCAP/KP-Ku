<?php 
include '../koneksi.php';
$id = ''; 
  if( isset( $_GET['id'])) {
  $id = $_GET['id']; 
  } 
  mysqli_query($koneksi,"delete from tamplate where id='$id'");
 
header("location:lap_tes.php?pesan=hapus");
?>