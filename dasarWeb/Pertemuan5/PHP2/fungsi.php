<?php
/*
    function perkenalan($nama, $salam="Assalamualaikum"){
        echo $salam . ", ";
        echo "Perkenalkan, nama saya " . $nama . "<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    perkenalan("Syafiq", "Hallo");

    echo "<hr>"; //garis

    $saya = "Syafiq";
    $ucapanSalam = "Selamat Pagi";

    perkenalan($saya);

    echo "<br><br>";
*/

    function hitungUmur($thn_lahir, $thn_sekarang){
        $umur = $thn_sekarang - $thn_lahir;
        return $umur;
    }

    echo "Umur saya adalah " . hitungUmur(2004, 2024) . " tahun";
?>