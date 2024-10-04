<?php
function perkenalan($nama, $salam){
    echo $salam . ", ";
    echo "Perkenalkan, nama saya " . $nama . "<br>";
    echo "Senang berkenalan dengan anda<br>";
}
perkenalan("Syafiq", "Hallo");

echo "<hr>";

$saya = "Syafiq";
$ucapanSalam = "Selamat pagi";

perkenalan($saya, $ucapanSalam);
?>