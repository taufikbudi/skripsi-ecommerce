<?php
include "lib/koneksi.php";

$id_pro = $_GET['id_produk'];

$tambah = mysqli_query($koneksi,"UPDATE `order`
                SET jumlah = jumlah + 1
                WHERE id_produk='$id_pro'");
if ($tambah) {

       echo "<script>
window.Location=history.go(-1);
   </script>";
    }

?>