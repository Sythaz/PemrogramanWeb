<?php
if (isset($_POST['submit'])) {
    $targetdir = 'uploads/'; // Direktori
    $targetfile = $targetdir . basename($_FILES['myfile']['name']); // Menggabungkan path dir dan nama file beserta tipe filenya
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION)); // pathinfo mengambil tipe filenya

    $allowedExtensions = array('jpg', 'jpeg', 'png', 'gif');
    $maxsize = 3 * 1024 * 1024; // ini 3 mb
    if (in_array($fileType, $allowedExtensions) && $_FILES['myfile']['size'] <= $maxsize) {
        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $targetfile)) { // Fungsi ini return bool
            echo 'File berhasil diunggah <br>';
        } else {
            echo 'Gagal mengunggah file';
        }
    } else {
        echo 'File tidak valid atau melebihi ukuran maksimum yang diizinkan';
    }
}
?>