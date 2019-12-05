<?php
include_once 'header.php';
?>
		<div class="row">
		  <div class="col-xs-12 col-sm-6 col-md-6">
		  <div class="well">
		  	<div class="page-header">
			  <h3>Form Survei</h3>
			</div>
			<?php if($_POST) include'kriteria-.inc.php'?>
			    <form method="post" action="?m=-kriteria-baru" enctype="multipart/form-data">
								
				  <div class="form-group">
				    <label>Peminjam <span class="text-danger">*</span></label>
					<select class="form-control" name="id_rooting"/>
				    	<?=get_rooting_option($_POST[id_rooting])?>
				    </select>
				  </div>
				  <div class="form-group">
				    <label>Nama Usaha</label>
				    <input class="form-control" type="text" name="nm_usaha" value="<?=$_POST[nm_usaha]?>"/>
				  </div>
				  <div class="form-group">
				    <label>Jenis Usaha</label>
				    <input class="form-control" type="text" name="jenis_usaha" value="<?=$_POST[jenis_usaha]?>"/>
				  </div>
				  <div class="form-group">
				    <label>Photo Usaha <span class="text-danger">*</span></label>
					<input class="form-control" type="file" name="p_usaha"/>
				  </div>
				  <div class="form-group">
				    <label>Keterangan</label>
				    <textarea class="form-control" name="keterangan" rows="3"><?=$_POST['keterangan']?></textarea>
				  </div>
				  <button type="submit" class="btn btn-primary">Simpan</button>
				  <button type="button" onclick="location.href='-kriteria.php'" class="btn btn-success">Kembali</button>
				</form>
			  
		  </div>
		  </div>
		  </div>
		  <div class="col-xs-12 col-sm-3 col-md-3">
		  	<?php include_once 'sidebar.php'; ?>
		</div>
		<?php
include_once 'footer.php';
?>