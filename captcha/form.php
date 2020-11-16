<?php
session_start();
if($_POST){
	if($_POST['verifikasi']!=NULL){
		if($_POST['verifikasi']==$_SESSION['captcha_session']){
			echo "<strong>Verifikasi Berhasil !</strong><br><br>";
		}else{
			echo "<strong>Verifikasi Gagal !</strong><br><br>";
		}
	}else{
		echo "<strong>Masukan kode verifikasi !</strong><br><br>";
	}
}
?>
<form name="form1" method="post" action="">
  <table width="500" border="0" cellspacing="0" cellpadding="5">
    <tr>
      <td width="132"><strong><font size="2" face="Arial, Helvetica, sans-serif">Nama</font></strong></td>
      <td width="348"><label>
        <input name="nama" type="text" id="nama" size="40">
      </label></td>
    </tr>
    <tr>
      <td valign="top"><strong><font size="2" face="Arial, Helvetica, sans-serif">Komentar</font></strong></td>
      <td valign="top"><label>
        <textarea name="komentar" id="komentar" cols="30" rows="5"></textarea>
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><img src="captcha.php"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="text" name="verifikasi" id="verifikasi">
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><label>
        <input type="submit" name="button" id="button" value="Submit">
      </label></td>
    </tr>
  </table>
</form>
