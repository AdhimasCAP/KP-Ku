<form name="proposal_form" action="<?php echo($_SERVER['PHP_SELF']); ?>" method="post">
 <input type="submit" name="submit_docs" value="Export as MS Word" class="input-button" />
</form>
<?php
  $conn=mysqli_connect("localhost","root","","lele") OR DIE("gagal terhubung ke server");
  $query=mysqli_query($conn,"SELECT * FROM dokumen where id=6");
  while ($doc_body=mysqli_fetch_array($query)) {
     echo "<html>";
    echo $doc_body['cover'];
    echo $doc_body["pemeriksa"];
    echo $doc_body["daftar_perubahan"];
    echo $doc_body["indek_daftar_perubahan"];
    echo $doc_body["halaman_daftar_perubahan"];
    echo $doc_body["daftar_isi"];
    echo $doc_body["daftar_gambar"];
    echo $doc_body["revisi_daftar_perubahan"];
    echo $doc_body["daftar_tabel"];
    echo $doc_body["bab1"];
    echo $doc_body["bab2"];
    echo $doc_body["bab3"];
    echo $doc_body["bab4"];
    echo $doc_body["bab5"];
    echo $doc_body["bab6"];
    echo $doc_body["bab7"];
    echo $doc_body["nomor_dokumen"];
     echo "</html>";
  }
 ?>
<?php
  if(isset($_POST['submit_docs'])){
          header("Content-Type: application/vnd.msword");
          header("content-disposition: attachment;filename=Laporan Dokumen.doc");
          header("pragma: no-cache");
          header("Expires:0");
        //  header("Content-Transfer-Encoding: binary");
        //  header("Content-Length: file_size);
          echo "<html>";
          echo $doc_body['cover'];
          echo $doc_body["pemeriksa"];
          echo $doc_body["daftar_perubahan"];
          echo $doc_body["indek_daftar_perubahan"];
          echo $doc_body["halaman_daftar_perubahan"];
          echo $doc_body["daftar_isi"];
          echo $doc_body["daftar_gambar"];
          echo $doc_body["revisi_daftar_perubahan"];
          echo $doc_body["daftar_tabel"];
          echo $doc_body["bab1"];
          echo $doc_body["bab2"];
          echo $doc_body["bab3"];
          echo $doc_body["bab4"];
          echo $doc_body["bab5"];
          echo $doc_body["bab6"];
          echo $doc_body["bab7"];
          echo $doc_body["nomor_dokumen"];
          echo "</html>";
  }
?>
