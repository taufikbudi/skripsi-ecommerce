<?php
include "../../lib/config_web.php";
include "../../lib/koneksi.php";
require('../../assets/frontend/fpdf17/fpdf.php');
/**
 Judul  : Laporan PDF (portait):
 Level  : Menengah
 Author : Hakko Bio Richard
 Blog   : www.hakkoblogs.com
 Web    : www.niqoweb.com
 Email  : hakkobiorichard@ygmail.com
 
 Untuk tutorial yang lainnya silahkan berkunjung ke www.hakkoblogs.com
 
 Butuh jasa pembuatan website, aplikasi, pembuatan program TA dan Skripsi.? Hubungi NiqoWeb ==>> 085694984803
 
 **/
//Menampilkan data dari tabel di database

$result=mysqli_query($koneksi, "SELECT * FROM `transaksi` ORDER BY id_order ASC") or die(mysqli_error());

//Inisiasi untuk membuat header kolom
$column_nik = "";
$column_nama = "";
$column_status = "";
$column_tanggal = "";
$column_total = "";



//For each row, add the field to the corresponding column
while($row = mysqli_fetch_array($result))
{
	$nik = $row["id_order"];
    $nama = $row["nama"];
    $status = $row["status_order"];
    $tanggal_lahir = $row["tanggal_beli"];
    $total = $row["total"];
	
 
    

	$column_nik = $column_nik.$nik."\n";
    $column_nama = $column_nama.$nama."\n";
    $column_status = $column_status.$status."\n";
    $column_tanggal = $column_tanggal.$tanggal_lahir."\n";
    $column_total = $column_total.$total."\n";
   
    

//Create a new PDF file
$pdf = new FPDF('P','mm',array(210,297)); //L For Landscape / P For Portrait
$pdf->AddPage();

//Menambahkan Gambar
$pdf->Image('../../assets/frontend/images/logo.png',10,10,-175);

$pdf->SetFont('Arial','B',13);
$pdf->Cell(80);
$pdf->Cell(30,10,'Data Pemesanan',0,0,'C');
$pdf->Ln();
$pdf->Cell(80);
$pdf->Cell(30,10,'Shafiyyah Fashion | www.shafiyyahfashion.com',0,0,'C');
$pdf->Ln();

}
//Fields Name position
$Y_Fields_Name_position = 30;

//First create each Field Name
//Gray color filling each Field Name box
$pdf->SetFillColor(110,180,230);
//Bold Font for Field Name
$pdf->SetFont('Arial','B',10);
$pdf->SetY($Y_Fields_Name_position);
$pdf->SetX(15);
$pdf->Cell(25,8,'ID Order',1,0,'C',1);
$pdf->SetX(40);
$pdf->Cell(40,8,'Nama',1,0,'C',1);
$pdf->SetX(80);
$pdf->Cell(25,8,'Status',1,0,'C',1);
$pdf->SetX(105);
$pdf->Cell(25,8,'Tanggal Order',1,0,'C',1);
$pdf->SetX(130);
$pdf->Cell(50,8,'Total',1,0,'C',1);

$pdf->Ln();

//Table position, under Fields Name
$Y_Table_Position = 38;

//Now show the columns
$pdf->SetFont('Arial','',10);

$pdf->SetY($Y_Table_Position);
$pdf->SetX(15);
$pdf->MultiCell(25,6,$column_nik,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(40);
$pdf->MultiCell(40,6,$column_nama,1,'L');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(80);
$pdf->MultiCell(25,6,$column_status,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(105);
$pdf->MultiCell(25,6,$column_tanggal,1,'C');

$pdf->SetY($Y_Table_Position);
$pdf->SetX(130);
$pdf->MultiCell(50,6,$column_total,1,'L');


$pdf->Output();
?>
