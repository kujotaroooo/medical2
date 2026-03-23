<?php
include '../services/qrlib.php';


$text = "S";


$filepath = __DIR__ . '/../qrcodes/stud2.png';


$displayPath = '../qrcodes/stud.png';

QRcode::png($text, $filepath, QR_ECLEVEL_L, 6);


echo "generated <br>";
echo "<img src='$displayPath' />";
?>