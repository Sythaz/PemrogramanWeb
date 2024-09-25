<?php
    function perkenalan($nama, $salam){
        echo $salam . ", ";
        echo "Perkenalkan, nama saya " . $nama . "<br/>";
        echo "Senang berkenalan dengan Anda<br/>";
    }

    perkenalan("Syafiq", "Hallo");

    echo "<hr>";

    $saya = "Syafiq";
    $ucapanSalam = "Selamat Pagi";
    perkenalan($saya, $ucapanSalam);
?>