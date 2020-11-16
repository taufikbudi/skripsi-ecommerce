<?php
	// untuk memasukkan file config_web.php dan file koneksi.php
	include "../../lib/config_web.php";
	include "../../lib/koneksi.php";

	// untuk menangkap variabel 'nama_kategori' yang dikirim oleh form_tambah.php
	$kota = $_POST['kota'];
	$biaya = $_POST['biaya'];
	// query untuk menyimpan ke tabel tbl_kategori
	
	$querySimpan = mysqli_query($koneksi, "INSERT INTO kota_kirim (kota, biaya) VALUES ('$kota', '$biaya')");

	// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
	if ($querySimpan) {
		echo "<script> alert('Data Kota Kirim Berhasil Masuk'); window.location = '$admin_url'+'biaya/main.php';</script>";
		// jika query gagal, akan tampil alert dan halaman akan diarahkan ke form tambah kategori
	} else {
		echo "<script> alert('Data Kota Kirim Gagal Dimasukkan'); window.location = '$admin_url'+'biaya/form_tambah.php';</script>";
	}
?>