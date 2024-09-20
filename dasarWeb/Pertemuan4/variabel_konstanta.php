<?php
$angka1 = 10; //Inisialisasi variabel
$angka2 = 5;
$hasil = $angka1 + $angka2;
echo "Hasil penjumlahan $angka1 dan $angka2 = $hasil <br>";

$benar = true;
$salah = false;
echo "Variabel Benar = $benar, Variabel Salah = $salah <br>";

define("NAMA_SITUS", "websiteku.com"); //Inisialisasi variabel konstanta (const)
define("TAHUN_PENDIRIAN", "2024"); //Aturan konvensi: BESAR_SEMUA

echo "Selamat datang di " . NAMA_SITUS . ", situs yang didirikan pada tahun " . TAHUN_PENDIRIAN . "<br>";
?>