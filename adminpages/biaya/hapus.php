<?php
    include "../../lib/config_web.php";
    include "../../lib/koneksi.php";

    $idKota = $_GET['id_kota_kirim'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM kota_kirim WHERE id_kota_kirim='$idKota'");
    if ($queryHapus) {
        echo "<script> alert('Data Kota Kirim Berhasil Dihapus'); window.location = '$admin_url'+'biaya/main.php';</script>";
    } else {
        echo "<script> alert('Data Kota Kirim Gagal Dihapus'); window.location = '$admin_url'+'biaya/main.php';</script>";

    }
?>