<?php
include_once 'header.php';
include_once 'includes/alternatif.inc.php';
$pro = new Alternatif($db);
$stmt = $pro->readAll();
?>
<div class="well">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Laporan Survei</h4>
		</div>
		<div class="col-md-6 text-right">
			<button onclick="location.href='alternatif-baru.php'" class="btn btn-primary">Tambah Data</button>
		</div>
	</div>
	<br/>

	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="30px">No</th>
                <th>ID Survei</th>
                <th>Nama Peminjam</th>
				<th>Tanggal Survei</th>
                <th>Daerah Survei</th>
				<th>Nama Surveyor</th>
                <th width="100px">Aksi</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>No</th>
                <th>ID Survei</th>
                <th>Nama Peminjam</th>
				<th>Tanggal Survei</th>
                <th>Daerah Survei</th>
				<th>Nama Surveyor</th>
                <th>Aksi</th>
            </tr>
        </tfoot>

        <tbody>
<?php
$no=1;
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)){
?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $row['id_survei'] ?></td>
                <td><?php echo $row['peminjam'] ?></td>
				<td><?php echo $row['tgl_survei'] ?></td>
                <td><?php echo $row['daerah_survei'] ?></td>
				<td><?php echo $row['nm_surveyor'] ?></td>
                <td class="text-center">
					<a href="alternatif-ubah.php?id=<?php echo $row['id_laporan'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a href="alternatif-hapus.php?id=<?php echo $row['id_laporan'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
			    </td>
            </tr>
<?php
}
?>
        </tbody>

    </table>	
</div>	
<?php
include_once 'footer.php';
?>