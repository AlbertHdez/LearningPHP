<?php

require_once 'vendor/autoload.php';

use Spipu\Html2Pdf\Html2Pdf;

$html2pdf = new Html2Pdf();

//Get the view to print
ob_start();
require_once 'pdf_to_get.php';
$html = ob_get_clean();

$html2pdf->writeHTML($html);
$html2pdf->output('pfd_output.pdf');