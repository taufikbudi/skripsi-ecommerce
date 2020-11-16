<?php 

include "lib/koneksi.php";

?>

<div class="container">
    <div style="margin-bottom: 0px" class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">    
         <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingAO">
              <h4 class="panel-title" >
                
                    
                
              </h4>
            </div>
            <div id="collapseAO" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingAO">
              <div class="panel-body">
               <div class="shopper-informations">
		<div class="row">
			<div class="col-sm-10">
				<div class="shopper-info">
					<section id="cart-items">
	<div class="container">
		<div class="shopper-informations">
		<div class="row">
			<div class="col-sm-8">
				<div class="shopper-info">
					<p>Terimakasih Atas Kepercayaan Anda Belanja Di Toko Online Kami, Berikut Detail Pembayaran Yang Harus dibayarkan</p>
					<form id="main-contact-form" class="contact-form row" name="contact-form" method="post">
<pre>
<div class="form-group col-md-12">
Id Order  : <?php echo $_POST['idorder'];?> (*Harap dicatat untuk melakukan konfirmasi pembayaran)
</div>
<div class="form-group col-md-12">
Nama      : <?php echo $_POST['nama3'];?>
</div>
<div class="form-group col-md-12">
Email     : <?php echo $_POST['email3'];?>
</div>
<div class="form-group col-md-6">
No Telpon : <?php echo $_POST['telpon3'];?>
</div>
<div class="form-group col-md-6">
Kode Pos  : <?php echo $_POST['kode_pos3'];?>
</div>
<div class="form-group col-md-6">
Kota      : <?php echo $_POST['kota3'];?>
</div>
<div class="form-group col-md-6">
Provinsi  : <?php echo $_POST['provinsi3'];?>
</div>
<div class="form-group col-md-12">
<table>
<tr>
<td>alamat    : </td><td><?php echo $_POST['alamat3'];?></td></tr>
</table>
</div>
</pre>
					</form>
					<?php
					$querySimpan = mysqli_query($koneksi, "INSERT INTO kustomer (id_order, nama, alamat, email, telpon, kode_pos, kota, provinsi, total)
						values ('$_POST[idorder]','$_POST[nama3]','$_POST[alamat3]','$_POST[email3]','$_POST[telpon3]', '$_POST[kode_pos3]', '$_POST[kota3]', '$_POST[provinsi3]', '$_POST[total]')");
						?>
				</div>
			</div>
		</div>			
	</div>
	<div class="review-payment">
		<h2>Review & Payment</h2>
	</div>
	<div class="table-responsive cart_info">
		<table class="table table-condensed">
			<thead>
				<tr class="cart_menu">
					<td class="description">Item</td>
					
					<td class="price">Price</td>
					<td class="quantity">Quantity</td>
					<td class="total">Total</td>
				</tr>
			</thead>
			<tbody>
				<?php
				$idor=$_POST['idorder'];
				$r = mysqli_query($koneksi, "SELECT * FROM `detail_order`, `produk`
					where detail_order.id_produk=produk.id_produk And
					id_order='$idor'");
				$total=0;
				while ($d = mysqli_fetch_array($r)) {
					$subtotal = $d['harga']*$d['jumlah'];
					$total = $total + $subtotal;
					?>
				<tr>
					
					<td class="cart_description">
					<h4><a href="#"><?php echo $d['nama_produk'];?></a></h4>
					</td>
					<td class="cart_price">
						<p>Rp. <?php echo number_format($d['harga'],2,".",",");?></p>
					</td>
					<td class="cart_quantity">
						<?php echo $d['jumlah'];?>
					</td>
					<td class="cart_total">
						<p class="cart_total_price">Rp. <?php echo number_format($subtotal,2,".",",");?></p>
					</td>
				</tr>
				<?php
}
?>
				<tr>
					<td colspan="4">&nbsp;</td>
					<td colspan="2">
						<table class="table table-condensed total-result">
							<td>Biaya Kirim</td>
							<td><span>Rp. <?php echo number_format($_POST['kirim'],2,".",",");?></span></td>

							<tr>
								<td>Total</td>
								<td><span>Rp. <?php echo number_format($total+$_POST['kirim'],2,".",",");?></span></td>
							</tr>
						</table>
					</td>
				</tr>
			</tbody>
		</table>

		
		
		
	</div>
	</div>
</section>
<p>Silahkan lakukan pembayaran melalui transfer ke:</p>

<pre>
<div class="form-group col-md-3">
=========================================================
BANK BRI
*********************************************************
--No. Rekening : 5958-01-000327-50-9
--Atas Nama    : Taufan Adi B
*********************************************************

Setelah melakukan pembayaran silahkan lakukan konfirmasi
Proses pengiriman barang akan dilakukan 1x24 setelah
konfirmasi.


Terimakasih,


Shafiyyah Fashion
=========================================================
</div>
</pre>

<button type="submit" name="submit" onclick="window.location.href='finish.php'" class="btn btn-primary">Selanjutnya</button>
<div class="checkout-right-basket">
</div>

				</div>
			</div>
		</div>			
	</div>
               
               </div>
            </div>
          </div>
             
                             
          



