<?php
include_once 'header.php';
include_once 'includes/nilai.inc.php';
$pgn = new Nilai($db);
if($_POST){
	
	include_once 'includes/kriteria.inc.php';
	$eks = new Kriteria($db);

	$eks->pm = $_POST['pm'];
	$eks->nu = $_POST['nu'];
	$eks->ju = $_POST['ju'];
	$eks->pu = $_POST['pu'];
	$eks->kt = $_POST['kt'];
	
	if($eks->insert()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil Tambah Data!</strong> Tambah lagi atau <a href="kriteria.php">lihat semua data</a>.
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
			  <h3>Form Survei</h3>
			</div>
			
			    <form method="post">
				  <div class="form-group">
				    <label for="pm">Peminjam</label>
					<select class="form-control" id="pm" name="pm">
				    	<?php
						$stmt1 = $pgn->readAll();
						while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)){
							extract($row1);
							echo "<option value='{$nm_peminjam}'>{$nm_peminjam}</option>";
						}
					    ?>
				    </select>
				    
				  </div>
				  <div class="form-group">
				    <label for="nu">Nama Usaha</label>
				    <input type="text" class="form-control" id="nu" name="nu" required>
				  </div>
				  <div class="form-group">
				    <label for="ju">Jenis Usaha</label>
				    <input type="text" class="form-control" id="ju" name="ju" required>
				  </div>
				  <div class="form-group">
				    <label for="pu">Pendapatan Usaha(/bulan)</label>
				    <input type="text" class="form-control" id="pu" name="pu"  required>
				  </div>
				  <div class="form-group">
				    <label for="kt">Keterangan</label>
				    <textarea class="form-control" id="kt" name="kt" rows="3" required></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary">Simpan</button>
				  <button type="button" onclick="location.href='kriteria.php'" class="btn btn-success">Kembali</button>
				</form>
			  
		  </div>
		  </div>
		  <div class="col-xs-12 col-sm-3 col-md-3">
		  	<?php include_once 'sidebar.php'; ?>
		</div>
		<?php
include_once 'footer.php';
?>