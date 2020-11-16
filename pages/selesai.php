<?php
include "lib/koneksi.php";
$sid = session_id();
function isi_keranjang($koneksi){
	$isikeranjang = array();
	$sid = session_id();
	
	$sql = mysqli_query($koneksi, "SELECT * FROM `order` WHERE id_session='$sid'");
	while ($r = mysqli_fetch_array($sql)){
		
		$isikeranjang[]=$r;
	}
	return $isikeranjang;
}

$query=mysqli_query($koneksi, "SELECT id_pembelian FROM `pembelian` order by id_pembelian DESC limit 1");
while($id_or = mysqli_fetch_array($query)){

$id_orders =$id_or['id_pembelian'];
}
$isikeranjang = isi_keranjang($koneksi);
$jml = count($isikeranjang);

for($i=0;$i<$jml;$i++){
	mysqli_query($koneksi, "INSERT INTO `detail_order`(id_order,id_produk, jumlah, harga)
		values('$id_orders',{$isikeranjang[$i]['id_produk']},{$isikeranjang[$i]['jumlah']},{$isikeranjang[$i]['harga']})");
}
for($i=0;$i<$jml;$i++){
	mysqli_query($koneksi, "DELETE FROM `order` where id_order = {$isikeranjang[$i]['id_order']}");
}
?>
<link rel="stylesheet" type="text/css" href="assets/frontend/css/normalize.css">
<link rel="stylesheet" type="text/css" href="assets/frontend/css/skeleton.css">
<script type="text/javascript" src="assets/frontend/js/jquery-2.1.3.min.js"></script>
<script type="text/javascript" src="assets/frontend/js/script2.js"></script>

<div class="banner10" id="home1">
		<div class="container">
			<h2>Keranjang Belanja</h2>
		</div>
	</div>
<!-- //banner -->

<div class="breadcrumb_dress">
		<div class="container">
			<ul>
				<li><a href="index.html"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> Home</a> <i>/</i></li>
				<li>Keranjang Belanja</li>
			</ul>
		</div>
	</div>

	<div class="container">
    <div style="margin-bottom: 0px" class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">    
         <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingAO">
              <h4 class="panel-title" >
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseAO" aria-expanded="true" aria-controls="collapseAO" >
                    Langkah 1: Data Konsumen
                </a>
              </h4>
            </div>
            <div id="collapseAO" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingAO">
              <div class="panel-body">
               <div class="shopper-informations">
		<div class="row">
			<div class="col-sm-10">
				<div class="shopper-info">
					<p>Masukkan Data Konsumen</p>
					<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="#">
						<input type="hidden" name="idorder" value="<?php echo $id_orders; ?>">
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
							<input type="text" name="kota" class="form-control" required="required" placeholder="Kota">
						</div>
						<div class="form-group col-md-6">
							<input type="text" name="kode_pos" class="form-control" required="required" placeholder="Kode Pos">
						</div>
						<div class="form-group col-md-6">
							<input type="text" name="provinsi" class="form-control" required="required" placeholder="Provinsi">
						</div>
						<div class="form-group col-md-12">
							<textarea name="alamat" id="alamat" required="required" class="form-control" rows="4" placeholder="Alamat"></textarea>
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
             
                             
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
              <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                  Langkah 2: Detail Pengiriman
                </a>
              </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingOne">
            
              <body>
              <form action="#"   method="post">
	<div class="container">
		<div class="row">
			<br/>
			<div class="twelve columns"><h2>Hitung Ongkos Kirim</h2></div>
		</div>
		<?php 
		$nama = $_POST['nama'];
		$email = $_POST['email'];
		$telpon = $_POST['telpon'];
		$kota = $_POST['kota'];
		$kode_pos = $_POST['kode_pos'];
		$provinsi = $_POST['provinsi'];
		$alamat = $_POST['alamat'];
		?>
<input type="hidden" name="nama2" value="<?php echo $nama; ?>">
<input type="hidden" name="email2" value="<?php echo $email; ?>">
<input type="hidden" name="telpon2" value="<?php echo $telpon; ?>">
<input type="hidden" name="kota2" value="<?php echo $kota; ?>">
<input type="hidden" name="kode_pos2" value="<?php echo $kode_pos; ?>">
<input type="hidden" name="provinsi2" value="<?php echo $provinsi; ?>">
<input type="hidden" name="alamat2" value="<?php echo $alamat; ?>">
		<div class="row">
		<tr><td valign=top>Kota Tujuan</td><td> :  
      <select name='kota'>
      <option value=0 selected>- Pilih Kota -</option>";
      <select name="descity" id="descity" required="required">
         echo "<option>kota</option>";
      }
			<div class="four columns">
				Asal<br/>
				<select id="oriprovince" required="DKI Jakarta">
					<option>Provinsi</option>
				</select>
				<br/>
				<select name="oricity" id="oricity" required="required">
					<option>Kota</option>
				</select>			
			</div>
			<div class="four columns">
				Tujuan<br/>
				<select id="desprovince" required="required">
					<option>Provinsi</option>
				</select>
				<br/>
				<select name="descity" id="descity" required="required">
					<option>Kota</option>
				</select> 
			</div>
			<div class="two columns">
				Layanan<br/>
				<select name="service" id="service">
					
					<option value="jne">JNE</option>
					<option value="pos">POS</option>
					<option value="tiki">TIKI</option>
				</select> 
				<br/>
				Berat (gram)<br/>
				<input name="weight"  style="width:100px" id="berat" type="number" value="1000">
			</div>
			<div class="two columns">
				<br/>
				<button type="button" onclick="cekHarga()">Cek Harga</button> 
			</div>
			
		</div>
		<div class="row">
			<div class="twelve columns"><h5>Harga</h5></div>
			
			<hr/>
			<table class="twelve columns">
				<thead>
				<tr>
					<th>Pilihan</th>
					<th>Kurir</th>
					<th>Servis</th>
					<th>Deskripsi Servis</th>
					<th>Lama Kirim (hari)</th>
					<th>Total Biaya (Rp)</th>
				</tr>
				</thead>
				<tbody id="resultsbox"></tbody>

			</table>
			<input type="submit" name="submit2" href="collapseTwo" data-parent="#accordion"  value="Lanjutkan" />
	
		</div>
	</div>
			</form>
		
