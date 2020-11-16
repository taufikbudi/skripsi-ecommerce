<?php
	// untuk memasukkan file config_web.php dan file koneksi.php
	include "../../lib/config_web.php";
	include "../../lib/koneksi.php";

	// untuk menangkap variabel 'nama_kategori' dan 'id_kategori' yang dikirim oleh form_edit.php
	$id_kota_kirim = $_POST['id_kota_kirim'];
	$kota = $_POST['kota'];
	$biaya = $_POST['biaya'];
	// query untuk mengubah ke tabel tbl_kategori
	
	$querySimpan = mysqli_query($koneksi, "UPDATE kota_kirim SET kota='$kota', biaya='$biaya' WHERE id_kota_kirim='$id_kota_kirim'");

	// jika query berhasil maka akan tampil alert dan halaman akan kembali ke daftar kategori
	if ($querySimpan) {
		echo "<script> alert('Data Kota Kirim Berhasil Diubah'); window.location = '$admin_url'+'biaya/main.php';</script>";
		// jika query gagal, akan tampil alert dan halaman akan diarahkan ke form edit kategori
	} else {
		echo "<script> alert('Data Kota Kirim Gagal Dimasukkan'); window.location = '$admin_url'+'biaya/form_edit.php?id_kota_kirim=$id_kota_kirim';</script>";
	}
?>