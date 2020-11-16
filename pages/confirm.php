<div class="banner10" id="home1">
		<div class="container">
			<h2>Konfirmasi Pembayaran</h2>
		</div>
	</div> 
<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Konfirmasi</li>
			</ul>
		</div>
	</div>
<div class="container">
    <div style="margin-bottom: 0px" class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
 <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingAO">
              <h4 class="panel-title" >
                
                    Konfirmasi Pembayaran
               
              </h4>
            </div>
            <div id="collapseAO" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingAO">
              <div class="panel-body">
               <div class="shopper-informations">
		<div class="row">
			<div class="col-sm-12">
				<div class="shopper-info">
					
					<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="aksi_konfirmasi.php">
						<!--<input type="hidden" name="idorder" value="<?php echo $id_orders; ?>">-->
						<p>Data Pembelian Pelanggan</p>
						<div class="form-group col-md-6">
							<input type="text" name="nama" class="form-control" required="required" placeholder="Nama">
						</div>
						<div class="form-group col-md-6">
							<input type="email" name="email" class="form-control" required="required" placeholder="Email">
						</div>
						<div class="form-group col-md-6">
							<input type="text" name="telpon" class="form-control" required="required" placeholder="No Telpon">
						</div>
						<div class="form-group col-md-6">
							<input type="text" name="idorder" class="form-control" required="required" placeholder="Id Order">
						</div>
						<p>Data Pembayaran</p>
						<div class="form-group col-md-6">
							<input type="text" name="transfer" class="form-control" required="required" value="Transfer" >
						</div>
						<div class="form-group col-md-6">
							<input type="text" name="bri" class="form-control" required="required" placeholder="BANK BRI" value="BRI">
						</div>
						<div class="form-group col-md-6">
							<input type="text" name="bayar" class="form-control" required="required" placeholder="Jumlah Pembayaran">
						</div>
						<div class="form-group col-md-6">
							<input type="date" name="tanggal" class="form-control" required="required" >
						</div>
						<p>Data Bank Pelanggan</p>
						<div class="form-group col-md-6">
							<input type="text" name="bank" class="form-control" required="required" placeholder="Nama Bank">
						</div>
						<div class="form-group col-md-6">
							<input type="text" name="rekening" class="form-control" required="required" placeholder="No Rekening">
						</div>
						<div class="form-group col-md-6">
							<input type="text" name="atasnama" class="form-control" required="required" placeholder="Atas Nama">
						</div>
						
						<div class="form-group col-md-12">
							<textarea name="keterangan" id="keterangan"  class="form-control" rows="4" placeholder="Keterangan"></textarea>
						</div>
						<div class="form-group col-md-6">
							<figure><img src="captcha/captcha.php" width="200" height="50">
						</div>
						<div class="form-group col-md-6">
							<input type="text" name="verifikasi" id="verifikasi" class="form-control" required="required" placeholder="Masukkan Captcha">
						</div>
						<div class="form-group col-md-12">
							<input type="submit" name="submit" class="btn btn-primary pull-right" value="Selesai">
						</div>
					</form>
				</div>
			</div>
		</div>			
	</div>
               
               </div>
            </div>
          </div>
          </div>
          </div>
