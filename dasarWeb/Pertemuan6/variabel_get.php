<?php
    $nama = @$_GET['nama']; //Tanda @ agar tidak ada peringatan error saat key kosong
    $usia = @$_GET['usia'];

    echo "Hai {$nama}! Apakah benar anda berusi {$usia} tahun?";
?>