</body>
            </div>
          </div>
           
          <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
              <h4 class="panel-title">
                <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Langkah 3: Konfirmasi Pesanan
                </a>
              </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
              					<form id="main-contact-form" class="contact-form row" name="contact-form" method="post" action="aksi_selesai2.php">
						<input type="hidden" name="idorder" value="<?php echo $id_orders; ?>">

              <div class="checkout">
		<div class="container">
		<?php 
		
		$nama2 = $_POST['nama2'];
		$email2 = $_POST['email2'];
		$telpon2 = $_POST['telpon2'];
		$kota2 = $_POST['kota2'];
		$kode_pos2 = $_POST['kode_pos2'];
		$provinsi2 = $_POST['provinsi2'];
		$alamat2 = $_POST['alamat2'];
		

$query = mysqli_query($koneksi, "SELECT * FROM `detail_order` INNER JOIN `produk` ON detail_order.id_produk=produk.id_produk WHERE id_order='$id_orders'"); 
$d = mysqli_num_rows($query);
		?>
			<h3>Jumlah Keranjang Belanja Anda: <span><?php echo $d; ?> Produk</span></h3>

<input type="hidden" name="nama3" value="<?php echo $nama2; ?>">
<input type="hidden" name="email3" value="<?php echo $email2; ?>">
<input type="hidden" name="telpon3" value="<?php echo $telpon2; ?>">
<input type="hidden" name="kota3" value="<?php echo $kota2; ?>">
<input type="hidden" name="kode_pos3" value="<?php echo $kode_pos2; ?>">
<input type="hidden" name="provinsi3" value="<?php echo $provinsi2; ?>">
<input type="hidden" name="alamat3" value="<?php echo $alamat2; ?>">
			<div class="checkout-right">
				<table class="timetable_sub">
					<thead>
						<tr>
							<th>SL No.</th>	
							<th>Produk</th>
							<th>Jumlah</th>
							<th>Nama Produk</th>
							<th>Harga</th>
							<th>Hapus</th>
						</tr>
					</thead>

					
<?php
					include "lib/config_web.php";
					include "lib/koneksi.php";
					include "lib/pagination2.php";

					$batas=10; 
