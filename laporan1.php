<?php
include "includes/config.php";
session_start();
if(!isset($_SESSION['nama_lengkap'])){
	echo "<script>location.href='index.php'</script>";
}
$config = new Config();
$db = $config->getConnection();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Skripsi Kevien Keggin 2018</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/dataTables.bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
  
	<nav class="navbar navbar-inverse navbar-static-top">
	  <div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="index.php">KKMC</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="nilai.php">Rooting Profile</a></li>
			<li><a href="kriteria.php">Form Survei</a></li>
			<li><a href="alternatif.php">Laporan Survei</a></li>
			<li><a href="laporan.php">Laporan</a></li>
		  </ul>
		  <ul class="nav navbar-nav navbar-right">
			<li><a href="profil.php"><?php echo $_SESSION['nama_lengkap'] ?></a></li>
			<li class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-cog"></span> <span class="caret"></span></a>
			  <ul class="dropdown-menu">
				<li><a href="profil.php">Profil</a></li>
				<li><a href="user.php">Manejer Pengguna</a></li>
				<li role="separator" class="divider"></li>
				<li><a href="logout.php">Logout</a></li>
			  </ul>
			</li>
		  </ul>
		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
  
    <div id="container" class="container">

	<br/>
	<div>
	
	  <!-- Nav tabs -->
	 <div class="page-header">
			  <h3>Silahkan Pilih Laporan yang Diinginkan</h3>
	 </div>
	
	 
	 <div>
	<button type="button" onclick="location.href='laporan.php'" class="btn btn-success">Laporan Survei</button>
	<button type="button" onclick="location.href='laporanrooting.php'" class="btn btn-success">Rooting Profile</button>
	<button type="button" onclick="location.href='laporanform.php'" class="btn btn-success">Form Survei</button>
	</div>
<div>
	<footer class="text-center">Skripsi Kevien Keggin 2018</footer>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery-printme.js"></script>
    <script>
    	$('#cetak').click(function() {

    		$("#rangking").printMe({ "path": "css/bootstrap.min.css", "title": "LAPORAN HASIL AKHIR" }); 

		});
    </script>
    <script type="text/javascript" src="js/tableExport.js"></script>
	<script type="text/javascript" src="js/jquery.base64.js"></script>
	<script type="text/javascript" src="js/html2canvas.js"></script>
	<script type="text/javascript" src="js/jspdf/libs/sprintf.js"></script>
	<script type="text/javascript" src="js/jspdf/jspdf.js"></script>
	<script type="text/javascript" src="js/jspdf/libs/base64.js"></script>
  </body>
</html>