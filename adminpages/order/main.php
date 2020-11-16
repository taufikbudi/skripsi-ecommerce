<?php
session_start();
if (empty($_SESSION['username']) AND empty($_SESSION['level'])) {
    echo "<center>Untuk mengakses halaman, Anda harus login <br>";
    echo "<a href=../index.php><b>LOGIN</b></a></center>";
} else { 
include "../../lib/config_web.php";
include "../../lib/koneksi.php";
include "../../lib/pagination2.php";
include "../templates/header.php";
?>

<!-- page content -->
<div class="right_col" role="main">
	<div class="">
		<div class="page-title">
			<div class="title_left">
				<h3>Manajemen <small>Data Pemesanan</small></h3>
			</div>

			<div class="title_right">
				<div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
					
				</div>
			</div>
		</div>

		<div class="clearfix"></div>

		<div class="row">

			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="x_panel">
					<div class="x_title">
						<h2><small>Data Pemesanan</small></h2>

						<div class="clearfix"></div>
					</div>
					<div class="x_content">

						<table class="table table-striped">
							<thead>
								<tr>
									<th style="width: 50px;">Order ID</th>
									<th style="width: 190px;">Kustomer</th>
									<th style="width: 80px;">Status</th>
									<th style="width: 110px;">Total</th>
									<th style="width: 110px;">Tanggal</th>
									<th style="width: 110px;">Aksi</th>

								</tr>
							</thead>
							<tbody>
								<?php
																	$batas=10; 
if(isset($_GET['halaman'])) { $halaman=$_GET['halaman']; 
$posisi=null; } 
if(empty($halaman)){ 
  $posisi=0; 
  $halaman=1; }
  else{ 
    $posisi=($halaman-1)*$batas; 
  }


						$query = mysqli_query($koneksi, "SELECT * FROM `transaksi`  order by id_order DESC limit $posisi, $batas");
$no = $posisi+1;
						while($dataOrder = mysqli_fetch_array($query)){
								?>
								<tr>
								<th scope="row"><?php echo $dataOrder['id_order'] ?></th>
								<td><?php echo $dataOrder['nama'];?></td>
								<td><?php echo $dataOrder['status_order'];?></td>
								<td>Rp. <?php echo number_format($dataOrder['total'],2,".",",");?></td>
								<td><?php echo $dataOrder['tanggal_beli'];?></td>
								<td>
								
								<a href="<?php echo $admin_url; ?>produk/hapus.php?id_transaksi=<?php echo $data['id_transaksi'];?>" onClick="return confirm('Anda yakin ingin menghapus data ini?')">
								
								<button class="btn btn-danger">
									<i class="fa fa-remove"></i>
								</button></a></td>

								</tr>
								<?php $no++; 
					?>
								<?php } ?>
							</tbody>
						</table>

					</div>
				</div>
			</div>
			<div class="col-xs-12">
			<a href="<?php echo $admin_url; ?>order/cetak.php?cetak_laporan" onClick="return confirm('Anda yakin ingin mencetak data ini?')">
				<button class="btn btn-primary" type="submit" onclick="cetak.php">
					<i class="fa fa-print"></i> Cetak
				</button></a>
				<ul class="pagination pull-right">
				

	<?php 
$sql_paging = mysqli_query($koneksi, "SELECT * FROM `transaksi`  order by id_order DESC"); 
$jmldata = mysqli_num_rows($sql_paging); 
 
 $jumlah_halaman = ceil($jmldata / $batas); 
 for($i = 1; $i <= $jumlah_halaman; $i++)
  if($i != $halaman) { 
  	
	echo "<li class='pagination pull-left'>";
  	echo "<a href=?halaman=$i>$i</a> "; 
  	echo "</li>";
  } 
  else { 
  	echo "<li class='pagination pull-left'>";
  	echo "<a href=?halaman=$i></a>"; 
  	echo "</li>";
  }
   ?>
   
</ul>
			
				
			</div>
			<div class="clearfix"></div>

		</div>
	</div>
</div>
<!-- /page content -->
<?php
include "../templates/footer.php";
}
?>