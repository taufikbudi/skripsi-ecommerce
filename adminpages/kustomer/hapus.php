<?php
    include "../../lib/config_web.php";
    include "../../lib/koneksi.php";

    $idKustomer = $_GET['id_kustomer'];
    $queryHapus = mysqli_query($koneksi, "DELETE FROM kustomer WHERE id_kustomer='$idKustomer'");
    if ($queryHapus) {
        echo "<script> alert('Data Kustomer Berhasil Dihapus'); window.location = '$admin_url'+'kustomer/main.php';</script>";
    } else {
        echo "<script> alert('Data Kustomer Gagal Dihapus'); window.location = '$admin_url'+'kustomer/main.php';</script>";

    }
?>