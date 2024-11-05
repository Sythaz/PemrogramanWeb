<!-- Homepage menjadi file php karena perlu validasi kedua saat menuju ke HomePage (Keamanan) -->
<?php
// Validasi kedua untuk pemeriksaan sudah login atau belum
if (!isset($_COOKIE['email']) && !isset($_COOKIE['password'])) {    
    echo "<script>
            alert('Maaf, email atau password anda salah. Silahkan kembali ke halaman Login.');
            
            // Saat di klik akan megarahkan ke halaman login lagi
            window.location.href = 'loginPage.php';
          </script>";
}

// Ambil data dari SQL SERVER dengan php ini
require_once 'koneksiPHPSQLServer.php';

$sql = "SELECT * FROM Pohon";

// Bagian Filter
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $filter_tabel = $_POST["filter-tabel"];

    switch ($filter_tabel) {
        case 'nama_pohon_asc':
            $sql = "SELECT * FROM Pohon ORDER BY nama_pohon ASC";
            break;
        case 'nama_pohon_desc':
            $sql = "SELECT * FROM Pohon ORDER BY nama_pohon DESC";
            break;
        case 'hutan_asc':
            $sql = "SELECT * FROM Pohon ORDER BY hutan ASC";
            break;
        case 'hutan_desc':
            $sql = "SELECT * FROM Pohon ORDER BY hutan DESC";
            break;
        case 'jumlah_pohon_asc':
            $sql = "SELECT * FROM Pohon ORDER BY jumlah_pohon ASC";
            break;
        case 'jumlah_pohon_desc':
            $sql = "SELECT * FROM Pohon ORDER BY jumlah_pohon DESC";
            break;            
        default:
            $sql = "SELECT * FROM Pohon";
            break;
    }    
}

$stmt = $conn->query($sql);
?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="styleHomePage.css">
    <title>Homepage | Syafiq</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
    $(document).ready(function(){
        $("#showHide").click(function(){
            $(".showhide-tambah-pohon-form").slideToggle(); // Ganti antara tampil/sembunyi
        });
        
        // Fungsi Delete pada Delete Icon
        $(document).on('click', '.delete-icon', function(){
            $id = $(this).data('id');

            // Agar tidak pindah halaman
            $.ajax({
                url: 'prosesDeleteDataPohon.php',
                type: 'POST',
                data: {
                    tabel_id: $id
                },
                success: function(response) {
                    location.reload(); // Meskipun tidak pindah halaman ke proses namun homepage reload
                },
            })
        })
    });
    </script>

