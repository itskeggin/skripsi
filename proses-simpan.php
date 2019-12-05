 <!-- Aplikasi CRUD
 ************************************************
 * Developer    : Indra Styawantoro
 * Company      : Indra Studio
 * Release Date : 1 Maret 2016
 * Website      : http://www.indrasatya.com, http://www.kulikoding.net
 * E-mail       : indra.setyawantoro@gmail.com
 * Phone        : +62-856-6991-9769
 * BBM          : 7679B9D9
 -->

<?php
// Panggil koneksi database
require_once "config.php";

if (isset($_POST['simpan'])) {
	$id          = mysql_real_escape_string(trim($_POST['id_laporan']));
	$is          = mysql_real_escape_string(trim($_POST['id_survei']));
	$pm  = mysql_real_escape_string(trim($_POST['peminjam']));

	$tanggal      = $_POST['tgl_survei'];
	$tgl          = explode('-',$tanggal);
	$tgl_survei = $tgl[2]."-".$tgl[1]."-".$tgl[0];

	$ds 		= $_POST['daerah_survei'];
	$ns         = $_POST['nm_surveyor'];

	// perintah query untuk menyimpan data ke tabel is_siswa
	$query = mysql_query("INSERT INTO tb_laporan(id_laporan,
											 	id_survei,
												peminjam,
												tgl_survei,
												daerah_survei,
												nm_surveyor)	
										VALUES(	'$id',
												'$is',
												'$pm',
												'$tgl_survei',
												'$ds',
												'$ns')");		

	// cek hasil query
	if ($query) {
		// jika berhasil tampilkan pesan berhasil insert data
		header('location: alternatif-baru1.php?alert=2');
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: alternatif-baru1.php?alert=1');
	}						
}
?>