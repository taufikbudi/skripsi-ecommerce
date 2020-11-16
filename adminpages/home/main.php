<?php
session_start();
if (empty($_SESSION['username'])) {
    echo "<center>Untuk mengakses halaman, Anda harus login <br>";
    echo "<a href=../index.php><b>LOGIN</b></a></center>";
} else { 
include "../../lib/config_web.php";
include "../../lib/koneksi.php";
include "../templates/header.php"; ?>

<?php include "../templates/footer.php"; }?>