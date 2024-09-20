<?php
$kursi = 45;
$pelanggan = 28;

$persentaseKursiTersedia = (($kursi - $pelanggan) / $kursi) * 100;
echo("Persentase kursi yang tersedia = $persentaseKursiTersedia%");
?>