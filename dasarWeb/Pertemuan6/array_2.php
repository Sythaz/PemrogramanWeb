<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Array Asosiatif</title>
        <style>
            div {
                margin: auto;
                background-color: #f2f2f2;
                width: 350px;
            }
            p {
                font-size: 18px;
                margin: 5px 0;
            }
            .label {
                font-weight: bold;
            }
        </style>
    </head>
    <body>
        <div>
            <?php
            $Dosen = [
                'nama' => 'Elok Nur Hamdana',
                'domisili' => 'Malang',
                'jenis_kelamin' => 'Perempuan'
            ];

            echo "<p><span class='label'>Nama:</span> {$Dosen['nama']}</p>";
            echo "<p><span class='label'>Domisili:</span> {$Dosen['domisili']}</p>";
            echo "<p><span class='label'>Jenis Kelamin:</span> {$Dosen['jenis_kelamin']}</p>";
            ?>
            </div>
    </body>
</html>
