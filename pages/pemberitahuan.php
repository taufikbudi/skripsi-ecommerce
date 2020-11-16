<?php
include "lib/koneksi.php";

$sql = mysqli_query($koneksi, "SELECT k.id_order, k.nama, k.total, p.status_order, p.tanggal_beli FROM `kustomer` as k, `pembelian` as p where k.id_order=p.id_pembelian order by k.id_order DESC limit 1"); 
while ($d = mysqli_fetch_array($sql)) {
	$nama = $d['nama'];
	$id_order = $d['id_order'];
	$status_order = $d['status_order'];
	$tanggal_beli = $d['tanggal_beli'];
	$total = $d['total'];
	
}
?>

<?php
mysqli_query($koneksi, "INSERT INTO `transaksi` (id_order, nama, status_order, tanggal_beli, total) values ('$id_order', '$nama', '$status_order', '$tanggal_beli', '$total')");
?>

<div class="team-bottom">
		<div class="container">
			<h3>Pesanan Anda telah diproses!</h3>
			<p>Jika ada pertanyaan silahkan hubungi kami.</p>
			<p>Terima kasih telah berbelanja online!</p>
			<a href="index.php?route=home">Lanjutkan</a>
		</div>
	</div>