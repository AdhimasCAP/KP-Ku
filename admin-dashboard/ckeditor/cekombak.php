<?php
  $conn=mysqli_connect("localhost","root","","new_dkp") or die (mysqli_connect_error());

  $query = mysqli_query($conn,"SELECT * FROM dokumen where id =6");
  header("Content-Type: application/vnd.msword");
  header("content-disposition: attachment;filename=laporan.doc");
  $rows=[];
  while ($row=mysqli_fetch_assoc($query)) {
    $rows[]=$row;
    echo $row["description"];
  }
  return $rows;
//  if (isset($_POST['download'])) {
    // $templateProcessor = new TemplateProcessor('contoh_laporan.docx');
  //}
?>
