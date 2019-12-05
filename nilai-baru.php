<?php
include_once 'header.php';
if($_POST){
	
	include_once 'includes/nilai.inc.php';
	$eks = new Nilai($db);

	$eks->np = $_POST['np'];
	$eks->al = $_POST['al'];
	$eks->lb = $_POST['lb'];
	$eks->kt = $_POST['kt'];
	$eks->nu = $_POST['nu'];
	$eks->au = $_POST['au'];
	$eks->kd = $_POST['kd'];
	$eks->pl = $_POST['pl'];
	
	if($eks->insert()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil Tambah Data!</strong> Tambah lagi atau <a href="nilai.php">lihat semua data</a>.
</div>
<?php
	}
	
	else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Tambah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
	}
}
?>
		<div class="row">
		  <div class="col-xs-12 col-sm-6 col-md-6">
		  <div class="well">
		  	<div class="page-header">
			  <h3>Tambah Rooting Profile</h3>
			</div>
			
			    <form method="post">
				  <div class="form-group">
				    <label for="np">Nama Peminjam</label>
				    <input type="text" class="form-control" id="np" name="np" required>
				  </div>
				  <div class="form-group">
				    <label for="al">Alamat</label>
				    <input type="text" class="form-control" id="al" name="al" required>
				  </div>
				  <div class="form-group">
				    <label for="lb">Lama Bekerja</label>
				    <input type="text" class="form-control" id="lb" name="lb" required>
				  </div>
				  <div class="form-group">
				    <label for="kt">Kontak</label>
				    <input type="text" class="form-control" id="kt" name="kt" required>
				  </div>
				  <div class="form-group">
				    <label for="nu">Nama Usaha</label>
				    <input type="text" class="form-control" id="nu" name="nu" required>
				  </div>
				  <div class="form-group">
				    <label for="au">Alamat Usaha</label>
				    <input type="text" class="form-control" id="au" name="au" required>
				  </div>
				  <div class="form-group">
				    <label for="kd">Kredit</label>
				    <input type="text" class="form-control" id="kd" name="kd" required>
				  </div>
				  <div class="form-group">
				    <label for="pl">Plafon</label>
				    <input type="text" class="form-control" id="pl" name="pl" required>
				  </div>
				  <button type="submit" class="btn btn-primary">Simpan</button>
				  <button type="button" onclick="location.href='nilai.php'" class="btn btn-success">Kembali</button>
				</form>
			  
		  </div>
		  </div>
		  <div class="col-xs-12 col-sm-3 col-md-3">
		  	<?php include_once 'sidebar.php'; ?>
		</div>
		<?php
include_once 'footer.php';
?>