<?php
$totalSiswa = 10;
$siswaDihitung = 0;
$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
$rerata = 0;

sort($nilaiSiswa);

for ($i=2; $i < $totalSiswa-2; $i++) { 
    $siswaDihitung += 1;
    $rerata += $nilaiSiswa[$i];
}

$rerata = $rerata / $siswaDihitung;

echo("Rerata dari siswa tersebut adalah $rerata");
?>