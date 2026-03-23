<?php
include 'qrlib.php'; 


$text = "S";


$filename = '../qrcodes/text.txt';


QRcode::png($text, $filename, QR_ECLEVEL_L, 6);


echo "QR code generated! <br>";
echo "<img src='$filename' />";
?>