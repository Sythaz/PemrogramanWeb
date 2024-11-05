<!-- Delete data -->
<?php
require_once 'koneksiPHPSQLServer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["tabel_id"])) {
        $id = $_POST["tabel_id"];
        
        try {
            $sql = "DELETE FROM Pohon WHERE id = '$id'";
            $conn->exec($sql);
            
        } catch (\Throwable $th) {
            echo "Koneksi gagal: " . $th->getMessage();
        }
    }
    // header("Location: homePage.php");
}
?>