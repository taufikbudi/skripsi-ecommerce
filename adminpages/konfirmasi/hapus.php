<?php
    include "../../lib/config_web.php";
    include "../../lib/koneksi.php";

    $idKon = $_GET['id_konfirmasi'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM konfirmasi WHERE id_konfirmasi='$idKon'");
    if ($queryHapus) {
        echo "<script> alert('Data Konfirmasi Berhasil Dihapus'); window.location = '$admin_url'+'konfirmasi/main.php';</script>";
    } else {
        echo "<script> alert('Data Konfirmasi Gagal Dihapus'); window.location = '$admin_url'+'konfirmasi/main.php';</script>";

    }
?>