if(isset($_GET['halaman'])) { $halaman=$_GET['halaman']; 
$posisi=null; } 
if(empty($halaman)){ 
  $posisi=0; 
  $halaman=1; }
  else{ 
    $posisi=($halaman-1)*$batas; 
  }

					
					$query = mysqli_query($koneksi, "SELECT * FROM `detail_order` INNER JOIN `produk` ON detail_order.id_produk=produk.id_produk WHERE id_order='$id_orders'"); 
					$no = $posisi+1;
						$total=0;
						
					while($dataProduk = mysqli_fetch_array($query)){
					$subtotal = $dataProduk['harga']*$dataProduk['jumlah'];
					$total = $total + $subtotal;	
					
					?>
					
					<tr class="rem<?php echo $no?>">

						<td class="invert"><?php echo $no?></td>
						<td class= "hs-wrapper" class="invert-image"><a href="single.html"><img src="file/produk/<?php echo $dataProduk['gambar'];?>
" alt=" " class="img-responsive" />
<img src="file/produk/<?php echo $dataProduk['gambar'];?>
" alt=" " class="img-responsive" />
<img src="file/produk/<?php echo $dataProduk['gambar'];?>
" alt=" " class="img-responsive" />
<img src="file/produk/<?php echo $dataProduk['gambar'];?>
" alt=" " class="img-responsive" />
<img src="file/produk/<?php echo $dataProduk['gambar'];?>
" alt=" " class="img-responsive" />
<img src="file/produk/<?php echo $dataProduk['gambar'];?>
" alt=" " class="img-responsive" /></a></td>
						<td class="invert">
							 <div class="quantity"> 
								<div class="quantity-select">                           
									
									<div class="entry value"><span><?php echo $dataProduk['jumlah'];?></span></div>
									
								</div>
							</div>
						</td>
						<td class="invert"><?php echo $dataProduk['nama_produk'];?></td>
						<td class="invert">Rp. <?php echo number_format($dataProduk['harga'],2,".",",");?></td>
						<td class="invert">
							<div class="rem">
								<div class="close<?php echo $no?>"><a  class="simpleCart_remove" href="<?php echo $web_url; ?>hapuskeranjang.php?id_order=<?php echo $dataProduk['id_order'];?>"><img src="assets/frontend/images/close.png" ></a> </div>
							</div>
							
						</td>

					</tr>

					
<?php $no++; ?>
									<?php } ?>

								
					
								<!--quantity-->
									<script>
									$('.value-plus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)+1;
										divUpd.text(newVal);
									});

									$('.value-minus').on('click', function(){
										var divUpd = $(this).parent().find('.value'), newVal = parseInt(divUpd.text(), 10)-1;
										if(newVal>=1) divUpd.text(newVal);
									});
									</script>
									
								<!--quantity-->

									
				</table>
			</div>
			<div class="checkout-left">	
				<div class="checkout-left-basket">
					<h4>Continue to basket</h4>
					<ul>
					<?php
					$query = mysqli_query($koneksi, "SELECT * FROM `detail_order`, `produk`
					where detail_order.id_produk=produk.id_produk AND id_order='$id_orders'"); 
					
					$subtotal=0;
					while($dataProduk = mysqli_fetch_array($query)){
					$harga = $dataProduk['harga']*$dataProduk['jumlah'];
					$subtotal = $subtotal+$harga;	
					
					?>
						<li><?php echo $dataProduk['nama_produk']; ?>  <span>Rp. <?php echo number_format($harga,2,".",",");?> </span></li>
						
						<?php } ?>
						<li>Sub-Total  <span>Rp. <?php echo number_format($subtotal,2,".",",");?></span></li>
						
						<li>Biaya Pengiriman <i>-</i> <span>Rp. <?php echo number_format($_POST['biaya'],2,".",",");?></span></li>
						<?php
						$nol = 0;
						$kirim = $nol + $_POST['biaya'];
						$total = $subtotal + $kirim;
						?>
						<li>Total <i>-</i> <span>Rp. <?php echo number_format($total,2,".",",");?></span></li>
						
					</ul>
					
				</div>
				<div class="checkout-right-basket">
					<input type="hidden" name="total" value="<?php echo $total; ?>">
					<input type="hidden" name="kirim" value="<?php echo $kirim; ?>">
					<input type="submit" name="submit3" value="Selesai">
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

            </div>
          </div>
           
         
           
               
        </div>
</div>
</form>