<?php
$siswa = [
    "Alice" => 85,
    "Bob" => 92,
    "Charlie" => 78,
    "David" => 64,
    "Eva" => 90
];

foreach ($siswa as $nama => $nilai) {
    echo $nama . ": " . $nilai . "<br>";
}

echo("<br>");

$totalNilai = array_sum($siswa);
$jumlahSiswa = count($siswa);
$rataRata = $totalNilai / $jumlahSiswa;

echo "Rata-rata nilai kelas: " . $rataRata . "<br>";

echo("<br>");

echo "Daftar siswa yang nilainya di atas rata-rata:<br>";
foreach ($siswa as $nama => $nilai) {
    if ($nilai > $rataRata) {
        echo $nama . " dengan nilai: " . $nilai . "<br>";
    }
}
?>
