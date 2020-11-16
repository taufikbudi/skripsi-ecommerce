<?php
    include "../../lib/config_web.php";
    include "../../lib/koneksi.php";

    $idTransaksi = $_GET['id_transaksi'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM transaksi WHERE id_transaksi='$idTransaksi'");
    if ($queryHapus) {
        echo "<script> alert('Data Transaksi Berhasil Dihapus'); window.location = '$admin_url'+'order/main.php';</script>";
    } else {
        echo "<script> alert('Data Transaksi Gagal Dihapus'); window.location = '$admin_url'+'order/main.php';</script>";

    }
?>