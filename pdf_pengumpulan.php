<?php 
include('koneksi.php');
require 'dompdf/autoload.inc.php';
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
ob_start();
require('detail_pengumpulan.php');
$html =ob_get_contents();
ob_get_clean();

$dompdf->loadHtml($html);

// (Optional) Setup the paper size and orientation
$dompdf->setPaper('A4', 'portrait');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream('Laporan_Pengumpulan.pdf',['Attachment'=>false]);
