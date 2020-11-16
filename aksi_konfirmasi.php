<?php
session_start();
include "lib/koneksi.php";

$query = mysqli_query($koneksi, "SELECT id_order FROM `transaksi` order by id_order");
while($r=mysqli_fetch_array($query)){
$a=$r['id_order'];
}
if ($a==$_POST['idorder']){

if(!empty($_POST['verifikasi'])){
	if($_POST['verifikasi']==$_SESSION['captcha_session']){
	$masuk=mysqli_query($koneksi, "INSERT INTO konfirmasi(nama, email, telpon, id_order, transfer, bank1, jumlah, tanggal_bayar, bank2, no_rek, atas_nama, keterangan, status) 
		values ('$_POST[nama]','$_POST[email]','$_POST[telpon]','$_POST[idorder]','$_POST[transfer]','$_POST[bri]', '$_POST[bayar]','$_POST[tanggal]','$_POST[bank]','$_POST[rekening]', '$_POST[atasnama]', '$_POST[keterangan]','Pending')");

echo "<script> alert('Data Telah Berhasil disimpan'); window.location ='finish2.php';</script>";
}
else{
	echo "<script> alert('Captcha Salah!'); window.Location=history.go(-1);
   </script>";
    
}

	
	}
	else{
	echo "<script> alert('Captcha Kosong'); window.Location=history.go(-1);
   </script>";
}

}else{
	echo "<script> alert('Kode yang ada masukkan tidak terdaftar!'); window.Location='history.go(-1)';
   </script>";
}

?>