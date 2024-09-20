<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilkali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "Hasil penjumlahan = $hasilTambah <br>";
echo "Hasil pengurangan = $hasilKurang <br>";
echo "Hasil kali = $hasilkali <br>";
echo "Hasil bagi = $hasilBagi <br>";
echo "Sisa bagi = $sisaBagi <br>";
echo "Hasil pangkat = $pangkat <br>";

echo("<br><br>");

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "Hasil Sama = $hasilSama <br>";
echo "Hasil Tidak Sama = $hasilTidakSama <br>";
echo "Hasil Lebih Kecil = $hasilLebihKecil <br>";
echo "Hasil Lebih Besar = $hasilLebihBesar <br>";
echo "Hasil Lebih Kecil Sama = $hasilLebihKecilSama <br>";
echo "Hasil Lebih Besar Sama = $hasilLebihBesarSama <br>";
?>