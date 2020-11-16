<?php
include "lib/koneksi.php";
session_start();
$sid=session_id();
$tgl_skrg = date("Y-m-d");
$query = mysqli_query($koneksi, "SELECT * FROM `order` INNER JOIN `produk` ON order.id_produk=produk.id_produk WHERE order.id_session='$sid'"); 
$d = mysqli_num_rows($query);



if($d==0){
	echo "<script> alert('Keranjang Belanja Anda Kosong, silahkan masukkan barang!!'); window.location ='index.php'; </script>";
}else{

mysqli_query($koneksi, "INSERT INTO `pembelian`(tanggal_beli, status_order)values ('$tgl_skrg','P')");
$id_orders = mysqli_insert_id($koneksi);
header('Location:checkout.php');
}
?>
