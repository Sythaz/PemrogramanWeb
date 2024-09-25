<?php
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
?>