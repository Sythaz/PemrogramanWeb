<!DOCTYPE html>
<html lang="en">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function(){
                $("button.toggle").click(function(){
                    $("div.showhide").slideToggle("slow");
                });
            });
        </script>
        <style>
            .konten {
                background-color: #FFD000;
            }
            table {
                border-collapse: collapse;
                width: 100%;
            }
            tr,th,td{
                border: 1px solid black;
                text-align: left;
                padding: 16px;
            }
            .showhide {
                margin: auto;
                width: 80%;
            }        
            .toggle {
                padding: 10px;
                font-size: 16px;
                border: none;                
                background-color: inherit;
                display: block;
                margin: auto;
            }
            .judulBaris {
                background-color: white;
            }
            .textRataRata {
                text-align: center;
                padding-bottom: 20px;
            }
        </style>
    </head>
    <body>
        <h2>Data Siswa</h2>
        <div class="konten">
            <button class="toggle">Click to show database</button>
            <div class="showhide">
                <table>
                    <tr class="judulBaris" >
                    <th>Nama</th>
                    <th>Umur</th>
                    <th>Kelas</th>
                    <th>Alamat</th>
                </tr>
                <?php
                $dataSiswa = array(
                    array("Andi", 15, "10A", "Malang"),
                    array("Siti", 16, "10B", "Batu"),
                    array("Budi", 15, "10A", "Dinoyo"),
                    array("Anton", 25, "15A", "Dinoyo")
                    
                );

                foreach ($dataSiswa as $film) {
                    echo "<tr>";
                    echo "<td>{$film[0]}</td>";
                    echo "<td>{$film[1]}</td>";
                    echo "<td>{$film[2]}</td>";
                    echo "<td>{$film[3]}</td>";
                    echo "</tr>";
                }

                function hitungRataRataUmur($dataSiswa) {
                    $total = 0;
                    $totalSiswa = count($dataSiswa); // Menghitung total siswa
                    for ($i=0; $i < $totalSiswa; $i++) { 
                        $total += $dataSiswa[$i][1];
                    }
                    return $total / $totalSiswa;
                }
                ?>
            </table>
            <h3 class="textRataRata">Rata-rata Umur Siswa: <?php echo hitungRataRataUmur($dataSiswa); ?> </h3>
        </div>
    </div>
    </body>
</html>