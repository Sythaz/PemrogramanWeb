<?php
function hitungUmur($thn_lahir, $tahun_sekarang){
    $umur = $tahun_sekarang - $thn_lahir;
    return $umur;
}

echo "Umur saya adalah " . hitungUmur(2004, 2024) . " tahun";

echo "<hr>";

function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan anda<br>";
}
perkenalan("Syafiq", "Hallo");

echo "<hr>";

$saya = "Syafiq";
$ucapanSalam = "Selamat pagi";

perkenalan($saya);
?>