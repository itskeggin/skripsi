<?php
include_once 'header.php';
include_once 'includes/nilai.inc.php';
$pro3 = new Nilai($db);
$stmt3 = $pro3->readAll();
include_once 'includes/alternatif.inc.php';
$pro1 = new Alternatif($db);
$stmt1 = $pro1->readAll();
$stmt4 = $pro1->readAll();
include_once 'includes/kriteria.inc.php';
$pro2 = new Kriteria($db);
$stmt2 = $pro2->readAll();
?>
		
		<div class="well" style="background: #ffffff  left bottom fixed;"><div id="container2" ">
		
		<body style="background: #ffffff url(images/bg.jpg) left bottom fixed;">
		<center>
		<br><img width=500 height=150 src='images/logokkmc.png'/></br>
		</center>
		<br></br>
		<br><h2>Sejarah KKMC</h2></br>
		<font face="verdana" size="3">&nbsp &nbsp &nbsp Koperasi Karyawan Minyak Caltex (KKMC) dibentuk pada tanggal 18 Februari 1984 oleh beberapa orang karyawan PT Chevron Pacific Indonesia (PT. CPI) sebagai perintis. Sejarah terbentuknya bermula dari rasa prihatin para perintis karena banyak rekan-rekan mereka karyawan PT.CPI yang terjerat atau berurusan dengan rentenir.
		Dengan semangat gotong royong dan kekeluargaan, para perintis berhasil mengumpulkan uang sebanyak Rp. 60 Juta. Uang sebanyak itu diakui sebagai hutang dan digunakan sebagai modal awal untuk memulai beroperasinya koperasi secara resmi pada tanggal 1 April 1984. Saat ini modal awal tersebut telah berkembang menjadi modal sendiri sebanyak Rp. 103,68 Miliyar.
		Pada saat mulai beroperasi Anggota KKMC hanya 33 orang. Dengan strategi pengembangan anggota yang tidak hanya melibatkan karyawan PT.CPI saja, namun juga karyawan perusahaan-perusahaan yang bernaung di bawah perusahaan induk Chevron, sampai saat ini anggota KKMC sudah mencapai jumlah 5.145 orang.
		</font>
		<br><h2>VISI :</h2></br>
		<font face="verdana" size="3">Menjadikan Koperasi Karyawan Minyak Caltex (KKMC)    sebagai badan usaha koperasi yang dikagumi oleh anggotanya,   mitra kerja dan masyarakat.
		</font>
		<br><h2>MISI :</h2></br>
		<font face="verdana" size="3">Meningkatkan Kesejahteraan anggota melalui pengembangan  dan pemantapan usaha/bisnis KKMC secara professional dengan mengikutsertakan potensi ekonomi anggota, mitra usaha dan   masyarakat.
		</font>
		<br><h2>MOTO : </h2> <h3>DARI ANGGOTA, OLEH ANGGOTA, UNTUK ANGGOTA, DEMI KESEJAHTERAAN ANGGOTA</h3> </br>
		
		<br><h4>Website Resmi KKMC : <a href="http://www.kkmc.co.id/">Klik Disini</a></h4></br>
		
		
		<footer class="text-center">Skripsi Kevien Keggin 2018</footer>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/highcharts.js"></script>
	<script src="js/exporting.js"></script>
	<script>
	
	         
	   </script>
	</body>
</html>