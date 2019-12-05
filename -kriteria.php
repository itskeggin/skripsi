<?php
include_once 'header.php';
?>
<div class="well">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Data Form Survei</h4>
		</div>
		<form class="form-inline">
            <input type="hidden" name="m" value="survei" />
            <div class="form-group">
                <input class="form-control" type="text" placeholder="Pencarian. . ." name="q" value="<?=$_GET['q']?>" />            
                <button class="btn btn-success"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>            
                <a class="btn btn-primary" href="-kriteria-baru.php"><span class="glyphicon glyphicon-plus"></span> Tambah</a>
            </div>
        </form>
	</div>
	<br/>

	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="30px">No</th>
                <th>Peminjam</th>
                <th>Nama Usaha</th>
                <th>Jenis Usaha</th>
				<th>Photo Usaha</th>
                <th>Keterangan</th>
                <th width="100px">Aksi</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>No</th>
                <th>Peminjam</th>
                <th>Nama Usaha</th>
                <th>Jenis Usaha</th>
				<th>Photo Usaha</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </tfoot>

        <tbody>
		 <?php
        $q = esc_field($_GET['q']);
        $pg = new Paging();        
        $limit = 25;
        $offset = $pg->get_offset($limit, $_GET[page]);
        
        $rows = $db->get_results("SELECT g.*, t.nm_peminjam 
            FROM tb_galeri g INNER JOIN tb_rooting t ON t.id_rooting=g.id_rooting
            WHERE nm_peminjam LIKE '%$q%' ORDER BY nm_peminjam LIMIT $offset, $limit");
        
        $no = $offset;
        
        $jumrec = $db->get_var("SELECT COUNT(*) 
            FROM tb_galeri g INNER JOIN tb_rooting t ON t.id_rooting=g.id_rooting 
            WHERE nm_peminjam LIKE '%$q%'");
        
        foreach($rows as $row):
        ?>
            <tr>
                <td><?=++$no?></td>
                <td><?=$row->peminjam?></td>
				<td><?=$row->nm_usaha?></td>
				<td><?=$row->jenis_usaha?></td>
				<td><img class="thumbnail" height="60" src="images/survei/small_<?=$row->p_usaha?>" /></td>
				<td><?=$row->keterangan?></td>
                <td class="text-center">
					<a href="kriteria-ubah.php?id=<?php echo $row['id_survei'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a href="kriteria-hapus.php?id=<?php echo $row['id_survei'] ?>" onclick="return confpmm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			    </td>
            </tr>
<?php endforeach;    ?>
        </tbody>

    </table>
</div>	
<?php
include_once 'footer.php';
?>