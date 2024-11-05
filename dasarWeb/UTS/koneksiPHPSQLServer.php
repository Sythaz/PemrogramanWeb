<?php
$serverName = "DESKTOP-ES32CGH\SQLEXPRESS";
$database = "PemWebDataPohon";
$username = "";
$password = "";

try {
    $dsn = "sqlsrv:server=$serverName;database=$database";
    $conn = new PDO($dsn, $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (\Throwable $th) {
    echo "Koneksi gagal: " . $th->getMessage();
}
?>