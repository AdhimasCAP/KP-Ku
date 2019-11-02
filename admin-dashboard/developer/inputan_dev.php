<?php include 'header.php'; ?>

<div class="content-wrapper">

  <section class="content-header">
    <h1>
      Dashboard
      <small>Control panel</small>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
      <li class="active">Dashboard</li>
    </ol>
  </section>


  <section class="content">

    <div class="row">

      <div class="col-lg-3 col-xs-6">
        <div class="small-box bg-yellow">
          <div class="inner">
            <?php 
            $developer = mysqli_query($koneksi,"SELECT * FROM user where pilih='Developer'");
            ?>
            <h3><?php echo mysqli_num_rows($developer); ?></h3>
            <p>Jumlah Developer</p>
          </div>
          <div class="icon">
            <i class="ion ion-person-add"></i>
          </div>
          <a href="developer.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
        </div>
      </div>

    </div>

    <div class="row">    
      <section class="col-lg-7">

      <div class="box box-info">
          <div class="box-header">
            <h3 class="box-title">Detail Login</h3>
          </div>
          <div class="box-body">
            <table class="table table-bordered">
              <tr>
                <th width="30%">Email</th>
                <td><?php echo $_SESSION['email']; ?></td>
              </tr>
              <tr>
                <th>Level Hak Akses</th>
                <td><?php echo $_SESSION['pilih']; ?></td>
              </tr>
            </table>
          </div>
        </div>
      </section>
    </div>
  </section>


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
      <div class="daftar perubahan indeks revisi">
        <h1>Daftar Perubahan Indeks Revisi</h1>
        <textarea name="revisi_indek_daftar_perubahan" class="ckeditor" id="ckeditor"></textarea>
  			<br/>
      </div>
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

</div>
<?php include 'footer.php'; ?>