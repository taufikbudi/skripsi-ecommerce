<?php
	// untuk memasukkan file config_web.php dan file koneksi.php
	include "../../lib/config_web.php";
	include "../../lib/koneksi.php";

	// untuk menangkap variabel 'nama_kategori' dan 'id_kategori' yang dikirim oleh form_edit.php
	$id_konfirmasi = $_GET['id_konfirmasi'];
	// query untuk mengubah ke tabel tbl_kategori
	
	$querySimpan = mysqli_query($koneksi, "UPDATE konfirmasi SET status='Kirim' WHERE id_konfirmasi='$id_konfirmasi'");

	// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
	if ($querySimpan) {
		echo "<script> alert('Konfirmasi Telah Diproses'); window.location = '$admin_url'+'konfirmasi/main.php';</script>";
		// jika query gagal, akan tampil alert dan halaman akan diarahkan ke form edit kategori
	} else {
		echo "<script> alert('Konfirmasi Gagal Diproses'); window.location = '$admin_url'+'konfirmasi/aksi_edit.php?id_konfirmasi=$id_konfirmasi';</script>";
	}
?>