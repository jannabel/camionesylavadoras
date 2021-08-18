<?php
include("../functions/bd.php");

require '../vendor/autoload.php';

$id = $_GET['id'];

use Dompdf\Dompdf;
$html=file_get_contents_curl("https://camionesylavadoras.azurewebsites.net/pdf/pdfcamion.php?id=".$id);

$pdf = new Dompdf();
$pdf->set_paper("letter","portrait");
$pdf->loadHtml($html);
$pdf->render();

$pdf->stream('Camionylavadoras.pdf');
function file_get_contents_curl($url){

    $crl=curl_init();
    $timeout = 5;
    curl_setopt($crl, CURLOPT_URL, $url);
    curl_setopt($crl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($crl, CURLOPT_CONNECTTIMEOUT, $timeout);
    $ret = curl_exec($crl);
    curl_close($crl);
    return $ret;
}

