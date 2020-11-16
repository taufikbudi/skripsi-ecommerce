<?php

class Paging
{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas)
{
if(empty($_GET['halaman'])){
	$posisi=0;
	$_GET['halaman']=1;
	}
           else{
	$posisi = ($_GET['halaman']-1) * $batas;
}
return $posisi;
}
// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas)
{
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 ... Next, Prev, First, Last
function navHalaman($halaman_aktif, $jmlhalaman)
{
$link_halaman = "";

// Link First dan Previous
if ($halaman_aktif > 1)
{
$link_halaman .= " <a href=index.php?halaman=1&p=$_GET[p]>< First</a> | ";
}

if (($halaman_aktif-1) > 0)
{
$previous = $halaman_aktif-1;
$link_halaman .= "<a href=index.php?halaman=$previous&p=$_GET[p]>< Previous</a> | ";
}

// Link halaman 1,2,3, ...
for ($i=1; $i<=$jmlhalaman; $i++)
{
if ($i == $halaman_aktif)
{
$link_halaman .= "<b>$i</b> | ";
}
else
{
//$link_halaman .= "<a href=?p=use_paging&?halaman=$i>$i</a> | ";
$link_halaman .= "<a href=index.php?halaman=$i&p=$_GET[p]>$i</a> | ";
}
$link_halaman .= " ";
}

// Link Next dan Last
if ($halaman_aktif < $jmlhalaman)
{
$next=$halaman_aktif+1;
$link_halaman .= " <a href=index.php?halaman=$next&p=$_GET[p]>Next ></a> ";
}

if (($halaman_aktif != $jmlhalaman) && ($jmlhalaman != 0))
{
$link_halaman .= " | <a href=index.php?halaman=$jmlhalaman&p=$_GET[p]>Last >></a> ";
}
return $link_halaman;
}
}


/* Paging Untuk Halaman User  */

class Page
{
// Fungsi untuk mencek halaman dan posisi data
function cariPosisi($batas)
{
if(empty($_GET['halaman'])){
	$posisi=0;
	$halaman=$_GET['halaman']=1;
	
	}
           else{
	$posisi = ($_GET['halaman']-1) * $batas;
}
return $posisi;
}
// Fungsi untuk menghitung total halaman
function jumlahHalaman($jmldata, $batas)
{
$jmlhalaman = ceil($jmldata/$batas);
return $jmlhalaman;
}

// Fungsi untuk link halaman 1,2,3 ... Next, Prev, First, Last
function navHalaman($halaman_aktif, $jmlhalaman)
{
$link_halaman = "";

// Link First dan Previous
if ($halaman_aktif > 1)
{
$link_halaman .= " <a href=index.php?halaman=1>< First</a> | ";
}

if (($halaman_aktif-1) > 0)
{
$previous = $halaman_aktif-1;
$link_halaman .= "<a href=index.php?halaman=$previous>< Previous</a> | ";
}

// Link halaman 1,2,3, ...
for ($i=1; $i<=$jmlhalaman; $i++)
{
if ($i == $halaman_aktif)
{
$link_halaman .= "<b>$i</b> | ";
}
else
{
$link_halaman .= "<a href=index.php?halaman=$i>$i</a> | ";
}
$link_halaman .= " ";
}

// Link Next dan Last
if ($halaman_aktif < $jmlhalaman)
{
$next=$halaman_aktif+1;
$link_halaman .= " <a href=index.php?halaman=$next>Next ></a> ";
}

if (($halaman_aktif != $jmlhalaman) && ($jmlhalaman != 0))
{
$link_halaman .= " | <a href=index.php?halaman=$jmlhalaman>Last >></a> ";
}
return $link_halaman;
}
}

/*Paging Halaman User */
?>