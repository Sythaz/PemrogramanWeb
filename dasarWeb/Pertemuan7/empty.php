<?php
    $myArray = array();
    if(empty($myArray)) {
        echo "Array tidak terdefinisi atau kosong";
    } else {
        echo "Array terdefinisi dan tidak kosong";
    }

    echo "<br>";

    if(empty($nonExistentVar)) {
        echo "Variabel 'nonExistentVar' tidak ditemukan";
    } else {
        echo "Variabel 'nonExistentVar' ditemukan";
    }
?>