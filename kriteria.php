<?php
include_once 'header.php';
include_once 'includes/kriteria.inc.php';
$pro = new Kriteria($db);
$stmt = $pro->readAll();
?>
<div class="well">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Data Form Survei</h4>
		</div>
		<div class="col-md-6 text-right">
			<button onclick="location.href='kriteria-baru.php'" class="btn btn-primary">Tambah Data</button>
		</div>
	</div>
	<br/>

	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="30px">No</th>
                <th>Nama Peminjam</th>
                <th>Nama Usaha</th>
                <th>Jenis Usaha</th>
				<th>Pendapatan Usaha (/bulan)</th>
                <th>Keterangan</th>
                <th width="100px">Aksi</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Nama Usaha</th>
                <th>Jenis Usaha</th>
				<th>Pendapatan Usaha (/bulan)</th>
                <th>Keterangan</th>
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
                <td><?php echo $row['peminjam'] ?></td>
                <td><?php echo $row['nm_usaha'] ?></td>
                <td><?php echo $row['jenis_usaha'] ?></td>
				<td>Rp.<?php echo $row['p_usaha'] ?></td>
                <td><?php echo $row['keterangan'] ?></td>
                <td class="text-center">
					<a href="kriteria-ubah.php?id=<?php echo $row['id_survei'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a href="kriteria-hapus.php?id=<?php echo $row['id_survei'] ?>" onclick="return confpmm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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