<?php
// Cargamos la librería Dompdf
// require_once 'dompdf/autoload.inc.php';
ob_start();
require('prueba2.php');

$html=ob_get_clean();
// debuguear($html);
use Dompdf\Dompdf;

// Creamos un objeto Dompdf
$pdf = new Dompdf();

// debuguear($html);
// Establecemos el papel y cargamos el contenido HTML
$options=$pdf->getOptions();
$options->set(array('isRemoteEnabled'=>true));
$pdf->setOptions($options);
$pdf->loadHtml($html);
$pdf->setPaper("letter");


// Renderizamos el PDF
$pdf->render();
$pru = $pdf->output();
$filename = "reporte".'.pdf';
file_put_contents($filename, $pru);
ob_end_clean(); //limpiar para cargar mas imagenes
$pdf->stream($filename);
// Mostramos el PDF en el navegador
// $pdf->stream('reportePdf.pdf');

