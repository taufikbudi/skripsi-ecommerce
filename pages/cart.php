<?php  

$sid = session_id();
?>
<!-- banner -->
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

<div class="checkout">
		<div class="container">
		<?php 
$query = mysqli_query($koneksi, "SELECT * FROM `order` INNER JOIN `produk` ON order.id_produk=produk.id_produk WHERE order.id_session='$sid'"); 
$d = mysqli_num_rows($query);
		?>

			<h3>Jumlah Keranjang Belanja Anda: <span><?php echo $d; ?> Produk</span></h3>

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

					
					$query = mysqli_query($koneksi, "SELECT * FROM `order` INNER JOIN `produk` ON order.id_produk=produk.id_produk WHERE order.id_session='$sid'"); 
					$no = $posisi+1;

					while($dataProduk = mysqli_fetch_array($query)){
					$subtotal    = $dataProduk['harga']* $dataProduk['jumlah'];	
					
					?>
					<input type="hidden" name="id_produk" value="<?php echo $dataProduk['id_produk'];?>">
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
									<div class="entry "><a href="<?php echo $web_url; ?>kurang.php?id_produk=<?php echo $dataProduk['id_produk'];?>" class="btn btn-default glyphicon glyphicon-minus"></a></div>
									<div class="entry value"><span><?php echo $dataProduk['jumlah'];?></span></div>
									<div class="entry"><a href="<?php echo $web_url; ?>tambah.php?id_produk=<?php echo $dataProduk['id_produk'];?>" class="btn btn-default glyphicon glyphicon-plus"></a></div>
								</div>
							</div>
						</td>
						<td class="invert"><?php echo $dataProduk['nama_produk'];?></td>
						<td class="invert"><?php echo $subtotal ?></td>
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
				<a href="aksi_selesai.php" class="btn btn-default add-to-cart">Selesai Belanja</a>
				<div class="checkout-right-basket">
					<a href="index.php"><span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>Continue Shopping</a>
				</div>
				
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	