<?php
if (isset($_POST['submit'])) {
    $targetdir = 'uploads/'; // Direktori
    $targetfile = $targetdir . basename($_FILES['myfile']['name']); // Menggabungkan path dir dan nama file beserta tipe filenya
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION)); // pathinfo mengambil tipe filenya

    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $extensionGambar = array("png", "jpg", "jpeg", "gif");
    $maxsize = 3 * 1024 * 1024; // ini 3 mb
    if (in_array($fileType, $allowedExtensions) && $_FILES['myfile']['size'] <= $maxsize) {
        if (move_uploaded_file($_FILES['myfile']['tmp_name'], $targetfile)) { // Fungsi ini return bool
            echo 'File berhasil diunggah <br>';
            if (in_array($fileType, $extensionGambar)) { // Validasi jika file adalah gambar
                echo "<img style='width: 200px;' src='$targetfile'>";
            }
        } else {
            echo 'Gagal mengunggah file';
        }
    } else {
        echo 'File tidak valid atau melebihi ukuran maksimum yang diizinkan';
    }
}
?>