<?php
include_once 'header.php';
$id = isset($_GET['id']) ? $_GET['id'] : die('ERROR: missing ID.');

include_once 'includes/user.inc.php';
$eks = new User($db);

$eks->id = $id;

$eks->readOne();

if($_POST){

    $eks->nl = $_POST['nl'];
	$eks->nk = $_POST['nk'];
	$eks->lv = $_POST['lv'];
    $eks->un = $_POST['un'];
    $eks->pw = md5($_POST['pw']);
    
    if($eks->update()){
        echo "<script>location.href='user.php'</script>";
    } else{
?>
<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Gagal Ubah Data!</strong> Terjadi kesalahan, coba sekali lagi.
</div>
<?php
    }
}
?>
        <div class="row">
          <div class="col-xs-12 col-sm-6 col-md-6">
		  <div class="well">
            <div class="page-header">
              <h3>Ubah Pengguna</h3>
            </div>
            
                <form method="post">
                  <div class="form-group">
                    <label for="nl">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nl" name="nl" value="<?php echo $eks->nl; ?>">
                  </div>
				  <div class="form-group">
                    <label for="nk">NIK</label>
                    <input type="text" class="form-control" id="nk" name="nk" value="<?php echo $eks->nk; ?>">
                  </div>
				  <div class="form-group">
                    <label for="lv">Level</label>
                    <input type="text" class="form-control" id="lv" name="lv" value="<?php echo $eks->lv; ?>">
                  </div>
                  <div class="form-group">
                    <label for="un">Username</label>
                    <input type="text" class="form-control" id="un" name="un" value="<?php echo $eks->un; ?>">
                  </div>
                  <div class="form-group">
                    <label for="pw">Password</label>
                    <input type="text" class="form-control" id="pw" name="pw" value="<?php echo $eks->pw; ?>">
                  </div>
                  <button type="submit" class="btn btn-primary">Ubah</button>
                  <button type="button" onclick="location.href='user.php'" class="btn btn-success">Kembali</button>
                </form>
              
          </div></div>
          <div class="col-xs-12 col-sm-3 col-md-3">
            <?php include_once 'sidebar.php'; ?>
        </div>
        <?php
include_once 'footer.php';
?>