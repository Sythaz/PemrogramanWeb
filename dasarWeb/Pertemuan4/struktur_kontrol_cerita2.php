<?php
$harga = 120_000;
$mindiskonHarga = 100_000;
$diskon = 0.8;

echo "Harga Barang: $harga <br>";

if ($harga >= $mindiskonHarga) {
    $diskonBarang = $harga * (1 - $diskon);
    $harga -= $diskonBarang; 
}

echo "Diskon sebesar: $diskonBarang <br>";
echo "Total Bayar: $harga <br>";
?>