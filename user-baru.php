<?php
include_once 'header.php';
if($_POST){
    
    include_once 'includes/user.inc.php';
    $eks = new User($db);

    $eks->nl = $_POST['nl'];
	$eks->nk = $_POST['nk'];
	$eks->lv = $_POST['lv'];
    $eks->un = $_POST['un'];
    $eks->pw = md5($_POST['pw']);

    if($eks->pw == md5($_POST['up'])){
    
    if($eks->insert()){
?>
<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil Tambah Data!</strong> Tambah lagi atau <a href="user.php">lihat semua data</a>.
</div>
<?php
    }
    
    else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Tambah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
    }

    } else{
?>
<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Password!</strong> Kata sandi yang anda masukkan tidak sama antara Password dan Ulangi Password
</div>
<?php   
    }
}
?>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
		  <div class="well">
            <div class="page-header">
              <h3>Tambah Pengguna</h3>
            </div>
            
                <form method="post">
                  <div class="form-group">
                    <label for="nl">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nl" name="nl" required>
                  </div>
				  <div class="form-group">
                    <label for="nk">NIK</label>
                    <input type="text" class="form-control" id="nk" name="nk" required>
                  </div>
				  <div class="form-group">
                    <label for="lv">Level</label>
                    <input type="text" class="form-control" id="lv" name="lv" required>
                  </div>
                  <div class="form-group">
                    <label for="un">Username</label>
                    <input type="text" class="form-control" id="un" name="un" required>
                  </div>
                  <div class="form-group">
                    <label for="pw">Password</label>
                    <input type="password" class="form-control" id="pw" name="pw" required>
                  </div>
                  <div class="form-group">
                    <label for="up">Ulangi Password</label>
                    <input type="password" class="form-control" id="up" name="up" required>
                  </div>
                  <button type="submit" class="btn btn-primary">Simpan</button>
                  <button type="button" onclick="location.href='user.php'" class="btn btn-success">Kembali</button>
                </form>
              
          </div></div>
          <div class="col-xs-12 col-sm-3 col-md-3">
            <?php include_once 'sidebar.php'; ?>
        </div>
        <?php
include_once 'footer.php';
?>