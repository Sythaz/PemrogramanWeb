<?php
require_once 'koneksiPHPSQLServer.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["tabel_id"]) && isset($_POST["tabel_nama_pohon"]) && isset($_POST["tabel_hutan"]) && isset($_POST["tabel_jumlah_pohon"])) {
        $id = $_POST["tabel_id"];
        $nama_pohon = $_POST["tabel_nama_pohon"];
        $hutan = $_POST["tabel_hutan"];
        $jumlah_pohon = $_POST["tabel_jumlah_pohon"];
        
        try {
            $sql = "UPDATE Pohon SET nama_pohon = '$nama_pohon', hutan = '$hutan', jumlah_pohon = '$jumlah_pohon' WHERE id = '$id'";
            $conn->exec($sql);
            
        } catch (\Throwable $th) {
            echo "Koneksi gagal: " . $th->getMessage();
        }
    }
    header("Location: homePage.php");
}
?>