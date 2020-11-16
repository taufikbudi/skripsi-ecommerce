<?php
    include "lib/config_web.php";
    include "lib/koneksi.php";

    $id_order = $_GET['id_order'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM `order` WHERE id_order='$id_order'");
    if ($queryHapus) {
        echo "<script> alert('Barang Telah Dihapus dari Keranjang'); window.location ='aksi_keranjang.php';</script>";
    } else {
        echo "<script> alert('Barang Gagal Dihapus'); window.location ='aksi_keranjang.php';</script>";

    }
?>