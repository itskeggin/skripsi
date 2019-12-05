<?php
include_once 'header.php';
include_once 'includes/nilai.inc.php';
$pro = new Nilai($db);
$stmt = $pro->readAll();
?>
<div class="well">
	<div class="row">
		<div class="col-md-6 text-left">
			<h4>Data Rooting Profile</h4>
		</div>
		<div class="col-md-6 text-right">
			<button onclick="location.href='nilai-baru.php'" class="btn btn-primary">Tambah Data</button>
		</div>
	</div>
	<br/>

	<table width="100%" class="table table-striped table-bordered" id="tabeldata">
        <thead>
            <tr>
                <th width="30px">No</th>
                <th>Nama Peminjam</th>
                <th>Alamat</th>
				<th>Lama Bekerja</th>
                <th>Kontak</th>
				<th>Nama Usaha</th>
                <th>Alamat Usaha</th>
				<th>Kredit</th>
                <th>Plafon</th>
                <th width="100px">Aksi</th>
            </tr>
        </thead>

        <tfoot>
            <tr>
                <th>No</th>
                <th>Nama Peminjam</th>
                <th>Alamat</th>
				<th>Lama Bekerja</th>
                <th>Kontak</th>
				<th>Nama Usaha</th>
                <th>Alamat Usaha</th>
				<th>Kredit</th>
                <th>Plafon</th>
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
                <td><?php echo $row['nm_peminjam'] ?></td>
                <td><?php echo $row['alamat'] ?></td>
				<td><?php echo $row['lama_bekerja'] ?>&nbsp Tahun</td>
                <td><?php echo $row['kontak'] ?></td>
				<td><?php echo $row['nm_usaha'] ?></td>
                <td><?php echo $row['alamat_usaha'] ?></td>
				<td>Rp.<?php echo $row['kredit'] ?></td>
                <td>Rp.<?php echo $row['plafon'] ?></td>
                <td class="text-center">
					<a href="nilai-ubah.php?id=<?php echo $row['id_rooting'] ?>" class="btn btn-warning"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
					<a href="nilai-hapus.php?id=<?php echo $row['id_rooting'] ?>" onclick="return confirm('Yakin ingin menghapus data')" class="btn btn-danger"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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