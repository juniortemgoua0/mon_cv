<?php 


// Inclut le chargeur automatique 
require_once  '../vendor/autoload.php' ; 
 
// reference the Dompdf namespace
use Dompdf\Dompdf;

// instantiate and use the dompdf class
$dompdf = new Dompdf();
// Load content from html file 

ob_start() ;
require "../index.php" ;
$html = ob_get_contents(); 
ob_end_clean() ;
$dompdf->loadHtml($html); 
 
// (Optional) Setup the paper size and orientation 
$dompdf->setPaper('A4', 'landscape');

// Render the HTML as PDF
$dompdf->render();

// Output the generated PDF to Browser
$dompdf->stream();


header("location:../index.php") ;

?>