</head>
<body>
    <div style="margin: 20px">
        <div class="header-logout">        
            <div class="selamat-datang">
            Selamat Datang, <span style="color: #235343;">Ecohero</span>!
            <br>
                <div style="font-size: 24px; font-weight: 400;">
                    Silahkan memulai pendataan pohon di hutan Indonesia
                </div>
            </div>
            <div class="tombol-logout">
                <a href="prosesLogout.php" class="tombol-submit-logout">Logout</a>
            </div>
        </div>

        <div class="posisi-tombol-tambah">
            <div class="tombol-tambah" id="showHide">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                    height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0
                            1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z"/>
                </svg>
                <div>Tambah Pohon</div>
            </div>
        </div>    

        <form action="prosesInsertDataPohon.php" method="post" style="margin-bottom: 20px; display: none" class="showhide-tambah-pohon-form">
            <div class="tambah-pohon-form">
                <input type="text" name="nama_pohon" placeholder="Nama Pohon" required>
                <input type="text" name="hutan" placeholder="Hutan" required>
                <input type="number" name="jumlah_pohon" placeholder="Jumlah Pohon" required>
                <input type="submit" value="Tambahkan" style="flex: 0.3; text-indent: 0; padding: 10px; background-color: #235343; font-weight: 500;" required>
            </div>
        </form>

        <div class="container-tombol-filter">
            <form action="" method="post">
                <button class="tombol-filter <?php echo ($filter_tabel === 'nama_pohon_asc') ? 'active' : ''; ?>" 
                    name="filter-tabel" value="nama_pohon_asc" type="submit">Nama Pohon (ASC)</button>
                <button class="tombol-filter <?php echo ($filter_tabel === 'nama_pohon_desc') ? 'active' : ''; ?>" 
                    name="filter-tabel" value="nama_pohon_desc" type="submit">Nama Pohon (DESC)</button>
                <button style="margin-left: 15px" class="tombol-filter <?php echo ($filter_tabel === 'hutan_asc') ? 'active' : ''; ?>" 
                    name="filter-tabel" value="hutan_asc" type="submit">Hutan (ASC)</button>
                <button class="tombol-filter <?php echo ($filter_tabel === 'hutan_desc') ? 'active' : ''; ?>" 
                    name="filter-tabel" value="hutan_desc" type="submit">Hutan (DESC)</button>
                <button style="margin-left: 15px" class="tombol-filter <?php echo ($filter_tabel === 'jumlah_pohon_asc') ? 'active' : ''; ?>" 
                    name="filter-tabel" value="jumlah_pohon_asc" type="submit">Jumlah Pohon (ASC)</button>
                <button class="tombol-filter <?php echo ($filter_tabel === 'jumlah_pohon_desc') ? 'active' : ''; ?>" 
                    name="filter-tabel" value="jumlah_pohon_desc" type="submit">Jumlah Pohon (DESC)</button>
                <button style="margin-left: 15px" class="tombol-filter active" name="filter-tabel" value="default" type="submit">RESET FILTER</button>
            </form>
        </div>
    
        <div class="kotak-tabel">
            <div class="tabel-judul">
                <div class="tabel-judul-item">Hapus</div>
                <div class="tabel-judul-item">No</div>
                <div class="tabel-judul-item">Nama Pohon</div>
                <div class="tabel-judul-item">Hutan</div>
                <div class="tabel-judul-item">Jumlah Pohon</div>
                <div class="tabel-judul-item">Kirim</div>
            </div>  
            
            <?php
            if (isset($stmt)) {
                $barisKe = 0;
                while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $barisKe++;
                echo
                // Tambah FORM UPDATE
                "<form action='prosesUpdateDataPohon.php' method='post'>
                <div class='tabel-isi'>
                    <div class='tabel-isi-item'>
                        <svg class='delete-icon' data-id='" . $row['id'] . "' class='w-6 h-6 text-gray-800 dark:text-white' aria-hidden='true'
                            xmlns='http://www.w3.org/2000/svg' width='24' height='24' fill='none' viewBox='0 0 24 24' style='cursor: pointer; margin-left: 10px'>
                            <path stroke='#235343' stroke-linecap='round' stroke-linejoin='round' stroke-width='2'
                                d='M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z'/>
                        </svg>
                    </div>
                    <div class='tabel-isi-item'>" . $barisKe . "</div> 
                    <div class='tabel-isi-item'>
                        <input name='tabel_nama_pohon' type='text' value='" . htmlspecialchars($row['nama_pohon']) . "' required>
                    </div>
                    <div class='tabel-isi-item'>                
                        <input name='tabel_hutan' type='text' value='" . htmlspecialchars($row['hutan']) . "' required>
                    </div>
                    <div class='tabel-isi-item'>                
                        <input name='tabel_jumlah_pohon' type='number' value='" . $row['jumlah_pohon'] . "' required>
                    </div>
                    <div class='tabel-isi-item tombol-update'>                                    
                        <input name='tabel_id' type='hidden' value='" . $row['id'] . "'>
                        <input type='submit' value='UPDATE' style='background-color: #235343; font-weight: 500; cursor: pointer;'>
                    </div>
                </div>
                </form>";
                }            
            } else {
                echo "Tidak ada data";
            }
            ?>
        </div>
    </div>
</body>
</html>