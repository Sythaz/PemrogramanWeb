<?php
require_once 'koneksiPHPSQLServer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["nama_pohon"]) && isset($_POST["hutan"]) && isset($_POST["jumlah_pohon"])) {
        $nama_pohon = $_POST["nama_pohon"];
        $hutan = $_POST["hutan"];
        $jumlah_pohon = $_POST["jumlah_pohon"];
        
        try {
            $sql = "INSERT INTO Pohon (nama_pohon, hutan, jumlah_pohon) VALUES ('$nama_pohon', '$hutan', '$jumlah_pohon')";
            $conn->exec($sql);
            
        } catch (\Throwable $th) {
            echo "Koneksi gagal: " . $th->getMessage();
        }
    }
    header("Location: homePage.php");
}
?>  