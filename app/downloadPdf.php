<?php

$data = $_POST['data']['base64'];

$file = "../cv.pdf" ;
$pdf_decoded = base64_decode($data , true);
file_put_contents($file, $pdf_decoded);

 echo  "recu : ".$data;