<?php 
session_start();
if (empty($_SESSION['username'])) {
    echo "<center>Untuk mengakses halaman, Anda harus login <br>";
    echo "<a href=../index.php><b>LOGIN</b></a></center>";
} else { 
include "../../lib/config_web.php";
include "../../lib/koneksi.php";

$id_kota_kirim = $_GET['id_kota_kirim'];
$query = mysqli_query($koneksi, "SELECT * FROM kota_kirim WHERE id_kota_kirim='$id_kota_kirim'");

$dataKota = mysqli_fetch_array($query); 

include "../templates/header.php"; ?>
      <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Manajemen <small>Data Kota Kirim</small></h3>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Tambah <small>data kota kirim</small></h2>
  
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
	  <form method="post" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="aksi_edit.php">
		<input type="hidden" name="id_kota_kirim" value="<?php echo $dataKota['id_kota_kirim'];?>">
	  <div class="form-group">
		<label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Kota <span class="required">*</span>
		</label>
		<div class="col-md-10 col-sm-10 col-xs-12">
		  <input type="text" id="first-name" name="kota" value="<?php echo $dataKota['kota'];?>" required="required" class="form-control col-md-7 col-xs-12">
		</div>
	  </div>
    <div class="form-group">
    <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Biaya <span class="required">*</span>
    </label>
    <div class="col-md-10 col-sm-10 col-xs-12">
      <input type="text" id="first-name" name="biaya" value="<?php echo $dataKota['biaya'];?>" required="required" class="form-control col-md-7 col-xs-12">
    </div>
    </div>

	  <div class="ln_solid"></div>
	  <div class="form-group">
		<div class="col-md-3 col-sm-3 col-xs-12 col-md-offset-2">
		  <button type="submit" class="btn btn-primary">Batal</button>
		  <button type="submit" class="btn btn-success"><i class="fa fa-save"></i>Simpan</button>
		</div>
	  </div>

	  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
		<?php include "../templates/footer.php"; 
		}
		?>