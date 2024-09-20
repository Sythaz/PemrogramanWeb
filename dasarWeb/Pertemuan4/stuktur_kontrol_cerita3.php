<?php
function cekHadiah($score) {
    $prizeStatus = ($score > 500) ? "YA" : "TIDAK";
    return $prizeStatus;
}

$score = 521;
echo "Total skor pemain adalah: $score <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . cekHadiah($score) . "<br>";

echo("<br><br>");

$score = 400;
echo "Total skor pemain adalah: $score <br>";
echo "Apakah pemain mendapatkan hadiah tambahan? " . cekHadiah($score) . "<br>";
?>