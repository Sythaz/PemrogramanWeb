<?php
// Jika ingat saya tidak dipilih, hapus semua cookie
if (!isset($_COOKIE['ingat30menit'])) {
    $waktuCookie = time() + (30 * 60);
    setcookie("email", "", $waktuCookie);
    setcookie("password", "", $waktuCookie);
    setcookie("ingat30menit", "", $waktuCookie);
}
header("location:loginPage.php");
?>