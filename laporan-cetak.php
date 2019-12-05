<?php
require('includes/fpdf/fpdf.php');

class PDF extends FPDF{
	
	function PDF($orientation='P', $unit='mm', $size='A4'){
	    $this->FPDF($orientation,$unit,$size);
	}
	
	function Header(){
	    $this->SetFont('Times','B',14);
	    $this->Cell(80);
	    $this->Cell(30,10,'LAPORAN SURVEI',0,0,'C');
		$this->Ln(10);
		$this->Cell(185,10,'PROGRAM PINJAMAN USAHA PRODUKTIF',0,0,'C');
		$this->Ln(10);
		$this->Cell(185,10,'KOPERASI KARYAWAN MINYAK CALTEX RUMBAI',0,0,'C');
	    $this->Ln(20);
	}
	
	function Footer(){
	    $this->SetY(-15);
	    $this->SetFont('Times','',8);
	    $this->Cell(0,10,$this->PageNo(),0,0,'R');
	}
	
}

include "includes/config.php";
session_start();
if(!isset($_SESSION['nama_lengkap'])){
	echo "<script>location.href='index.php'</script>";
}
$config = new Config();
$db = $config->getConnection();

include_once 'includes/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAll();
$stmt1x = $pro1->readAll();
$stmt1y = $pro1->readAll();
include_once 'includes/kriteria.inc.php';
$pro2 = new Kriteria($db);
$stmt2 = $pro2->readAll();
$stmt2x = $pro2->readAll();
$stmt2y = $pro2->readAll();
$stmt2yx = $pro2->readAll();
include_once 'includes/rangking.inc.php';
$pro = new Rangking($db);
$stmt = $pro->readKhusus();
$stmtx = $pro->readKhusus();
$stmty = $pro->readKhusus();

$pdf = new PDF();
$pdf->AddPage();
$pdf->SetFont('Times','B',12);
$pdf->Cell(40,10,'LAPORAN SURVEI',0,0,'L');
$pdf->ln();
$pdf->SetFont('Times','B',12);
$pdf->Cell(20,10,'ID Survei',0,0,'L');
$pdf->Cell(50,10,'Nama Peminjam',0,0,'C');
$pdf->Cell(35,10,'Tanggal Survei',0,0,'L');
$pdf->Cell(35,10,'Daerah Survei',0,0,'L');
$pdf->Cell(35,10,'Nama Surveyor',0,0,'L');



$pdf->ln();
$pdf->SetFont('Times','',12);

while ($row1x = $stmt1x->fetch(PDO::FETCH_ASSOC)){
	$pdf->Cell(20,10,$row1x['id_survei'],1,0,'L');
	$pdf->Cell(50,10,$row1x['peminjam'],1,0,'L');
	$pdf->Cell(35,10,$row1x['tgl_survei'],1,0,'L');
	$pdf->Cell(35,10,$row1x['daerah_survei'],1,0,'L');
	$pdf->Cell(35,10,$row1x['nm_surveyor'],1,0,'L');
	$stmtrx = $pro->readR($row1x['id_laporan']);
	while ($rowrx = $stmtrx->fetch(PDO::FETCH_ASSOC)){
		$pdf->Cell(30,7,$rowrx['peminjam'],1,0,'L');
	}
	$pdf->ln();
}

$pdf->Output();
?>