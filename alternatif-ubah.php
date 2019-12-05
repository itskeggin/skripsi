<?php
include_once 'header.php';
include_once 'includes/kriteria.inc.php';
$pgn = new Kriteria($db);

$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'includes/alternatif.inc.php';
$eks = new Alternatif($db);

$eks->id = $id;

$eks->readOne();

if($_POST){

	$eks->is = $_POST['is'];
	$eks->pm = $_POST['pm'];
	$eks->ts = $_POST['ts'];
	$eks->ds = $_POST['ds'];
	$eks->ns = $_POST['ns'];
	
	if($eks->update()){
		echo "<script>location.href='alternatif.php'</script>";
	} else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Ubah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
	}
}
?>
		<div class="row">
		  <div class="col-xs-12 col-sm-6 col-md-6">
		  <div class="well">
		  	<div class="page-header">
			  <h3>Ubah Laporan Survei</h3>
			</div>
			
			    <form method="post">
				<div class="form-group">
				    <label for="is">ID Survei</label>
				    <select class="form-control" id="is" name="is">
				    	<option><?php echo $eks->is; ?></option>
				    	<?php
						$stmt1 = $pgn->readAll();
						while ($row1 = $stmt1->fetch(PDO::FETCH_ASSOC)){
							extract($row1);
							echo "<option value='{$id_survei}'>{$id_survei}</option>";
						}
					    ?>
				    </select>
				  </div>
				<div class="form-group">
				    <label for="pm">Nama Peminjam</label>
				    <select class="form-control" id="pm" name="pm">
				    	<option><?php echo $eks->pm; ?></option>
				    	<?php
						$stmt2 = $pgn->readAll();
						while ($row2 = $stmt2->fetch(PDO::FETCH_ASSOC)){
							extract($row2);
							echo "<option value='{$peminjam}'>{$peminjam}</option>";
						}
					    ?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="ts">Tanggal Survei</label>
					<div class="input-group">
				    <input type="date" class="form-control" id="ts" name="ts" value="<?php echo $eks->ts; ?>">
					<span class="input-group-addon">
                    <i class="glyphicon glyphicon-calendar"></i>
                  </span>
				  </div>
				  </div>
				  <div class="form-group">
				    <label for="ds">Daerah Survei</label>
				    <select class="form-control" id="ds" name="ds" value="<?php echo $eks->ds; ?>">
				    	<option value='pekanbaru'>Pekanbaru</option>
				    	<option value='bengkalis'>Bengkalis</option>
						<option value='inhil'>Indragiri Hilir</option>
				    	<option value='inhu'>Indragiri Hulu</option>
						<option value='kampar'>Kampar</option>
				    	<option value='kepulauan meranti'>Kepulauan Meranti</option>
						<option value='kuantan singingi'>Kuantan Singingi</option>
				    	<option value='pelalawan'>Pelalawan</option>
						<option value='rohil'>Rokan Hilir</option>
				    	<option value='rohul'>Rokan Hulu</option>
						<option value='siak'>Siak</option>
						<option value='dumai'>Dumai</option>
						<option value='sumbar'>Sumatera Barat</option>
						<option value='dll'>DLL</option>
						
				    </select>
				  </div>
				  <div class="form-group">
				    <label for="ns">Nama Surveyor</label>
				    <input type="text" class="form-control" id="ns" name="ns" value="<?php echo $eks->ns; ?>">
				  </div>				  
				  
				  <button type="submit" class="btn btn-primary">Ubah</button>
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